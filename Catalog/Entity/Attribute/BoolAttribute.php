<?php

namespace Ololomarket\Domain\Catalog\Entity\Attribute;

use Ololomarket\Domain\Catalog\Entity\Attribute;
use Ololomarket\Domain\Catalog\ValueObject\AttributeType;

/**
 * @author Konstantin Myakshin <molodchick@gmail.com>
 */
class BoolAttribute extends Attribute
{
    public function getType(): AttributeType
    {
        return new AttributeType(AttributeType::TYPE_BOOL);
    }
}
