<?php

namespace Ololomarket\Domain\Checkout\Entity\Order;

use Ololomarket\Domain\Marketplace\ValueObject\OfferId;

/**
 * @author Konstantin Myakshin <molodchick@gmail.com>
 */
class Item
{
    private $id;

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
}
