<?php

namespace Ololomarket\Domain\Catalog\Entity\Attribute;

use Ololomarket\Domain\Catalog\Entity\Attribute;
use Ololomarket\Domain\Catalog\Entity\Attribute\ChoiceAttribute\ChoiceOption;
use Ololomarket\Domain\Catalog\ValueObject\AttributeType;
use Ololomarket\Domain\Core\Collection;

/**
 * @author Konstantin Myakshin <molodchick@gmail.com>
 */
class ChoiceAttribute extends Attribute
{
    /**
     * @var bool
     */
    private $multiple;

    /**
     * @var Collection|ChoiceOption[]
     */
    private $choices;

    public function __construct(int $id, string $code, string $name, array $choices)
    {
        parent::__construct($id, $code, $name, new AttributeType(AttributeType::TYPE_CHOICE));
    }

    public function isMultiple(): bool
    {
        return $this->multiple;
    }

    /**
     * @return ChoiceOption[]
     */
    public function getOptions(): array
    {
        return $this->choices->getValues();
    }
}
