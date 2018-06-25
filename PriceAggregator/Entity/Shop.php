<?php

namespace Ololomarket\Domain\PriceAggregator\Entity;

use Ololomarket\Domain\Marketplace\ValueObject\CompanyId;

/**
 * @author Konstantin Myakshin <molodchick@gmail.com>
 */
class Shop
{
    private $id;

    /**
     * @var CompanyId
     */
    private $companyId;

    /**
     * @var string
     */
    private $priceUrl;
}
