<?php

namespace Ololomarket\Domain\Catalog\Entity\Product;

use Ololomarket\Domain\Catalog\Entity\Product;
use Ololomarket\Domain\Core\Collection;

/**
 * @author Konstantin Myakshin <molodchick@gmail.com>
 */
class Variation
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var Family
     */
    private $family;

    /**
     * @var string
     */
    private $name;

    /**
     * @var Product
     */
    private $product;

    /**
     * @var Collection|AttributeValue[]
     */
    private $attributeValues;

    /**
     * @param AttributeValue[] $attributeValues
     */
    public function __construct(int $id, Family $family, string $name, Product $product, array $attributeValues)
    {
        $this->id = $id;
        $this->family = $family;
        $this->name = $name;
        $this->product = $product;
        //FIXME: array collection
        $this->attributeValues = $attributeValues;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getFamily(): Family
    {
        return $this->family;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getProduct(): Product
    {
        return $this->product;
    }

    /**
     * @return AttributeValue[]
     */
    public function getAttributeValues(): array
    {
        return $this->attributeValues->getValues();
    }
}
