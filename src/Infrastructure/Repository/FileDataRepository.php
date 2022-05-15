<?php
declare(strict_types=1);

namespace MiniConsole\Infrastructure\Repository;

use MiniConsole\Domain\Model\FileData\FileDataRepositoryInterface;
use MiniConsole\Domain\Model\FileData\InputData;

class FileDataRepository implements FileDataRepositoryInterface
{
    private const DATA_DIRECTORY = 'data/';
    private const DIRECTORY_LEVEL = __DIR__.'/../../../';
    private string $file;
    private string $data;
    
    public function __construct(string $file)
    {
        $file = self::DIRECTORY_LEVEL.self::DATA_DIRECTORY.$file;
        $data = file_get_contents($file);
        $this->file = $file;
        $this->data = empty($data) ? '' : $data;
    }
    
    public function addData(string $result): void
    {
        $this->data = $result;
        file_put_contents($this->file, $this->data);
    }
    
    public function getData(): InputData
    {
        return InputData::createWithData($this->data);
    }
}