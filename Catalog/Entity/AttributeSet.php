<?php

namespace Ololomarket\Domain\Catalog\Entity;

use Ololomarket\Domain\Catalog\Entity\AttributeSet\AttributesGroup;
use Ololomarket\Domain\Core\Collection;

/**
 * @author Konstantin Myakshin <molodchick@gmail.com>
 */
class AttributeSet
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
     * @var Collection|AttributesGroup[]
     */
    private $groups;

    /**
     * @param AttributesGroup[] $groups
     */
    public function __construct(int $id, string $name, array $groups)
    {
        $this->id = $id;
        $this->name = $name;
        //FIXME: array collection
        $this->groups = $groups;
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
     * @return AttributesGroup[]
     */
    public function getGroups(): array
    {
        return $this->groups->getValues();
    }
}
