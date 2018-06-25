<?php

namespace Ololomarket\Domain\Catalog\Entity\AttributeSet;

use Ololomarket\Domain\Catalog\Entity\Attribute;
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
     * @var int
     */
    private $position;

    /**
     * @var Collection|Attribute[]
     */
    private $attributes;
}
