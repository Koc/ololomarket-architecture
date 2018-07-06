<?php

namespace Ololomarket\Domain\PriceAggregator\Repository;

use Ololomarket\Domain\PriceAggregator\Entity\PriceItem;
use Ololomarket\Domain\PriceAggregator\ValueObject\PriceItemId;

/**
 * @author Konstantin Myakshin <molodchick@gmail.com>
 */
interface PriceItemRepository
{
    public function get(PriceItemId $id): PriceItem;

    public function save(PriceItem $priceItem): void;
}
