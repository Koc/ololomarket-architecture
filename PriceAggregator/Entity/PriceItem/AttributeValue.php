<?php

namespace Ololomarket\Domain\PriceAggregator\Entity\PriceItem;

use Ololomarket\Domain\PriceAggregator\Entity\PriceItem;
use Ololomarket\Domain\PriceAggregator\ValueObject\Unit;

/**
 * @author Konstantin Myakshin <molodchick@gmail.com>
 */
class AttributeValue
{
    /**
     * @var int
     */
    private $id;

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

    /**
     * @var Unit|null
     */
    private $unit;

    public function __construct(int $id, PriceItem $priceItem, string $attributeName, string $value, ?Unit $unit)
    {
        $this->id = $id;
        $this->priceItem = $priceItem;
        $this->attributeName = $attributeName;
        $this->value = $value;
        $this->unit = $unit;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getPriceItem(): PriceItem
    {
        return $this->priceItem;
    }

    public function getAttributeName(): string
    {
        return $this->attributeName;
    }

    public function getValue(): string
    {
        return $this->value;
    }

    public function getUnit(): ?Unit
    {
        return $this->unit;
    }
}
