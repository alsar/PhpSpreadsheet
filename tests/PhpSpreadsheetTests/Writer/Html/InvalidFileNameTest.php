<?php

namespace PhpSpreadsheetTests\Writer\Html;

use PhpSpreadsheet\Shared\File;
use PhpSpreadsheet\Spreadsheet;
use PhpSpreadsheet\Worksheet\PageSetup;
use PhpSpreadsheet\Writer\Exception as WriterException;
use PhpSpreadsheet\Writer\Html;
use PhpSpreadsheet\Writer\Pdf\Mpdf;
use PhpSpreadsheetTests\Functional;

class InvalidFileNameTest extends Functional\AbstractFunctional
{
    public function testEmptyFileName(): void
    {
        $this->expectException(WriterException::class);
        $spreadsheet = new Spreadsheet();
        $spreadsheet->getActiveSheet()->getCell('A1')->setValue('Cell 1');
        $writer = new Html($spreadsheet);
        $writer->save('');
    }

    public function testEmptyFileNamePdf(): void
    {
        $this->expectException(WriterException::class);
        $spreadsheet = new Spreadsheet();
        $spreadsheet->getActiveSheet()->getCell('A1')->setValue('Cell 1');
        $writer = new Mpdf($spreadsheet);
        $writer->save('');
    }

    public function testNotEmptyTempdirNamePdf(): void
    {
        $spreadsheet = new Spreadsheet();
        $spreadsheet->getActiveSheet()->getCell('A1')->setValue('Cell 1');
        $writer = new Mpdf($spreadsheet);
        $writer->setFont('Helvetica');
        self::assertEquals('Helvetica', $writer->getFont());
        $writer->setPaperSize(PageSetup::PAPERSIZE_LEDGER);
        self::assertEquals($writer->getPaperSize(), PageSetup::PAPERSIZE_LEDGER);
        self::assertEquals(File::sysGetTempDir() . '/phpsppdf', $writer->getTempDir());
        $writer->setTempDir(File::sysGetTempDir());
        self::assertEquals(File::sysGetTempDir(), $writer->getTempDir());
    }

    public function testEmptyTempdirNamePdf(): void
    {
        $this->expectException(WriterException::class);
        $spreadsheet = new Spreadsheet();
        $spreadsheet->getActiveSheet()->getCell('A1')->setValue('Cell 1');
        $writer = new Mpdf($spreadsheet);
        $writer->setTempDir('');
    }

    public function testWinFileNames(): void
    {
        self::assertEquals('file:///C:/temp/filename.xlsx', Html::winFileToUrl('C:\\temp\filename.xlsx'));
        self::assertEquals('/tmp/filename.xlsx', Html::winFileToUrl('/tmp/filename.xlsx'));
        self::assertEquals('a:bfile', Html::winFileToUrl('a:bfile'));
    }
}
