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

namespace Artemeon\DpmXLParser\Exception;

class InvalidChildException extends ValidatorException
{
    public function __construct(string $contextClass, int $pos, string $expectClass)
    {
        parent::__construct('Provided an unknown child in context ' . $contextClass . ' at position ' . $pos . ' expected: ' . $expectClass);
    }
}
