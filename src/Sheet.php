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

enum Sheet: string
{
    case B0101 = 'b_01.01';
    case B0102 = 'b_01.02';
    case B0103 = 'b_01.03';
    case B0201 = 'b_02.01';
    case B0202 = 'b_02.02';
    case B0203 = 'b_02.03';
    case B0301 = 'b_03.01';
    case B0302 = 'b_03.02';
    case B0303 = 'b_03.03';
    case B0401 = 'b_04.01';
    case B0501 = 'b_05.01';
    case B0502 = 'b_05.02';
    case B0601 = 'b_06.01';
    case B0701 = 'b_07.01';
}
