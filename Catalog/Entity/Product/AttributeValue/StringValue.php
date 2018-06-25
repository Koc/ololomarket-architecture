<?php

namespace Ololomarket\Domain\Catalog\Entity\Product\AttributeValue;

use Ololomarket\Domain\Catalog\Entity\Attribute;
use Ololomarket\Domain\Catalog\Entity\Product;
use Ololomarket\Domain\Catalog\Entity\Product\AttributeValue;

/**
 * @author Konstantin Myakshin <molodchick@gmail.com>
 */
class StringValue extends AttributeValue
{
    /**
     * @var string
     */
    private $stringValue;

    public function __construct(Product $product, Attribute $attribute, string $value)
    {
        parent::__construct($product, $attribute, $value);
    }

    public function getStringValue(): string
    {
        return $this->stringValue;
    }

    protected function doSetValue(string $value): void
    {
        $this->stringValue = $value;
    }
}
