<?php

namespace Ololomarket\Domain\Analytics\Entity;

use Ololomarket\Domain\Checkout\ValueObject\ShopOrderId;

/**
 * @author Konstantin Myakshin <molodchick@gmail.com>
 */
class ShopOrder
{
    /**
     * @var ShopOrderId
     */
    private $shopOrderId;

    private $status;

    private $amount;
}
