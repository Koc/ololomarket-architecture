<?php

namespace Ololomarket\Domain\PriceAggregator\Entity;

use Ololomarket\Domain\Core\Collection;
use Ololomarket\Domain\PriceAggregator\Entity\PriceItem\AttributeValue;
use Ololomarket\Domain\PriceAggregator\Entity\PriceItem\Photo;
use Ololomarket\Domain\PriceAggregator\ValueObject\PriceItemId;

/**
 * @author Konstantin Myakshin <molodchick@gmail.com>
 */
class PriceItem
{
    /**
     * @var PriceItemId
     */
    private $id;

    /**
     * @var Shop
     */
    private $shop;

    /**
     * @var string
     */
    private $shopProductId;

    /**
     * @var string
     */
    private $srcUrl;

    /**
     * @var Category
     */
    private $category;

    /**
     * @var Collection|AttributeValue[]
     */
    private $attributeValues;

    /**
     * @var Collection|Photo[]
     */
    private $photos;

    public function __construct(
        PriceItemId $id,
        Shop $shop,
        string $shopProductId,
        string $srcUrl,
        Category $category,
        array $attributeValues,
        array $photos
    ) {
        $this->id = $id;
        $this->shop = $shop;
        $this->shopProductId = $shopProductId;
        $this->attributeValues = $attributeValues;
        $this->photos = $photos;
    }

    public function getId(): PriceItemId
    {
        return $this->id;
    }

    public function getShop(): Shop
    {
        return $this->shop;
    }

    public function getShopProductId(): string
    {
        return $this->shopProductId;
    }

    public function getSrcUrl(): string
    {
        return $this->srcUrl;
    }

    public function getCategory(): Category
    {
        return $this->category;
    }

    /**
     * @return AttributeValue[]
     */
    public function getAttributeValues()
    {
        return $this->attributeValues->getValues();
    }

    /**
     * @return Photo[]
     */
    public function getPhotos()
    {
        return $this->photos->getValues();
    }
}
