<?php

namespace Ololomarket\Domain\Checkout\Entity\Order;

use Ololomarket\Domain\Checkout\Entity\Order;
use Ololomarket\Domain\Marketplace\ValueObject\OfferId;

/**
 * @author Konstantin Myakshin <molodchick@gmail.com>
 */
class Merchandise
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var Order
     */
    private $order;

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
        Order $order,
        OfferId $offerId,
        string $name,
        string $sku,
        float $price,
        int $qty
    ) {
        $this->id = $id;
        $this->order = $order;
        $this->offerId = $offerId;
        //TODO: выделить orderId, name, sku, price, qty в отдельный value object?
        $this->name = $name;
        $this->sku = $sku;
        $this->price = $price;
        $this->qty = $qty;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getOrder(): Order
    {
        return $this->order;
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
