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

    /**
     * @var string
     */
    private $label;

    public function __construct(ChoiceAttribute $attribute, int $id, string $label)
    {
        $this->id = $id;
        $this->attribute = $attribute;
        $this->label = $label;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getAttribute(): ChoiceAttribute
    {
        return $this->attribute;
    }

    public function getLabel(): string
    {
        return $this->label;
    }
}
