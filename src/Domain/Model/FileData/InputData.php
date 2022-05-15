<?php
declare(strict_types=1);

namespace MiniConsole\Domain\Model\FileData;


class InputData
{
    private string $content;
    
    private function __construct(string $content)
    {
        $this->content = $content;
    }
    
    public static function createWithData(string $content): self
    {
        return new self($content);
    }
    
    public function getContent(): string
    {
        return $this->content;
    }
}
