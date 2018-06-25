<?php

namespace Ololomarket\Domain\Checkout\Entity\Cart;

use Ololomarket\Domain\Checkout\Entity\Cart;
use Ololomarket\Domain\Marketplace\ValueObject\OfferId;

/**
 * @author Konstantin Myakshin <molodchick@gmail.com>
 */
class Item
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var Cart
     */
    private $cart;

    /**
     * @var OfferId
     */
    private $offerId;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $sku;

    /**
     * @var float
     */
    private $price;

    /**
     * @var int
     */
    private $qty;

    public function __construct(
        int $id,
        Cart $cart,
        OfferId $offerId,
        string $name,
        string $sku,
        float $price,
        int $qty
    ) {
        $this->id = $id;
        $this->cart = $cart;
        $this->offerId = $offerId;
        $this->name = $name;
        $this->sku = $sku;
        $this->price = $price;
        $this->qty = $qty;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getCart(): Cart
    {
        return $this->cart;
    }

    public function getOfferId(): OfferId
    {
        return $this->offerId;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getSku(): string
    {
        return $this->sku;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function getQty(): int
    {
        return $this->qty;
    }
}
