<?php

namespace PhpSpreadsheetTests\Calculation\Functions\Information;

use PhpSpreadsheet\Calculation\Information\ExcelError;
use PHPUnit\Framework\TestCase;

class NullTest extends TestCase
{
    public function testNULL(): void
    {
        $result = ExcelError::null();
        self::assertEquals('#NULL!', $result);
    }
}
