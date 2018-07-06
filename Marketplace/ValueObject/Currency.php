<?php

namespace Ololomarket\Domain\Marketplace\ValueObject;

/**
 * @author Konstantin Myakshin <molodchick@gmail.com>
 */
class Currency
{
    public const UAH = 980;

    public const ALL_CURRENCIES = [
        self::UAH,
    ];

    /**
     * @var int
     */
    private $currency;

    public function __construct(int $currency)
    {
        if (!in_array($currency, self::ALL_CURRENCIES, true)) {
            throw new \InvalidArgumentException('Invalid currency.');
        }

        $this->currency = $currency;
    }

    public function getCurrency(): int
    {
        return $this->currency;
    }
}
