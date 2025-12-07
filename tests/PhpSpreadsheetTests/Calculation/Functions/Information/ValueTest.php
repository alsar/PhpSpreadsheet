<?php

namespace PhpSpreadsheetTests\Calculation\Functions\Information;

use PhpSpreadsheet\Calculation\Information\ExcelError;
use PHPUnit\Framework\TestCase;

class ValueTest extends TestCase
{
    public function testVALUE(): void
    {
        $result = ExcelError::VALUE();
        self::assertEquals('#VALUE!', $result);
    }
}
