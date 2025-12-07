<?php

namespace PhpSpreadsheetTests\Cell;

use PhpSpreadsheet\Cell\DefaultValueBinder;

class ValueBinderWithOverriddenDataTypeForValue extends DefaultValueBinder
{
    /**
     * @var bool
     */
    public static $called = false;

    public static function dataTypeForValue($value)
    {
        self::$called = true;

        return parent::dataTypeForValue($value);
    }
}
