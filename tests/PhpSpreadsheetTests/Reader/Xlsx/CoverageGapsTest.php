<?php

namespace PhpSpreadsheetTests\Reader\Xlsx;

use PhpSpreadsheet\Spreadsheet;
use PhpSpreadsheet\Style\Alignment;
use PhpSpreadsheet\Style\Border;
use PhpSpreadsheet\Style\Borders;
use PhpSpreadsheet\Style\Protection;
use PhpSpreadsheetTests\Functional\AbstractFunctional;

class CoverageGapsTest extends AbstractFunctional
{
    public function testCoverageGaps(): void
    {
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        $sheet
            ->getStyle('A1')
            ->getBorders()
            ->setDiagonalDirection(Borders::DIAGONAL_BOTH)
            ->getDiagonal()
            ->setBorderStyle(Border::BORDER_DASHDOTDOT);
        $sheet
            ->getStyle('A2')
            ->getProtection()
            ->setLocked(Protection::PROTECTION_PROTECTED);
        $sheet
            ->getStyle('A3')
            ->getAlignment()
            ->setTextRotation(Alignment::TEXTROTATION_STACK_EXCEL);
        $reloadedSpreadsheet = $this->writeAndReload($spreadsheet, 'Xlsx');
        $spreadsheet->disconnectWorksheets();

        $rsheet = $reloadedSpreadsheet->getActiveSheet();
        self::assertSame(Borders::DIAGONAL_BOTH, $rsheet->getStyle('A1')->getBorders()->getDiagonalDirection());
        self::assertSame(Border::BORDER_DASHDOTDOT, $rsheet->getStyle('A1')->getBorders()->getDiagonal()->getBorderStyle());
        self::assertSame(Protection::PROTECTION_PROTECTED, $rsheet->getStyle('A2')->getProtection()->getLocked());
        self::assertSame(Alignment::TEXTROTATION_STACK_PHPSPREADSHEET, $rsheet->getStyle('A3')->getAlignment()->getTextRotation());

        $reloadedSpreadsheet->disconnectWorksheets();
    }
}
