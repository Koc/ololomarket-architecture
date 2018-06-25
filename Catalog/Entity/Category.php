<?php

namespace Ololomarket\Domain\Catalog\Entity;

/**
 * @author Konstantin Myakshin <molodchick@gmail.com>
 */
class Category
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
     * @var Category|null
     */
    private $parent;

    /**
     * @var AttributeSet|null
     */
    private $attributeSet;

    public function __construct(int $id, string $name, ?Category $parent, ?AttributeSet $attributeSet)
    {
        $this->id = $id;
        $this->name = $name;
        $this->parent = $parent;
        $this->attributeSet = $attributeSet;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getParent(): ?Category
    {
        return $this->parent;
    }

    public function getAttributeSet(): ?AttributeSet
    {
        return $this->attributeSet;
    }

    public function allowHasProducts(): bool
    {
        return null !== $this->attributeSet;
    }
}
