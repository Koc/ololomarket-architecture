<?php

namespace Ololomarket\Domain\Marketplace\ValueObject;

/**
 * @author Konstantin Myakshin <molodchick@gmail.com>
 */
class BlockReason
{
    public const NOT_IN_STOCK = 1;

    public const INVALID_PRICE = 2;

    public const ALL_REASONS = [
        self::ALL_REASONS,
        self::INVALID_PRICE,
    ];

    private const BLOCK_PERIODS = [
        self::NOT_IN_STOCK => 'P7D',
        self::INVALID_PRICE => 'P10D',
    ];

    /**
     * @var int
     */
    private $reason;

    public function __construct(int $reason)
    {
        if (!in_array($reason, self::ALL_REASONS, true)) {
            throw new \InvalidArgumentException('Invalid reason.');
        }

        $this->reason = $reason;
    }

    public function getReason(): int
    {
        return $this->reason;
    }

    public function getUnlockDate(): \DateTimeInterface
    {
        $now = new \DateTimeImmutable();
        $intervalSpec = self::BLOCK_PERIODS[$this->reason];

        return $now->add(new \DateInterval($intervalSpec));
    }
}
