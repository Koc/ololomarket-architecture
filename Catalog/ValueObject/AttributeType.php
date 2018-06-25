<?php

namespace Ololomarket\Domain\Catalog\ValueObject;

/**
 * @author Konstantin Myakshin <molodchick@gmail.com>
 */
class AttributeType
{
    public const TYPE_INT = 1;

    public const TYPE_DECIMAL = 2;

    public const TYPE_BOOL = 3;

    public const TYPE_STRING = 4;

    public const TYPE_CHOICE = 5;

    public const TYPE_MEDIA = 6;

    private const ALL_TYPES = [
        self::TYPE_INT,
        self::TYPE_DECIMAL,
        self::TYPE_BOOL,
        self::TYPE_STRING,
        self::TYPE_CHOICE,
        self::TYPE_MEDIA,
    ];

    /**
     * @var int
     */
    private $type;

    public function __construct(int $type)
    {
        if (!in_array($type, self::ALL_TYPES, true)) {
            throw new \InvalidArgumentException('Invalid type.');
        }

        $this->type = $type;
    }

    public function getType(): int
    {
        return $this->type;
    }
}
