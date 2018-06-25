<?php

namespace Ololomarket\Domain\Catalog\Entity\AttributeSet\AttributeGroup;

use Ololomarket\Domain\Catalog\Entity\Attribute;
use Ololomarket\Domain\Catalog\Entity\AttributeSet\AttributesGroup;

/**
 * @author Konstantin Myakshin <molodchick@gmail.com>
 */
class GroupAttribute
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var AttributesGroup
     */
    private $attributeGroup;

    /**
     * @var Attribute
     */
    private $attribute;

    /**
     * @var int
     */
    private $position;

    public function __construct(int $id, AttributesGroup $attributeGroup, Attribute $attribute, int $position)
    {
        $this->id = $id;
        $this->attributeGroup = $attributeGroup;
        $this->attribute = $attribute;
        $this->position = $position;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getAttributeGroup(): AttributesGroup
    {
        return $this->attributeGroup;
    }

    public function getAttribute(): Attribute
    {
        return $this->attribute;
    }

    public function getPosition(): int
    {
        return $this->position;
    }
}
