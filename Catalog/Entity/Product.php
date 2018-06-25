<?php

namespace Ololomarket\Domain\Catalog\Entity;

use Ololomarket\Domain\Catalog\Entity\Attribute\ChoiceAttribute;
use Ololomarket\Domain\Catalog\Entity\Attribute\ChoiceAttribute\ChoiceOption;
use Ololomarket\Domain\Catalog\Entity\Attribute\IntAttribute;
use Ololomarket\Domain\Catalog\Entity\Attribute\MediaAttribute;
use Ololomarket\Domain\Catalog\Entity\Attribute\StringAttribute;
use Ololomarket\Domain\Catalog\Entity\Product\AttributeValue;
use Ololomarket\Domain\Catalog\Entity\Product\Family;
use Ololomarket\Domain\Core\Collection;

/**
 * @author Konstantin Myakshin <molodchick@gmail.com>
 */
class Product
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $sku;

    /**
     * @var Category
     */
    private $category;

    /**
     * @var Family
     */
    private $family;

    /**
     * @var Collection|AttributeValue[]
     */
    private $attributeValues;

    /**
     * @param AttributeValue[] $attributeValues
     */
    public function __construct(
        int $id,
        string $name,
        string $sku,
        Category $category,
        ?Family $family,
        array $attributeValues
    ) {
        $this->id = $id;
        $this->name = $name;
        $this->sku = $sku;
        $this->category = $category;
        $this->attributeValues = $attributeValues;
    }

    public function edit()
    {

    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getSku(): string
    {
        return $this->sku;
    }

    public function getCategory(): Category
    {
        return $this->category;
    }

    public function getFamily(): Family
    {
        return $this->family;
    }

    /**
     * @return AttributeValue[]
     */
    public function getAttributeValues(): array
    {
        return $this->attributeValues->getValues();
    }

    protected function setIntegerAttributeValue(IntAttribute $attribute, int $value): void
    {

    }

    protected function setStringAttributeValue(StringAttribute $attribute, string $value): void
    {

    }

    protected function setMediaAttributeValue(MediaAttribute $attribute, string $value): void
    {
        //FIXME: implement signature
    }

    /**
     * @param ChoiceOption[] $options
     */
    protected function setOptionAttributeValue(ChoiceAttribute $attribute, array $options): void
    {

    }
}
