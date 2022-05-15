<?php
declare(strict_types=1);

namespace MiniConsole\Application\Query\GetFIleContents;

class GetFileContentsArrayDataTransformer implements GetFileContentsDataTransformer
{
    public function transform($result): array
    {
        return [$result];
    }
}
