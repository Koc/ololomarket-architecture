<?php

namespace Ololomarket\Domain\Checkout\Entity;

use Ololomarket\Domain\Checkout\Entity\Order\Item;
use Ololomarket\Domain\Checkout\ValueObject\ShopOrderId;
use Ololomarket\Domain\Core\Collection;
use Ololomarket\Domain\Marketplace\ValueObject\CompanyId;

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
     * @var CompanyId
     */
    private $shopId;

    /**
     * @var Collection|Item[]
     */
    private $items;
}
