<?php

namespace PhpSpreadsheetTests\Calculation\Functions\Statistical;

use PhpSpreadsheet\Spreadsheet;
use PHPUnit\Framework\TestCase;

class ModeTest extends TestCase
{
    /**
     * @dataProvider providerMODE
     *
     * @param mixed $expectedResult
     */
    public function testMODE($expectedResult, string $str): void
    {
        $workbook = new Spreadsheet();
        $sheet = $workbook->getActiveSheet();

        $row = 1;
        $sheet->setCellValue("B$row", "=MODE($str)");
        $sheet->setCellValue("C$row", "=MODE.SNGL($str)");
        self::assertEquals($expectedResult, $sheet->getCell("B$row")->getCalculatedValue());
        self::assertEquals($expectedResult, $sheet->getCell("C$row")->getCalculatedValue());
    }

    public static function providerMODE(): array
    {
        return require 'tests/data/Calculation/Statistical/MODE.php';
    }

    public function testMODENoArgs(): void
    {
        $this->expectException(\PhpSpreadsheet\Calculation\Exception::class);

        $workbook = new Spreadsheet();
        $sheet = $workbook->getActiveSheet();

        $sheet->setCellValue('B1', '=MODE()');
        self::assertEquals('#N/A', $sheet->getCell('B1')->getCalculatedValue());
    }
}
