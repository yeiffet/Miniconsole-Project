<?php
declare(strict_types=1);

namespace MiniConsole\Application\Query\GetFIleContents;

final class GetFileContentsQuery
{
    public static function create(): self
    {
        return new self();
    }
}
