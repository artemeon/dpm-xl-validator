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

use Artemeon\DpmXLParser\RuleSet\DORA;
use Artemeon\DpmXLParser\Sheet;
use Artemeon\DpmXLParser\Validator;
use PHPUnit\Framework\TestCase;

class ValidatorTest extends TestCase
{
    /**
     * @dataProvider validateDataProvider
     */
    public function testValidate(Sheet $sheet, array $row, bool $isValid): void
    {
        $validator = new Validator(new DORA());
        $result = $validator->validate($sheet, $row);

        self::assertSame($isValid, $result->isValid, implode(', ', $result->failedRules));
    }

    public static function validateDataProvider(): array
    {
        return [
            [
                Sheet::B0101,
                [
                    'c0010' => 'asd',
                    'c0020' => 'AAAAAAAAAAAAAAAAAA00',
                    'c0030' => 'asd',
                    'c0040' => 'asd',
                    'c0050' => 'asd',
                    'c0060' => 'asd',
                ],
                true
            ],
            [
                Sheet::B0102,
                [
                    'c0010' => 'asd',
                    'c0020' => 'AAAAAAAAAAAAAAAAAA00',
                    'c0030' => 'asd',
                    'c0040' => 'asd',
                    'c0050' => 'asd',
                    'c0060' => 'AAAAAAAAAAAAAAAAAA00',
                    'c0070' => 'asd',
                    'c0080' => 'asd',
                    'c0090' => 'asd',
                    'c0100' => 'asd',
                    'c0110' => 'asd',
                ],
                true
            ],
            [
                Sheet::B0103,
                [
                    'c0010' => 'asd',
                    'c0020' => 'asd',
                    'c0030' => 'AAAAAAAAAAAAAAAAAA00',
                    'c0040' => 'asd',
                ],
                true
            ],
            [
                Sheet::B0201,
                [
                    'c0010' => 'asd',
                    'c0020' => 'asd',
                    'c0030' => 'asd',
                    'c0040' => 'asd',
                    'c0050' => 'asd',
                ],
                true
            ],
            [
                Sheet::B0202,
                [
                    'c0010' => 'asd',
                    'c0020' => 'asd',
                    'c0030' => 'asd',
                    'c0040' => 'AAAAAAAAAAAAAAAAAA00',
                    'c0050' => 'asd',
                    'c0060' => 'asd',
                    'c0070' => '5',
                    'c0080' => '10',
                    'c0090' => 'asd',
                    'c0100' => 'asd',
                    'c0110' => 'asd',
                    'c0120' => 'asd',
                    'c0130' => 'asd',
                    'c0140' => 'asd',
                    'c0160' => 'asd',
                    'c0170' => 'asd',
                    'c0180' => 'asd',
                ],
                true
            ],
            [
                Sheet::B0203,
                [
                    'c0010' => 'asd',
                    'c0020' => 'asd',
                    'c0030' => 'asd',
                ],
                true
            ],
            [
                Sheet::B0301,
                [
                    'c0010' => 'asd',
                    'c0020' => 'asd',
                    'c0030' => 'AAAAAAAAAAAAAAAAAA00',
                ],
                true
            ],
            [
                Sheet::B0302,
                [
                    'c0010' => 'asd',
                    'c0020' => 'asd',
                    'c0030' => 'asd',
                ],
                true
            ],
            [
                Sheet::B0303,
                [
                    'c0010' => 'asd',
                    'c0020' => 'asd',
                    'c0031' => 'AAAAAAAAAAAAAAAAAA00',
                ],
                true
            ],
            [
                Sheet::B0401,
                [
                    'c0010' => 'asd',
                    'c0020' => 'asd',
                    'c0030' => 'AAAAAAAAAAAAAAAAAA00',
                    'c0040' => 'AAAAAAAAAAAAAAAAAA00',
                ],
                true
            ],
            [
                Sheet::B0501,
                [
                    'c0010' => 'asd',
                    'c0020' => 'asd',
                    'c0030' => 'asd',
                    'c0040' => 'asd',
                    'c0050' => 'asd',
                    'c0060' => 'asd',
                    'c0070' => 'asd',
                    'c0080' => 'asd',
                    'c0090' => 'asd',
                    'c0100' => 'asd',
                    'c0110' => 'asd',
                    'c0120' => 'asd',
                ],
                true
            ],
            [
                Sheet::B0502,
                [
                    'c0010' => 'asd',
                    'c0020' => 'asd',
                    'c0030' => 'asd',
                    'c0040' => 'asd',
                    'c0050' => 'asd',
                    'c0060' => 'asd',
                    'c0070' => 'asd',
                ],
                true
            ],
            [
                Sheet::B0601,
                [
                    'c0010' => 'asd',
                    'c0020' => 'AAAAAAAAAAAAAAAAAA00',
                    'c0030' => 'asd',
                    'c0040' => 'asd',
                    'c0050' => 'asd',
                    'c0060' => 'asd',
                    'c0070' => 'asd',
                    'c0080' => 'asd',
                    'c0090' => 'asd',
                    'c0100' => 'asd',
                ],
                true
            ],
            [
                Sheet::B0701,
                [
                    'c0010' => 'asd',
                    'c0020' => 'asd',
                    'c0030' => 'asd',
                    'c0040' => 'asd',
                    'c0050' => 'asd',
                    'c0060' => 'asd',
                    'c0070' => 'asd',
                    'c0080' => 'asd',
                    'c0090' => 'asd',
                    'c0100' => 'asd',
                    'c0110' => 'asd',
                    'c0120' => 'asd',
                ],
                true
            ]
        ];
    }
}
