<?php

namespace Ololomarket\Domain\Marketplace\Entity;

use Ololomarket\Domain\PriceAggregator\ValueObject\PriceItemId;

/**
 * @author Konstantin Myakshin <molodchick@gmail.com>
 */
class Offer extends AbstractOffer
{
    /**
     * @var PriceItemId
     */
    private $priceItemId;
}
