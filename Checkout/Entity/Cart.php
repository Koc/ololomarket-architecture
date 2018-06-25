<?php

namespace Ololomarket\Domain\Checkout\Entity;

use Ololomarket\Domain\Checkout\Entity\Cart\Purchase;
use Ololomarket\Domain\Core\Collection;
use Ololomarket\Domain\Marketplace\ValueObject\OfferId;

/**
 * @author Konstantin Myakshin <molodchick@gmail.com>
 */
class Cart
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var Collection|Purchase[]
     */
    private $purchases;

    /**
     * @param Purchase[] $purchases
     */
    public function __construct(int $id, array $purchases)
    {
        $this->id = $id;
        //FIXME: array collection
        $this->purchases = $purchases;
    }

    public function addItem(OfferId $offerId, string $name, string $sku, float $price, int $qty)
    {
        // ...
    }

    public function removeItem(Purchase $item)
    {
        // ...
    }

    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return Purchase[]
     */
    public function getPurchases(): array
    {
        return $this->purchases->getValues();
    }
}
