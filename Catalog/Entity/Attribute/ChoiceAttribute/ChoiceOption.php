<?php

namespace Ololomarket\Domain\Catalog\Entity\Attribute\ChoiceAttribute;

use Ololomarket\Domain\Catalog\Entity\Attribute\ChoiceAttribute;

/**
 * @author Konstantin Myakshin <molodchick@gmail.com>
 */
class ChoiceOption
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var ChoiceAttribute
     */
    private $attribute;

    public function __construct(int $id, ChoiceAttribute $attribute)
    {
        $this->id = $id;
        $this->attribute = $attribute;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getAttribute(): ChoiceAttribute
    {
        return $this->attribute;
    }
}
