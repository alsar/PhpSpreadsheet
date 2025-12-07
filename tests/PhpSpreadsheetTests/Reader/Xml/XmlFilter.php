<?php

namespace PhpSpreadsheetTests\Reader\Xml;

use PhpSpreadsheet\Reader\IReadFilter;

/**  Define a Read Filter class implementing IReadFilter  */
class XmlFilter implements IReadFilter
{
    public function readCell($columnAddress, $row, $worksheetName = '')
    {
        return $row !== 4;
    }
}
