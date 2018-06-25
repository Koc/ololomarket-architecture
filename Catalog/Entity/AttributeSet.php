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
}
