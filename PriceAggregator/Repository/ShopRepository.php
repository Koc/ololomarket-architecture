<?php

namespace Ololomarket\Domain\PriceAggregator\Repository;

use Ololomarket\Domain\Marketplace\ValueObject\CompanyId;
use Ololomarket\Domain\PriceAggregator\Entity\Shop;

/**
 * @author Konstantin Myakshin <molodchick@gmail.com>
 */
interface ShopRepository
{
    public function get(CompanyId $id): Shop;

    public function save(Shop $shop): void;
}
