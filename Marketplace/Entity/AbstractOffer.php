<?php

namespace Ololomarket\Domain\Marketplace\Entity;

use Ololomarket\Domain\Marketplace\Command\ActualizeOffer;
use Ololomarket\Domain\Marketplace\ValueObject\BlockReason;
use Ololomarket\Domain\Marketplace\ValueObject\Money;
use Ololomarket\Domain\Marketplace\ValueObject\OfferId;

/**
 * @author Konstantin Myakshin <molodchick@gmail.com>
 */
abstract class AbstractOffer
{
    //TODO: add more fields?
    /**
     * @var OfferId
     */
    protected $id;

    /**
     * @var Company
     */
    protected $company;

    /**
     * @var ProductCard|null
     */
    protected $productCard;

    /**
     * @var bool
     */
    protected $isInStock;

    /**
     * @var Money
     */
    protected $price;

    /**
     * @var Money|null
     */
    protected $specialPrice;

    /**
     * @var \DateTimeInterface
     */
    protected $createdAt;

    /**
     * @var \DateTimeInterface
     */
    protected $actualizedAt;

    /**
     * @var BlockReason|null
     */
    protected $blockReason;

    /**
     * @var \DateTimeInterface|null
     */
    protected $blockedUntil;

    protected function __construct(
        OfferId $id,
        Company $company,
        ActualizeOffer $actualizeOffer
    ) {
        $this->id = $id;
        $this->company = $company;
        $this->actualize($actualizeOffer);
        $this->createdAt = new \DateTimeImmutable();
        $this->actualizedAt = new \DateTimeImmutable();
    }

    /**
     * @internal
     *
     * @see ProductCard::blockOffer()
     */
    public function block(BlockReason $blockReason): void
    {
        $this->blockReason = $blockReason;
        $this->blockedUntil = $blockReason->getUnlockDate();
    }

    /**
     * @internal
     *
     * @see ProductCard::unblockOffer()
     */
    public function unblock(): void
    {
        $this->blockReason = null;
        $this->blockedUntil = null;
    }

    /**
     * @internal
     *
     * @see ProductCard::actualizeOffer()
     */
    public function actualize(ActualizeOffer $dto): void
    {
        $this->price = $dto->getPrice();
        $this->specialPrice = $dto->getSpecialPrice();
        $this->isInStock = $dto->isInStock();
        $this->actualizedAt = new \DateTimeImmutable();
    }

    /**
     * @internal
     *
     * @see ProductCard::linkOffer()
     */
    public function linkToProductCard(ProductCard $productCard): void
    {
        $this->productCard = $productCard;
    }

    /**
     * @internal
     *
     * @see ProductCard::unlinkOffer()
     */
    public function unlinkFromProduct(): void
    {
        $this->productCard = null;
    }

    public function allowedForPurchase(): bool
    {
        return $this->isInStock && new \DateTime() > $this->blockedUntil;
    }

    public function getId(): OfferId
    {
        return $this->id;
    }

    public function getCompany(): Company
    {
        return $this->company;
    }

    public function getProductCard(): ?ProductCard
    {
        return $this->productCard;
    }

    public function isLinked(): bool
    {
        return $this->productCard instanceof ProductCard;
    }

    public function isIsInStock(): bool
    {
        return $this->isInStock;
    }

    public function getPrice(): Money
    {
        return $this->price;
    }

    public function getSpecialPrice(): ?Money
    {
        return $this->specialPrice;
    }

    public function getCreatedAt(): \DateTimeInterface
    {
        return $this->createdAt;
    }

    public function getActualizedAt(): \DateTimeInterface
    {
        return $this->actualizedAt;
    }

    public function getBlockReason(): ?BlockReason
    {
        return $this->blockReason;
    }

    public function getBlockedUntil(): ?\DateTimeInterface
    {
        return $this->blockedUntil;
    }
}
