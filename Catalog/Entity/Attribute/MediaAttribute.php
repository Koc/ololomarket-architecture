<?php

namespace Ololomarket\Domain\Catalog\Entity\Attribute;

use Ololomarket\Domain\Catalog\Entity\Attribute;
use Ololomarket\Domain\Catalog\ValueObject\AttributeType;

/**
 * @author Konstantin Myakshin <molodchick@gmail.com>
 */
class MediaAttribute extends Attribute
{
    public function __construct(int $id, string $name)
    {
        parent::__construct($id, $name, new AttributeType(AttributeType::TYPE_MEDIA));
    }
}
