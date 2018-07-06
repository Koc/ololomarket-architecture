<?php

namespace Ololomarket\Domain\Marketplace\Command;

use Ololomarket\Domain\Marketplace\Entity\Company;
use Ololomarket\Domain\Marketplace\Entity\ProductCard;
use Ololomarket\Domain\PriceAggregator\ValueObject\PriceItemId;

/**
 * @author Konstantin Myakshin <molodchick@gmail.com>
 */
class CreateOffer
{
    /**
     * @var PriceItemId
     */
    private $priceItemId;

    /**
     * @var ProductCard
     */
    private $productCard;

    /**
     * @var Company
     */
    private $company;

    /**
     * @var ActualizeOffer
     */
    private $actualizeOffer;

    public function __construct(
        PriceItemId $priceItemId,
        ProductCard $productCard,
        Company $company,
        ActualizeOffer $actualizeOffer
    ) {
        $this->priceItemId = $priceItemId;
        $this->productCard = $productCard;
        $this->company = $company;
        $this->actualizeOffer = $actualizeOffer;
    }

    public function getPriceItemId(): PriceItemId
    {
        return $this->priceItemId;
    }

    public function getProductCard(): ProductCard
    {
        return $this->productCard;
    }

    public function getCompany(): Company
    {
        return $this->company;
    }

    public function getActualizeOffer(): ActualizeOffer
    {
        return $this->actualizeOffer;
    }
}
