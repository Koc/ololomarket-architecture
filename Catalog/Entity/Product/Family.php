<?php

namespace Ololomarket\Domain\Catalog\Entity\Product;

use Ololomarket\Domain\Catalog\Entity\Attribute;
use Ololomarket\Domain\Core\Collection;

/**
 * @author Konstantin Myakshin <molodchick@gmail.com>
 */
class Family
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
     * @var Variation[]|Collection
     */
    private $variations;

    /**
     * @var Attribute[]|Collection
     */
    private $attributes;

    /**
     * @param Variation[] $variations
     * @param Attribute[] $attributes
     */
    public function __construct(int $id, string $name, array $variations, array $attributes)
    {
        $this->id = $id;
        $this->name = $name;
        //FIXME: array collection
        $this->variations = $variations;
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

    /**
     * @return Variation[]
     */
    public function getVariations(): array
    {
        return $this->variations->getValues();
    }

    /**
     * @return Attribute[]
     */
    public function getAttributes(): array
    {
        return $this->attributes->getValues();
    }
}
