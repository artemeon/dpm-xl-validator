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
    public function __construct(private RuleSetInterface $rule)
    {
    }

    public function validate(string $sheet, array $row): bool
    {
        foreach ($this->rule->getAll() as $rule) {
            $executor = new Executor($sheet, $row);
            $parser = new DpmXLParser(new CommonTokenStream(new DpmXLLexer(InputStream::fromString($rule))));
            $tree = $parser->start();

            $isValid = $executor->run($tree);

            if (!$isValid) {
                return false;
            }
        }

        return true;
    }
}
