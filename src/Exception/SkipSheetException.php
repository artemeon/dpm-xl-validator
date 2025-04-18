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

namespace Artemeon\DpmXLValidator\Exception;

class SkipSheetException extends ValidatorException
{
    public function __construct(string $sheet)
    {
        parent::__construct($sheet);
    }
}
