<?php

namespace Ololomarket\Domain\PriceAggregator\Entity;

//TODO: log using event bus. Use single event handler class for all events
use Ololomarket\Domain\PriceAggregator\ValueObject\Format;

/**
 * @author Konstantin Myakshin <molodchick@gmail.com>
 */
class Task
{
    private $line;

    // many to many
    private $priceItems;

    private $eventStream;

    public function download(string $url)
    {

    }

    public function downloaded(string $path)
    {

    }

    public function setFormat(Format $format)
    {

    }

    public function failParse(string $errorMessage)
    {

    }

    public function addPriceItem(PriceItem $priceItem)
    {

    }

    public function addError(int $line, string $errorMessage)
    {

    }

    public function addValidationError(int $line, string $errorMessage)
    {

    }

    // TaskRepository.getMissingPriceItemIds(Task $task)
    public function markMissing(PriceItem $priceItem)
    {
        // write to event stream, remove using repository
    }

    public function complete(int $added, int $updated, int $errors, int $missing)
    {

    }

    public function isDownloaded(): bool
    {

    }

    public function getPath(): bool
    {

    }

    public function isFormatDetected(): bool
    {

    }

    public function getFormat(): Format
    {

    }

    public function isCompleted(): bool
    {

    }
}
