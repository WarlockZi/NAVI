<?php


namespace services;


class FileLogger
{
    protected string $path;
    protected string $logFile;

    public function __construct(string $fileName = 'log.txt')
    {
        $this->path    = ROOT . 'core';
        $this->logFile = $this->path . $fileName;
    }

    public function read(): string
    {
        return file_get_contents($this->logFile);
    }

    public function write(string $content, bool $timed = false): bool
    {
        $time = $timed ? date('Y-m-d H:i:s') . PHP_EOL : "";
        return file_put_contents($this->logFile, $time . $content . PHP_EOL, FILE_APPEND);
    }


    public function clear(): void
    {
        if ($this->logFile) file_put_contents($this->logFile, '');
    }

}