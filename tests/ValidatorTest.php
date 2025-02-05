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

namespace Artemeon\DpmXLParser\Tests;

use Antlr\Antlr4\Runtime\ParserRuleContext;
use Antlr\Antlr4\Runtime\Tree\ErrorNode;
use Antlr\Antlr4\Runtime\Tree\TerminalNode;
use Artemeon\DpmXLParser\RuleSet\DORA;
use Artemeon\DpmXLParser\Validator;
use PHPUnit\Framework\TestCase;

class ValidatorTest extends TestCase
{
    public function testValidate0101(): void
    {
        $row = [
            'c0010' => 'asd',
            'c0020' => 'eba_qCO:qx2000',
            'c0030' => 'ASASASASASASASASAS00', // [A-Z0-9]{18}[0-9]{2}
            'c0040' => 'eba_qCO:qx2000',
            'c0050' => 'asd',
            'c0060' => 'asd',
            'c0070' => 'eba_CT:x212',
            'c0080' => '2',
            'c0090' => 'asd',
            'c0100' => 'asd',
            'c0110' => 'asd',
        ];

        $validator = new Validator(new DORA());
        $result = $validator->validate('tB_01.01', $row);

        self::assertTrue($result);
    }
}
