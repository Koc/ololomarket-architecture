<?php

namespace Ololomarket\Domain\Marketplace\Entity;

use Ololomarket\Domain\Catalog\ValueObject\ProductId;
use Ololomarket\Domain\Core\Collection;
use Ololomarket\Domain\Marketplace\Command\ActualizeOffer;
use Ololomarket\Domain\Marketplace\Exception\OfferAlreadyLinked;
use Ololomarket\Domain\Marketplace\Exception\OfferNotLinked;
use Ololomarket\Domain\Marketplace\ValueObject\BlockReason;

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
        $this->ensureLinkedWithThisProduct($offer);

        $offer->linkToProductCard($this);
        $this->offers->add($offer);
    }

    public function unlinkOffer(AbstractOffer $offer): void
    {
        $this->ensureLinkedWithThisProductCard($offer);

        $offer->unlinkFromProduct();
        $this->offers->removeElement($offer);
    }

    public function actualizeOffer(AbstractOffer $offer, ActualizeOffer $dto): void
    {
        $this->ensureLinkedWithThisProductCard($offer);

        $offer->actualize($dto);
    }

    public function blockOffer(AbstractOffer $offer, BlockReason $blockReason): void
    {
        $this->ensureLinkedWithThisProductCard($offer);

        $offer->block($blockReason);
    }

    public function unblockOffer(AbstractOffer $offer): void
    {
        $this->ensureLinkedWithThisProductCard($offer);

        $offer->unblock();
    }

    public function changeSlug(string $slug): void
    {
        $this->slug = $slug;
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

    private function ensureLinkedWithThisProductCard(AbstractOffer $offer): void
    {
        if (!$this->offers->contains($offer)) {
            throw new OfferNotLinked();
        }
    }

    private function ensureLinkedWithThisProduct(AbstractOffer $offer): void
    {
        if ($offer->getProductCard() !== $this) {
            throw new OfferAlreadyLinked();
        }
    }
}
