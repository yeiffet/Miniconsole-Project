<?php
declare(strict_types=1);

namespace MiniConsole\Application\Query\GetFIleContents;

use MiniConsole\Domain\Model\FileData\FileDataRepositoryInterface;

final class GetFIleContentsHandler
{
    private FileDataRepositoryInterface $fileRepository;
    private GetFileContentsDataTransformer $dataTransformer;
    
    public function __construct(
        FileDataRepositoryInterface $fileRepository,
        GetFileContentsDataTransformer $dataTransformer
    ) {
        $this->fileRepository = $fileRepository;
        $this->dataTransformer = $dataTransformer;
    }
    
    public function handle(GetFileContentsQuery $query): array
    {
        return $this->dataTransformer->transform($this->fileRepository->getData()->getContent());
    }
}
