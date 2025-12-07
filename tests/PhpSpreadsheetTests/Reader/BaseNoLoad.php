<?php

namespace PhpSpreadsheetTests\Reader;

use PhpSpreadsheet\Reader\BaseReader;

class BaseNoLoad extends BaseReader
{
    public function canRead(string $filename): bool
    {
        return $filename !== '';
    }

    public function loadxxx(string $filename): void
    {
        $this->loadSpreadsheetFromFile($filename);
    }
}
