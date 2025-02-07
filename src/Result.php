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

namespace Artemeon\DpmXLValidator;

use Antlr\Antlr4\Runtime\CommonTokenStream;
use Antlr\Antlr4\Runtime\InputStream;
use Artemeon\DpmXLValidator\Generated\DpmXLLexer;
use Artemeon\DpmXLValidator\Generated\DpmXLParser;

class Result
{
    public function __construct(public bool $isValid, public array $failedRules)
    {
    }
}
