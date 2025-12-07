<?php

namespace PhpSpreadsheetTests\Shared;

use PhpSpreadsheet\Exception as SpreadsheetException;
use PhpSpreadsheet\Shared\Escher\DgContainer;
use PHPUnit\Framework\TestCase;

class DgContainerTest extends TestCase
{
    public function testNullContainerWithThrow(): void
    {
        $this->expectException(SpreadsheetException::class);
        $this->expectExceptionMessage('spgrContainer is unexpectedly null');
        $container = new DgContainer();
        $container->getSpgrContainerOrThrow();
    }

    public function testNullContainerWithoutThrow(): void
    {
        $container = new DgContainer();
        self::assertNull($container->getSpgrContainer());
    }
}
