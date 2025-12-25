<?php


// Bad way memory heavy logic

// $handle = fopen('./text.txt', 'r');
// $data = '';
//  while (($line = fgets($handle)) !== false) {
//     $data .= trim($line). PHP_EOL;   // 👈 generator magic
// }
// echo $data;

class LogFileReader
{
    protected string $filePath;

    public function __construct(string $filePath)
    {
        $this->filePath = $filePath;
    }

    public function getLines(): Generator
    {
        $handle = fopen($this->filePath, 'r');
        if (!$handle) {
            throw new Exception("Unable to open file");
        }

        while (($line = fgets($handle)) !== false) {
            yield trim($line);   // 👈 generator magic
        }

        fclose($handle);
    }
}

$file = new LogFileReader('./text.txt');
foreach ($file->getLines() as $line) {
    echo $line . PHP_EOL;
}
