<?php

namespace PhpSpreadsheetTests\Chart;

use PhpSpreadsheet\Chart\Chart;
use PHPUnit\Framework\TestCase;

class RenderTest extends TestCase
{
    public function testNoRenderer(): void
    {
        $chart = new Chart('Chart1');
        self::assertFalse($chart->render());
    }
}
