<?php

namespace Ololomarket\Domain\Marketplace\Command;

use Ololomarket\Domain\Marketplace\ValueObject\Money;

/**
 * @author Konstantin Myakshin <molodchick@gmail.com>
 */
class ActualizeOffer
{
    /**
     * @var Money
     */
    private $price;

    /**
     * @var Money|null
     */
    private $specialPrice;

    /**
     * @var bool
     */
    private $isInStock;

    public function __construct(Money $price, ?Money $specialPrice, bool $isInStock)
    {
        $this->price = $price;
        $this->specialPrice = $specialPrice;
        $this->isInStock = $isInStock;
    }

    public function getPrice(): Money
    {
        return $this->price;
    }

    public function getSpecialPrice(): ?Money
    {
        return $this->specialPrice;
    }

    public function isInStock(): bool
    {
        return $this->isInStock;
    }
}
