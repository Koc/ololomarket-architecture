<?php

namespace Ololomarket\Domain\PriceAggregator\Entity;

use Ololomarket\Domain\Catalog\ValueObject\ProductId;
use Ololomarket\Domain\Core\Collection;
use Ololomarket\Domain\Marketplace\ValueObject\OfferId;
use Ololomarket\Domain\PriceAggregator\Entity\PriceItem\AttributeValue;
use Ololomarket\Domain\PriceAggregator\Entity\PriceItem\LinkageBlacklistedProduct;
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

    /**
     * @var \DateTimeInterface
     */
    private $createdAt;

    /**
     * @var \DateTimeInterface
     */
    private $updatedAt;

    /**
     * @var OfferId
     */
    private $linkedOfferId;

    /**
     * @var Collection|LinkageBlacklistedProduct[]
     */
    private $linkageBlacklistedProducts;

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
        $this->createdAt = new \DateTimeImmutable();
        $this->updatedAt = new \DateTimeImmutable('0000-00-00');
        //FIXME: array collection
        $this->linkageBlacklistedProducts = [];
    }

    public function addProductIdToLinkageBlacklist(ProductId $productId): void
    {
        $this->linkageBlacklistedProducts->add(new LinkageBlacklistedProduct($this, $productId));
    }

    public function linkWithOfferId(OfferId $offerId): void
    {
        $this->linkedOfferId = $offerId;
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

    public function getCreatedAt(): \DateTimeInterface
    {
        return $this->createdAt;
    }

    public function getUpdatedAt(): \DateTimeInterface
    {
        return $this->updatedAt;
    }

    public function getLinkedOfferId(): OfferId
    {
        return $this->linkedOfferId;
    }

    /**
     * @return ProductId[]
     */
    public function getProductIdsInLinkageBlacklist(): array
    {
        return $this->linkageBlacklistedProducts->getValues();
    }

    public function hasProductIdsInLinkageBlacklist(): bool
    {
        return count($this->getProductIdsInLinkageBlacklist()) > 0;
    }
}
