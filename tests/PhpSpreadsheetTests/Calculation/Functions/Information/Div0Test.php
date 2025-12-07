<?php

namespace PhpSpreadsheetTests\Calculation\Functions\Information;

use PhpSpreadsheet\Calculation\Information\ExcelError;
use PHPUnit\Framework\TestCase;

class Div0Test extends TestCase
{
    public function testDIV0(): void
    {
        $result = ExcelError::DIV0();
        self::assertEquals('#DIV/0!', $result);
    }
}
