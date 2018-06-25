<?php

namespace Ololomarket\Domain\Checkout\Entity;

use Ololomarket\Domain\Checkout\Entity\Order\Merchandise;
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
     * @var Collection|Merchandise[]
     */
    private $items;
}
