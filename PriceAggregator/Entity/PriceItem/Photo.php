<?php

namespace Ololomarket\Domain\PriceAggregator\Entity\PriceItem;

use Ololomarket\Domain\PriceAggregator\Entity\PriceItem;

/**
 * @author Konstantin Myakshin <molodchick@gmail.com>
 */
class Photo
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var PriceItem
     */
    private $priceItem;

    /**
     * @var string
     */
    private $url;

    public function __construct(int $id, PriceItem $priceItem, string $url)
    {
        $this->id = $id;
        $this->priceItem = $priceItem;
        $this->url = $url;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getPriceItem(): PriceItem
    {
        return $this->priceItem;
    }

    public function getUrl(): string
    {
        return $this->url;
    }
}
