<?php

require_once __DIR__ . '/Bootstrap.php';

use PhpSpreadsheet\Helper\Downloader;
use PhpSpreadsheet\Helper\Sample;

$filename = basename($_GET['name']);
$filetype = $_GET['type'];

try {
    $downloader = new Downloader((new Sample())->getTemporaryFolder(), $filename, $filetype);
    $downloader->download();
} catch (Exception $e) {
    die($e->getMessage());
}
