<?php

namespace Ololomarket\Domain\Checkout\Entity;

use Ololomarket\Domain\Core\Collection;

/**
 * @author Konstantin Myakshin <molodchick@gmail.com>
 */
class Order
{
    private $id;

    /**
     * @var Cart
     */
    private $cart;

    /**
     * @var Collection|ShopOrder[]
     */
    private $shopOrders;
}
