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

    protected function __construct(int $id, string $code, string $name)
    {
        $this->id = $id;
        $this->code = $code;
        $this->name = $name;
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

    abstract public function getType(): AttributeType;
}
