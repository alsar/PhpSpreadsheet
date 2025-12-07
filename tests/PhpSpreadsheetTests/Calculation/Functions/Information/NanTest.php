<?php

namespace PhpSpreadsheetTests\Calculation\Functions\Information;

use PhpSpreadsheet\Calculation\Information\ExcelError;
use PHPUnit\Framework\TestCase;

class NanTest extends TestCase
{
    public function testNAN(): void
    {
        $result = ExcelError::NAN();
        self::assertEquals('#NUM!', $result);
    }
}
