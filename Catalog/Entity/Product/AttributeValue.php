<?php

namespace Ololomarket\Domain\Catalog\Entity\Product;

use Ololomarket\Domain\Catalog\Entity\Attribute;
use Ololomarket\Domain\Catalog\Entity\Product;

/**
 * @author Konstantin Myakshin <molodchick@gmail.com>
 */
abstract class AttributeValue
{
    /**
     * @var Product
     */
    protected $product;

    /**
     * @var Attribute
     */
    protected $attribute;

    protected function __construct(Product $product, Attribute $attribute, $value)
    {
        $this->product = $product;
        $this->attribute = $attribute;
        $this->setValue($value);
    }

    public function getProduct(): Product
    {
        return $this->product;
    }

    public function getAttribute(): Attribute
    {
        return $this->attribute;
    }

    protected function setValue($value)
    {
        if (!method_exists($this, 'doSetValue')) {
            throw new \BadMethodCallException(
                sprintf('Missing implementation of "doSetValue" method in %s', static::class)
            );
        }

        $this->doSetValue($value);
    }
}
