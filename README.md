
# Artemeon DPM XL Validator

This library contains a DPM XL validator to validate the DORA rules according to the EBA specification.
It uses the ANTLR4 generated parser and lexer classes for PHP and a validator to apply those rules.

## Usage

```php
<?php

$row = [
    'c0010' => '',
    'c0020' => '',
    // ...
];

$validator = new \Artemeon\DpmXLValidator\Validator(new \Artemeon\DpmXLValidator\RuleSet\DORA());
$result = $validator->validate(\Artemeon\DpmXLValidator\Sheet::B0501, $row);

if (!$result->isValid) {
    echo implode(', ', $result->failedRules);
}

```
