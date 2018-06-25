<?php

namespace Ololomarket\Domain\PriceAggregator\Entity;

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
     * @var Shop
     */
    private $shop;

    /**
     * @var string
     */
    private $name;

    /**
     * @var Category|null
     */
    private $parent;

    public function __construct(int $id, Shop $shop, string $name, ?Category $parent)
    {
        $this->id = $id;
        $this->shop = $shop;
        $this->name = $name;
        $this->parent = $parent;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getShop(): Shop
    {
        return $this->shop;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getParent(): ?Category
    {
        return $this->parent;
    }
}
