<?php

namespace PhpSpreadsheetTests\Reader\Xlsx;

use PhpSpreadsheet\Reader\Xlsx as XlsxReader;
use PhpSpreadsheet\Shared\File;
use PhpSpreadsheet\Writer\Xlsx as XlsxWriter;
use PHPUnit\Framework\TestCase;

class ConditionalBorderTest extends TestCase
{
    public function testReadAndWriteConditionalBorder(): void
    {
        $testfile = 'tests/data/Reader/XLSX/issue.3370.xlsx';
        $file = 'zip://';
        $file .= $testfile;
        $file .= '#xl/styles.xml';
        $data = file_get_contents($file);
        $expected = '<dxfs count="1"><dxf><border><left/><right/><vertical/><horizontal/></border></dxf></dxfs>';
        self::assertStringContainsString($expected, $data);

        $reader = new XlsxReader();
        $spreadsheet = $reader->load($testfile);
        $outfile = File::temporaryFilename();
        $writer = new XlsxWriter($spreadsheet);
        $writer->save($outfile);
        $spreadsheet->disconnectWorksheets();

        $file = 'zip://';
        $file .= $outfile;
        $file .= '#xl/styles.xml';
        $data = file_get_contents($file);
        unlink($outfile);

        $expected = '<dxfs count="1"><dxf><border><left/><right/></border></dxf></dxfs>';
        self::assertStringContainsString($expected, $data);
    }
}
