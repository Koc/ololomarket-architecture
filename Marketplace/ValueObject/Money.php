<?php

namespace Ololomarket\Domain\Marketplace\ValueObject;

/**
 * @author Konstantin Myakshin <molodchick@gmail.com>
 */
class Money
{
    /**
     * @var int
     */
    private $amount;

    /**
     * @var Currency
     */
    private $currency;

    public function __construct(int $amount, Currency $currency)
    {
        $this->amount = $amount;
        $this->currency = $currency;
    }

    public function getAmount(): int
    {
        return $this->amount;
    }

    public function getCurrency(): Currency
    {
        return $this->currency;
    }
}
