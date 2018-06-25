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
    private $options;

    public function __construct(int $id, string $code, string $name, array $options)
    {
        parent::__construct($id, $code, $name);

        $this->options = $options;
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
        return $this->options->getValues();
    }

    public function getType(): AttributeType
    {
        return new AttributeType(AttributeType::TYPE_CHOICE);
    }
}
