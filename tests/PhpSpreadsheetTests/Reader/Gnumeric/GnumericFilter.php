<?php

namespace PhpSpreadsheetTests\Reader\Gnumeric;

use PhpSpreadsheet\Reader\IReadFilter;

/**  Define a Read Filter class implementing IReadFilter  */
class GnumericFilter implements IReadFilter
{
    public function readCell($columnAddress, $row, $worksheetName = '')
    {
        return $row !== 4;
    }
}
