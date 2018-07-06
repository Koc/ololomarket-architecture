<?php

namespace Ololomarket\Domain\Marketplace\Entity;

use Ololomarket\Domain\Marketplace\Command\CreateOffer;
use Ololomarket\Domain\Marketplace\ValueObject\OfferId;
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

    public static function create(OfferId $id, CreateOffer $dto): self
    {
        $offer = new self($id, $dto->getCompany(), $dto->getActualizeOffer());
        $offer->priceItemId = $dto->getPriceItemId();

        return $offer;
    }
}
