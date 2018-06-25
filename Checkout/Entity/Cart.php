<?php

namespace Ololomarket\Domain\Checkout\Entity;

use Ololomarket\Domain\Checkout\Entity\Cart\Item;
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
     * @var Collection|Item[]
     */
    private $items;

    /**
     * @param Item[]|Collection $items
     */
    public function __construct(int $id, $items)
    {
        $this->id = $id;
        $this->items = $items;
    }

    public function addItem(OfferId $offerId, string $name, string $sku, float $price, int $qty)
    {
        // ...
    }

    public function removeItem(Item $item)
    {
        // ...
    }
}
