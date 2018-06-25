<?php

namespace Ololomarket\Domain\Catalog\Entity;

use Ololomarket\Domain\Catalog\ValueObject\AttributeType;

/**
 * @author Konstantin Myakshin <molodchick@gmail.com>
 */
abstract class Attribute
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $code;

    /**
     * @var string
     */
    private $name;

    /**
     * @var AttributeType
     */
    private $type;

    protected function __construct(int $id, string $code, string $name, AttributeType $type)
    {
        $this->id = $id;
        $this->code = $code;
        $this->name = $name;
        $this->type = $type;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getCode(): string
    {
        return $this->code;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getType(): AttributeType
    {
        return $this->type;
    }
}
