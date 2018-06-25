<?php

namespace Ololomarket\Domain\Catalog\Entity\Product\AttributeValue;

use Ololomarket\Domain\Catalog\Entity\Attribute\DecimalAttribute;
use Ololomarket\Domain\Catalog\Entity\Product;
use Ololomarket\Domain\Catalog\Entity\Product\AttributeValue;

/**
 * @author Konstantin Myakshin <molodchick@gmail.com>
 */
class DecimalValue extends AttributeValue
{
    /**
     * @var float
     */
    private $decimalValue;

    public function __construct(Product $product, DecimalAttribute $attribute, float $value)
    {
        parent::__construct($product, $attribute, $value);
    }

    public function getDecimalValue(): float
    {
        return $this->decimalValue;
    }

    protected function doSetValue(int $value): void
    {
        $this->decimalValue = $value;
    }
}
