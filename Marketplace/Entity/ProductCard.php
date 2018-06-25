<?php

namespace Ololomarket\Domain\Marketplace\Entity;

use Ololomarket\Domain\Catalog\ValueObject\ProductId;
use Ololomarket\Domain\Core\Collection;

/**
 * @author Konstantin Myakshin <molodchick@gmail.com>
 */
class ProductCard
{
    /**
     * @var ProductId
     */
    private $productId;

    /**
     * @var string
     */
    private $slug;

    /**
     * @var Collection|AbstractOffer[]
     */
    private $offers;

    public function __construct(ProductId $productId, string $slug)
    {
        $this->productId = $productId;
        $this->slug = $slug;
    }

    public function linkOffer(AbstractOffer $offer): void
    {

    }

    public function updateOffer(AbstractOffer $offer): void
    {

    }

    public function unlinkOffer(AbstractOffer $offer): void
    {

    }

    /**
     * @return ProductId
     */
    public function getProductId(): ProductId
    {
        return $this->productId;
    }

    /**
     * @return string
     */
    public function getSlug(): string
    {
        return $this->slug;
    }

    /**
     * @return AbstractOffer[]
     */
    public function getOffers()
    {
        return $this->offers->getValues();
    }
}
