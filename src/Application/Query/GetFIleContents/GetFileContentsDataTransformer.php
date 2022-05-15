<?php

namespace MiniConsole\Application\Query\GetFIleContents;

interface GetFileContentsDataTransformer
{
    public function transform($result);
}