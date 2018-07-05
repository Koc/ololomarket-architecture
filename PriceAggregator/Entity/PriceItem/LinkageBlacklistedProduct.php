<?php

namespace Ololomarket\Domain\PriceAggregator\Entity\PriceItem;

use Ololomarket\Domain\Catalog\ValueObject\ProductId;
use Ololomarket\Domain\PriceAggregator\Entity\PriceItem;

/**
 * @author Konstantin Myakshin <molodchick@gmail.com>
 */
class LinkageBlacklistedProduct
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
     * @var ProductId
     */
    private $productId;

    /**
     * @var \DateTimeInterface
     */
    private $createdAt;

    public function __construct(PriceItem $priceItem, ProductId $productId)
    {
        //FIXME: generate id
//        $this->id = $id;
        $this->priceItem = $priceItem;
        $this->productId = $productId;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getPriceItem(): PriceItem
    {
        return $this->priceItem;
    }

    public function getProductId(): ProductId
    {
        return $this->productId;
    }

    public function getCreatedAt(): \DateTimeInterface
    {
        return $this->createdAt;
    }
}
