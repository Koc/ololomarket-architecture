<?php

namespace Ololomarket\Domain\Catalog\Entity\Product\AttributeValue;

use Ololomarket\Domain\Catalog\Entity\Attribute\BoolAttribute;
use Ololomarket\Domain\Catalog\Entity\Product;
use Ololomarket\Domain\Catalog\Entity\Product\AttributeValue;

/**
 * @author Konstantin Myakshin <molodchick@gmail.com>
 */
class BoolValue extends AttributeValue
{
    /**
     * @var bool
     */
    private $boolValue;

    public function __construct(Product $product, BoolAttribute $attribute, bool $value)
    {
        parent::__construct($product, $attribute, $value);
    }

    public function getBoolValue(): bool
    {
        return $this->boolValue;
    }

    protected function doSetValue(bool $value): void
    {
        $this->boolValue = $value;
    }
}
