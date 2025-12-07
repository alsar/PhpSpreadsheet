<?php

namespace PhpSpreadsheetTests\Style;

use PhpSpreadsheet\Style\Color;
use PhpSpreadsheet\Style\Fill;
use PHPUnit\Framework\TestCase;

class FillTest extends TestCase
{
    public function testNonSupervisorColor(): void
    {
        $fill = new Fill();
        $startColor = new Color('FFFF0000');
        $endColor = new Color('FF00FFFF');
        $fill->setFillType(Fill::FILL_PATTERN_GRAY125);
        $fill->setStartColor($startColor);
        $fill->setEndColor($endColor);
        self::assertEquals('FF0000', $fill->getStartColor()->getRGB());
        self::assertEquals('00FFFF', $fill->getEndColor()->getRGB());
    }
}
