<?php

/*
 * This file is part of the Artemeon Core - Web Application Framework.
 *
 * (c) Artemeon <www.artemeon.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Artemeon\DpmXLParser;

use Artemeon\DpmXLParser\Exception\InvalidChildException;
use Artemeon\DpmXLParser\Exception\InvalidContextException;
use Artemeon\DpmXLParser\Exception\InvalidOperatorException;
use Artemeon\DpmXLParser\Exception\SkipSheetException;
use Artemeon\DpmXLParser\Generated\Context;
use Artemeon\DpmXLParser\Generated\Context\ExpressionContext;

class Executor
{
    public function __construct(private string $sheet, private array $row)
    {
    }

    public function run(Context\StartContext $context): bool
    {
        $assignment = $context->getChild(0);
        if (!$assignment instanceof Context\ExprWithoutAssignmentContext) {
            return false;
        }

        try {
            $selection = $assignment->getChild(0);
            if ($selection instanceof Context\ExprWithSelectionContext) {
                return $this->runExprWithSelectionContext($selection);
            } elseif ($selection instanceof Context\ExprWithoutPartialSelectionContext) {
                return $this->runExprWithoutPartialSelectionContext($selection);
            } else {
                return false;
            }
        } catch (SkipSheetException) {
            return true;
        }
    }

    private function runExprWithSelectionContext(Context\ExprWithSelectionContext $context): bool
    {
        $expr = $context->getChild(1);
        if ($expr instanceof Context\PartialSelectContext) {
            $ruleSheet = $this->runPartialSelectContext($expr);
            if ($ruleSheet !== $this->sheet) {
                throw new SkipSheetException($ruleSheet);
            }
        }

        $expression = $context->getChild(3);
        if (!$expression instanceof Context\ExpressionContext) {
            throw new InvalidContextException($expression::class);
        }

        return $this->runExpressionContext($expression);
    }

    private function runExprWithoutPartialSelectionContext(Context\ExprWithoutPartialSelectionContext $context): bool
    {
        $expression = $context->getChild(0);
        if (!$expression instanceof Context\ExpressionContext) {
            throw new InvalidContextException($expression::class);
        }

        return $this->runExpressionContext($expression);
    }

    private function runPartialSelectContext(Context\PartialSelectContext $context): ?string
    {
        return $context->getChild(1)?->getChild(0)?->getChild(0)?->getText();
    }

    private function runExpressionContext(ExpressionContext $context): bool|string|array|null
    {
        if ($context instanceof Context\NotExprContext) {
            return $this->runNotExpression($context);
        } elseif ($context instanceof Context\FuncExprContext) {
            return $this->runFuncExprContext($context);
        } elseif ($context instanceof Context\SelectExprContext) {
            return $this->runSelectExprContext($context);
        } elseif ($context instanceof Context\ParExprContext) {
            return $this->runParExprContext($context);
        } elseif ($context instanceof Context\ItemReferenceExprContext) {
            return $this->runItemReferenceExprContext($context);
        } elseif ($context instanceof Context\LiteralExprContext) {
            return $this->runLiteralExprContext($context);
        } elseif ($context instanceof Context\CompExprContext) {
            return $this->runCompExprContext($context);
        } elseif ($context instanceof Context\BoolExprContext) {
            return $this->runBoolExprContext($context);
        } elseif ($context instanceof Context\InExprContext) {
            return $this->runInExprContext($context);
        } elseif ($context instanceof Context\IfExprContext) {
            return $this->runIfExprContext($context);
        } elseif ($context instanceof Context\ClauseExprContext) {
            return $this->runClauseExprContext($context);
        } else {
            throw new InvalidContextException($context::class);
        }
    }

    private function runIfExprContext(Context\IfExprContext $context): bool
    {
        if ($this->runExpressionContext($context->conditionalExpr)) {
            if (isset($context->thenExpr)) {
                return $this->runExpressionContext($context->thenExpr);
            }
        } else {
            if (isset($context->elseExpr)) {
                return $this->runExpressionContext($context->elseExpr);
            }
        }

        return true;
    }

    private function runClauseExprContext(Context\ClauseExprContext $context): array
    {
        $selectContext = $context->getChild(0);
        if (!$selectContext instanceof Context\SelectExprContext) {
            throw new InvalidChildException($context::class, 0, Context\SelectExprContext::class);
        }

        $exprContext = $context->getChild(2);
        if (!$exprContext instanceof Context\GetExprContext) {
            throw new InvalidChildException($context::class, 2, Context\GetExprContext::class);
        }

        return $this->runSelectExprContext($selectContext);
    }

    private function runComparisonFunctionOperatorsContext(Context\ComparisonFunctionOperatorsContext $context): bool
    {
        if ($context instanceof Context\IsnullExprContext) {
            return $this->runIsnullExprContext($context);
        } elseif ($context instanceof Context\MatchExprContext) {
            return $this->runMatchExprContext($context);
        }

        throw new InvalidContextException($context::class);
    }

    private function runNotExpression(Context\NotExprContext $context): bool
    {
        $expression = $context->getChild(2);
        if (!$expression instanceof ExpressionContext) {
            throw new InvalidChildException($context::class, 2, ExpressionContext::class);
        }

        return !$this->runExpressionContext($expression);
    }

    private function runFuncExprContext(Context\FuncExprContext $context): bool
    {
        $compare = $context->getChild(0);
        if (!$compare instanceof Context\ComparisonFunctionsContext) {
            throw new InvalidChildException($context::class, 0, Context\ComparisonFunctionsContext::class);
        }

        return $this->runComparisonFunctionOperatorsContext($compare->getChild(0));
    }

    private function runSelectExprContext(Context\SelectExprContext $context): array
    {
        $operand = $context->getChild(0);
        if (!$operand instanceof Context\SelectContext) {
            throw new InvalidChildException($context::class, 0, Context\SelectContext::class);
        }

        return $this->runSelectOperandContext($operand->getChild(1));
    }

    private function runParExprContext(Context\ParExprContext $context): bool
    {
        $expression = $context->getChild(1);
        if (!$expression instanceof Context\ExpressionContext) {
            throw new InvalidChildException($context::class, 1, Context\ExpressionContext::class);
        }

        return $this->runExpressionContext($expression);
    }

    private function runItemReferenceExprContext(Context\ItemReferenceExprContext|Context\ItemReferenceContext $context): ?string
    {
        $value = $context->getText();
        if (str_starts_with($value, '[') && str_ends_with($value, ']')) {
            return substr($value, 1, -1);
        }

        return null;
    }

    private function runLiteralExprContext(Context\LiteralExprContext $context): ?string
    {
        return $context->getText();
    }

    private function runCompExprContext(Context\CompExprContext $context): bool
    {
        $op = $context->op->getText();
        $left = $this->runExpressionContext($context->left);
        $right = $this->runExpressionContext($context->right);

        if (is_array($left) && count($left) <= 1) {
            $left = $left[0] ?? null;
        }

        if (is_array($right) && count($right) <= 1) {
            $right = $right[0] ?? null;
        }

        if ($op === '=') {
            return $left === $right;
        } elseif ($op === '!=') {
            return $left !== $right;
        } elseif ($op === '>=') {
            return $left >= $right;
        } elseif ($op === '>') {
            return $left > $right;
        } elseif ($op === '<') {
            return $left < $right;
        } elseif ($op === '<=') {
            return $left <= $right;
        }

        throw new InvalidOperatorException($op, ['=', '!=', '>=', '>', '<', '<=']);
    }

    private function runBoolExprContext(Context\BoolExprContext $context): bool
    {
        $op = $context->op->getText();
        if ($op === 'and') {
            return $this->runExpressionContext($context->left) && $this->runExpressionContext($context->right);
        } elseif ($op === 'or') {
            return $this->runExpressionContext($context->left) || $this->runExpressionContext($context->right);
        }

        throw new InvalidOperatorException($op, ['and', 'or']);
    }

    private function runInExprContext(Context\InExprContext $context): bool
    {
        $left = $this->runExpressionContext($context->left);
        if (is_array($left) && count($left) <= 1) {
            $left = $left[0] ?? null;
        }

        $set = $context->getChild(2);
        if (!$set instanceof Context\SetOperandContext) {
            throw new InvalidChildException($context::class, 2, Context\SetOperandContext::class);
        }

        return in_array($left, $this->runSetOperandContext($set));
    }

    private function runSetOperandContext(Context\SetOperandContext $context): array
    {
        $result = [];
        $elements = $context->getChild(1);
        for ($i = 0; $i < $elements->getChildCount(); $i++) {
            $child = $elements->getChild($i);
            if ($child instanceof Context\ItemReferenceContext) {
                $result[] = $this->runItemReferenceExprContext($child);
            }
        }

        return $result;
    }

    private function runSelectOperandContext(Context\SelectOperandContext $context): array
    {
        $operand = $context->getChild(0);
        if (!$operand instanceof Context\CellRefContext) {
            throw new InvalidChildException($context::class, 0, Context\CellRefContext::class);
        }

        $refContext = $operand->getChild(0);
        if ($refContext instanceof Context\CompRefContext) {
            return $this->runCompRefContext($refContext);
        } elseif ($refContext instanceof Context\TableRefContext) {
            return $this->runTableRefContext($refContext);
        } else {
            throw new InvalidContextException($refContext::class);
        }
    }

    private function runCompRefContext(Context\CompRefContext $context): array
    {
        $colHandler = $context->getChild(0)->getChild(0);
        if (!$colHandler instanceof Context\ColHandlerContext) {
            throw new InvalidChildException($context::class, 0, Context\ColHandlerContext::class);
        }

        $result = [];
        $columns = $this->runColHandlerContext($colHandler);
        foreach ($columns as $column) {
            $result[] = $this->row[$column] ?? null;
        }

        return $result;
    }

    private function runTableRefContext(Context\TableRefContext $context): array
    {
        $sheet = $context->getChild(0)->getText();
        if ($sheet !== $this->sheet) {
            throw new SkipSheetException($sheet);
        }

        $colHandler = $context->getChild(2)->getChild(0);
        if (!$colHandler instanceof Context\ColHandlerContext) {
            throw new InvalidChildException($context::class, 0, Context\ColHandlerContext::class);
        }

        $result = [];
        $columns = $this->runColHandlerContext($colHandler);
        foreach ($columns as $column) {
            $result[] = $this->row[$column] ?? null;
        }

        return $result;
    }

    private function runColHandlerContext(Context\ColHandlerContext $context): array
    {
        $columns = [];
        for ($i = 0; $i < $context->getChildCount(); $i++) {
            $value = $context->getChild($i)->getText();
            if ($value === 'c*') {
                $columns = array_keys($this->row);
                break;
            } elseif (str_starts_with($value, 'c')) {
                if (strpos($value, '-')) {
                    $start = (int) strstr(substr($value, 1), '-', true);
                    $end = (int) substr(strstr(substr($value, 1), '-'), 1);
                    for ($i = $start; $i <= $end; $i+= 10) {
                        $columns[] = 'c' . str_pad('' . $i, 4, '0', STR_PAD_LEFT);
                    }
                } else {
                    $columns[] = $value;
                }
            }
        }

        return $columns;
    }

    private function runIsnullExprContext(Context\IsnullExprContext $context): bool
    {
        $expression = $context->getChild(2);
        if (!$expression instanceof ExpressionContext) {
            throw new InvalidChildException($context::class, 2, Context\ExpressionContext::class);
        }

        $result = $this->runExpressionContext($expression);

        if (is_array($result)) {
            foreach ($result as $value) {
                if ($value === null || $value === '') {
                    return true;
                }
            }
        }

        return false;
    }

    private function runMatchExprContext(Context\MatchExprContext $context): bool
    {
        $expression = $context->getChild(2);
        if (!$expression instanceof ExpressionContext) {
            throw new InvalidChildException($context::class, 2, Context\ExpressionContext::class);
        }

        $value = $this->runExpressionContext($expression);
        if (is_array($value) && count($value) <= 1) {
            $value = $value[0] ?? null;
        }

        if (!is_string($value)) {
            return false;
        }

        $regexp = trim($context->getChild(4)->getText(), '"');

        return (bool) preg_match('/' . $regexp . '/', $value);
    }
}
