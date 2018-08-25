<?php

namespace App;

use App\Dollar;
use App\Franc;

abstract class Money
{
    protected $amount;
    protected $currency;

    /**
     * @param integer $amount
     * @param string $currency
     */
    public function __construct(int $amount, string $currency)
    {
        $this->amount = $amount;
        $this->currency = $currency;
    }

    /**
     * @param integer $amount
     * @return Money
     */
    public static function dollar(int $amount): Money
    {
        return new Dollar($amount, "USD");
    }

    /**
     * @param integer $amount
     * @return Money
     */
    public static function franc(int $amount): Money
    {
        return new Franc($amount, "CHF");
    }

    /**
     * @param integer $multiplier
     * @return Money
     */
    abstract public function times(int $multiplier): Money;

    /**
     * @return string
     */
    public function currency(): string
    {
        return $this->currency;
    }

    /**
     * @return integer
     */
    public function amount(): int
    {
        return $this->amount;
    }

    /**
     * @param Money $money
     * @return bool
     */
    public function equals(Money $money): bool
    {
        return $this instanceof $money
            && $this->amount === $money->amount;
    }
}
