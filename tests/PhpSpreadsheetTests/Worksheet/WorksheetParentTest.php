<?php

namespace PhpSpreadsheetTests\Worksheet;

use PhpSpreadsheet\Exception as SpException;
use PhpSpreadsheet\Spreadsheet;
use PhpSpreadsheet\Worksheet\Worksheet;
use PHPUnit\Framework\TestCase;

class WorksheetParentTest extends TestCase
{
    public function testNormal(): void
    {
        $spreadsheet = new Spreadsheet();
        $worksheet = $spreadsheet->getActiveSheet();
        self::assertSame($spreadsheet, $worksheet->getParent());
        self::assertSame($spreadsheet, $worksheet->getParentOrThrow());
    }

    public function testGetParent(): void
    {
        $worksheet = new Worksheet();
        self::assertNull($worksheet->getParent());
    }

    public function testGetParentOrThrow(): void
    {
        $this->expectException(SpException::class);
        $this->expectExceptionMessage('Sheet does not have a parent');
        $worksheet = new Worksheet();
        $worksheet->getParentOrThrow();
    }
}
