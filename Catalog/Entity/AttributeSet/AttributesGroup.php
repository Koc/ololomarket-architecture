<?php

namespace Ololomarket\Domain\Catalog\Entity\AttributeSet;

use Ololomarket\Domain\Catalog\Entity\Attribute;
use Ololomarket\Domain\Catalog\Entity\AttributeSet;
use Ololomarket\Domain\Core\Collection;

/**
 * @author Konstantin Myakshin <molodchick@gmail.com>
 */
class AttributesGroup
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
     * @var AttributeSet
     */
    private $attributeSet;

    /**
     * @var int
     */
    private $position;

    /**
     * @var Collection|Attribute[]
     */
    private $attributes;

    /**
     * @param Attribute[] $attributes
     */
    public function __construct(AttributeSet $attributeSet, int $id, string $name, int $position, array $attributes)
    {
        $this->id = $id;
        $this->name = $name;
        $this->attributeSet = $attributeSet;
        $this->position = $position;
        //FIXME: array collection
        $this->attributes = $attributes;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getAttributeSet(): AttributeSet
    {
        return $this->attributeSet;
    }

    public function getPosition(): int
    {
        return $this->position;
    }

    /**
     * @return Attribute[]
     */
    public function getAttributes(): array
    {
        return $this->attributes->getValues();
    }
}
