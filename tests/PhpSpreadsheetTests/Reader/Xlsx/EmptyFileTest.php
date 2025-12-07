<?php

namespace PhpSpreadsheetTests\Reader\Xlsx;

use PhpSpreadsheet\Reader\Exception as ReaderException;
use PhpSpreadsheet\Reader\Xlsx;
use PhpSpreadsheet\Shared\File;
use PHPUnit\Framework\TestCase;

class EmptyFileTest extends TestCase
{
    /** @var string */
    private $tempfile = '';

    protected function tearDown(): void
    {
        if ($this->tempfile !== '') {
            unlink($this->tempfile);
            $this->tempfile = '';
        }
    }

    public function testEmptyFileLoad(): void
    {
        $this->expectException(ReaderException::class);
        $this->expectExceptionMessage('Could not find zip member');
        $this->tempfile = $temp = File::temporaryFileName();
        file_put_contents($temp, '');
        $reader = new Xlsx();
        $reader->load($temp);
    }

    public function testEmptyFileNames(): void
    {
        $this->expectException(ReaderException::class);
        $this->expectExceptionMessage('Could not find zip member');
        $this->tempfile = $temp = File::temporaryFileName();
        file_put_contents($temp, '');
        $reader = new Xlsx();
        $reader->listWorksheetNames($temp);
    }

    public function testEmptyInfo(): void
    {
        $this->expectException(ReaderException::class);
        $this->expectExceptionMessage('Could not find zip member');
        $this->tempfile = $temp = File::temporaryFileName();
        file_put_contents($temp, '');
        $reader = new Xlsx();
        $reader->listWorksheetInfo($temp);
    }
}
