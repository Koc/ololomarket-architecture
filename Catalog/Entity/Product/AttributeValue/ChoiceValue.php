<?php

namespace Ololomarket\Domain\Catalog\Entity\Product\AttributeValue;

use Ololomarket\Domain\Catalog\Entity\Attribute\ChoiceAttribute;
use Ololomarket\Domain\Catalog\Entity\Attribute\ChoiceAttribute\ChoiceOption;
use Ololomarket\Domain\Catalog\Entity\Product;
use Ololomarket\Domain\Catalog\Entity\Product\AttributeValue;

/**
 * @author Konstantin Myakshin <molodchick@gmail.com>
 */
class ChoiceValue extends AttributeValue
{
    /**
     * @var ChoiceOption
     */
    private $attributeOption;

    public function __construct(Product $product, ChoiceAttribute $attribute, ChoiceOption $attributeOption)
    {
        parent::__construct($product, $attribute, $attributeOption);
    }

    public function getAttributeOption(): ChoiceOption
    {
        return $this->attributeOption;
    }

    protected function doSetValue(ChoiceOption $choiceOption): void
    {
        $this->attributeOption = $choiceOption;
    }
}
