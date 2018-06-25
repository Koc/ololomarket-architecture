<?php

namespace Ololomarket\Domain\Catalog\Entity\Product\AttributeValue;

use Ololomarket\Domain\Catalog\Entity\Attribute;
use Ololomarket\Domain\Catalog\Entity\Product;
use Ololomarket\Domain\Catalog\Entity\Product\AttributeValue;

/**
 * @author Konstantin Myakshin <molodchick@gmail.com>
 */
class IntValue extends AttributeValue
{
    /**
     * @var int
     */
    private $integerValue;

    public function __construct(Product $product, Attribute $attribute, int $value)
    {
        parent::__construct($product, $attribute, $value);
    }

    public function getIntegerValue(): int
    {
        return $this->integerValue;
    }

    protected function doSetValue(int $value): void
    {
        $this->integerValue = $value;
    }
}
