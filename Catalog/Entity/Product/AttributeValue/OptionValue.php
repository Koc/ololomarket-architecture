<?php

namespace Ololomarket\Domain\Catalog\Entity\Product\AttributeValue;

use Ololomarket\Domain\Catalog\Entity\Attribute;
use Ololomarket\Domain\Catalog\Entity\Attribute\ChoiceAttribute\ChoiceOption;
use Ololomarket\Domain\Catalog\Entity\Product;
use Ololomarket\Domain\Catalog\Entity\Product\AttributeValue;

/**
 * @author Konstantin Myakshin <molodchick@gmail.com>
 */
class OptionValue extends AttributeValue
{
    /**
     * @var ChoiceOption
     */
    private $attributeOption;

    public function __construct(Product $product, Attribute $attribute, ChoiceOption $attributeOption)
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
