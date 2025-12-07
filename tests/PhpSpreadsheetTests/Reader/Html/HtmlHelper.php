<?php

namespace PhpSpreadsheetTests\Reader\Html;

use PhpSpreadsheet\Reader\Html;
use PhpSpreadsheet\Shared\File;
use PhpSpreadsheet\Spreadsheet;

class HtmlHelper
{
    public static function createHtml(string $html): string
    {
        $filename = File::temporaryFilename();
        file_put_contents($filename, $html);

        return $filename;
    }

    public static function loadHtmlIntoSpreadsheet(string $filename, bool $unlink = false): Spreadsheet
    {
        $html = new Html();
        $spreadsheet = $html->load($filename);
        if ($unlink) {
            unlink($filename);
        }

        return $spreadsheet;
    }
}
