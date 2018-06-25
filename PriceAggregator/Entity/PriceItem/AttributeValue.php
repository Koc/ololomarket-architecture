<?php

namespace Ololomarket\Domain\PriceAggregator\Entity\PriceItem;

use Ololomarket\Domain\PriceAggregator\Entity\PriceItem;

/**
 * @author Konstantin Myakshin <molodchick@gmail.com>
 */
class AttributeValue
{
    /**
     * @var PriceItem
     */
    private $priceItem;

    /**
     * @var string
     */
    private $attributeName;

    /**
     * @var string
     */
    private $value;
}
