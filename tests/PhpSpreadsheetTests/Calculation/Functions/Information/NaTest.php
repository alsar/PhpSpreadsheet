<?php

namespace PhpSpreadsheetTests\Calculation\Functions\Information;

use PhpSpreadsheet\Calculation\Information\ExcelError;
use PHPUnit\Framework\TestCase;

class NaTest extends TestCase
{
    public function testNA(): void
    {
        $result = ExcelError::NA();
        self::assertEquals('#N/A', $result);
    }
}
