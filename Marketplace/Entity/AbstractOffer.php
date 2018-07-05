<?php

namespace Ololomarket\Domain\Marketplace\Entity;

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
     * @var bool
     */
    protected $available;

    /**
     * @var Money
     */
    protected $price;

    /**
     * @var \DateTimeInterface
     */
    protected $createdAt;

    /**
     * @var \DateTimeInterface
     */
    protected $updatedAt;

    /**
     * @var BlockReason|null
     */
    protected $blockReason;

    /**
     * @var \DateTimeInterface|null
     */
    protected $blockedUntil;

    public function __construct(OfferId $id, Company $company, bool $available, Money $price)
    {
        $this->id = $id;
        $this->company = $company;
        $this->available = $available;
        $this->price = $price;
        $this->createdAt = new \DateTimeImmutable();
        $this->updatedAt = new \DateTimeImmutable();
    }

    public function block(BlockReason $blockReason): void
    {
        $this->blockReason = $blockReason;
        $this->blockedUntil = $blockReason->getUnlockDate();
    }

    public function removeBlock(): void
    {
        $this->blockReason = null;
        $this->blockedUntil = null;
    }

    public function allowedForPurchase(): bool
    {
        return $this->available && new \DateTime() > $this->blockedUntil;
    }

    public function getId(): OfferId
    {
        return $this->id;
    }

    public function getCompany(): Company
    {
        return $this->company;
    }

    public function isAvailable(): bool
    {
        return $this->available;
    }

    public function getPrice(): Money
    {
        return $this->price;
    }

    public function getCreatedAt(): \DateTimeInterface
    {
        return $this->createdAt;
    }

    public function getUpdatedAt(): \DateTimeInterface
    {
        return $this->updatedAt;
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
