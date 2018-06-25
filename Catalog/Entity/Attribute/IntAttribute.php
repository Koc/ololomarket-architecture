<?php

namespace Ololomarket\Domain\Catalog\Entity\Attribute;

use Ololomarket\Domain\Catalog\Entity\Attribute;
use Ololomarket\Domain\Catalog\ValueObject\AttributeType;

/**
 * @author Konstantin Myakshin <molodchick@gmail.com>
 */
class IntAttribute extends Attribute
{
    public function __construct(int $id, string $code, string $name)
    {
        parent::__construct($id, $code, $name, new AttributeType(AttributeType::TYPE_INT));
    }
}
