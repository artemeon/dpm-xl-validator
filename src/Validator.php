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

use Antlr\Antlr4\Runtime\CommonTokenStream;
use Antlr\Antlr4\Runtime\InputStream;
use Artemeon\DpmXLParser\Generated\DpmXLLexer;
use Artemeon\DpmXLParser\Generated\DpmXLParser;

class Validator
{
    private array $ruleCache = [];

    public function __construct(private RuleSetInterface $rule)
    {
    }

    public function validate(Sheet $sheet, array $row): Result
    {
        $failedRules = [];
        foreach ($this->rule->getAll() as $code => $rule) {
            if (!isset($this->ruleCache[$code])) {
                $parser = new DpmXLParser(new CommonTokenStream(new DpmXLLexer(InputStream::fromString($rule))));
                $this->ruleCache[$code] = $parser->start();
            }

            $executor = new Executor('t' . ucfirst($sheet->value), $row);
            $isValid = $executor->run($this->ruleCache[$code]);

            if (!$isValid) {
                $failedRules[$code] = $rule;
            }
        }

        return new Result(count($failedRules) === 0, $failedRules);
    }
}
