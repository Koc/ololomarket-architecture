<?php

namespace Ololomarket\Domain\PriceAggregator\Service;

class ProcessTaskHandler
{
    private $download;

    private $detectFormat;
    private $unitOfWork;

    public function __construct(UnitOfWork $unitOfWork, callable $download, callable $detectFormat)
    {
        $this->download = $download;
        $this->detectFormat = $detectFormat;
        $this->unitOfWork = $unitOfWork;
    }

    public function __invoke(int $taskId)
    {
        $this->unitOfWork->execute($this->download, $taskId);
        $this->unitOfWork->execute($this->detectFormat, $taskId);
    }
}

class ProcessTaskHandlerV2
{
    /**
     * @var callable[]
     */
    private $operations;
    private $unitOfWork;

    public function __construct(UnitOfWork $unitOfWork, $operations)
    {
        $this->operations = $operations;
        $this->unitOfWork = $unitOfWork;
    }

    public function __invoke(int $taskId)
    {
        foreach ($this->operations as $operation) {
            $this->unitOfWork->execute($operation, $taskId);
        }
    }
}

class DownloadTask
{
    private $downloader;

    public function __construct($downloader)
    {
        $this->downloader = $downloader;
    }

    public function __invoke(int $taskId)
    {
        $task = $this->taskRepository->get($taskId);

        $path = $this->downloader->download($task->getUrl())

        $task->download($path);
    }
}
