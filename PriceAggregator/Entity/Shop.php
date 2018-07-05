<?php

namespace Ololomarket\Domain\PriceAggregator\Entity;

use Ololomarket\Domain\Marketplace\ValueObject\CompanyId;

/**
 * @author Konstantin Myakshin <molodchick@gmail.com>
 */
class Shop
{
    /**
     * @var CompanyId
     */
    private $id;

    /**
     * @var string
     */
    private $priceUrl;

    /**
     * @var \DateTimeInterface
     */
    private $priceParsedAt;

    /**
     * @var \DateTimeInterface
     */
    private $lightPriceParsedAt;

    public function __construct(CompanyId $id, string $priceUrl)
    {
        $this->id = $id;
        $this->priceUrl = $priceUrl;
        $this->priceParsedAt = new \DateTimeImmutable('0000-00-00');
        $this->lightPriceParsedAt = new \DateTimeImmutable('0000-00-00');
    }

    public function markPriceAsParsed(): void
    {
        $this->priceParsedAt = new \DateTimeImmutable();
    }

    public function markLightPriceAsParsed(): void
    {
        $this->lightPriceParsedAt = new \DateTimeImmutable();
    }

    public function getId(): CompanyId
    {
        return $this->id;
    }

    public function getPriceUrl(): string
    {
        return $this->priceUrl;
    }

    public function getPriceParsedAt(): \DateTimeInterface
    {
        return $this->priceParsedAt;
    }

    public function getLightPriceParsedAt(): \DateTimeInterface
    {
        return $this->lightPriceParsedAt;
    }
}
