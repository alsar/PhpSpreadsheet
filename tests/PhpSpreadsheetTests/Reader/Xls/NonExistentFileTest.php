<?php

namespace PhpSpreadsheetTests\Reader\Xls;

use PhpSpreadsheet\Reader\Xls;
use PhpSpreadsheet\Shared\File;
use PHPUnit\Framework\TestCase;

class NonExistentFileTest extends TestCase
{
    public function testNonExistentFile(): void
    {
        $temp = File::temporaryFileName();
        file_put_contents($temp, '');
        unlink($temp);
        $reader = new Xls();
        self::assertFalse($reader->canRead($temp));
    }
}
