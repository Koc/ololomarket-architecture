<?php

namespace Ololomarket\Domain\Analytics\Entity;

use Ololomarket\Domain\Catalog\ValueObject\ShopOrderStatus;
use Ololomarket\Domain\Checkout\ValueObject\ShopOrderId;

/**
 * @author Konstantin Myakshin <molodchick@gmail.com>
 */
class ShopOrder
{
    /**
     * @var ShopOrderId
     */
    private $id;

    /**
     * @var ShopOrderStatus
     */
    private $status;

    /**
     * //FIXME: use money
     * @var int
     */
    private $subtotal;
}
