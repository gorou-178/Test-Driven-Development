<?php

namespace App;

use App\Money;

class Franc extends Money
{
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
     * @param integer $multiplier
     * @return Money
     */
    public function times(int $multiplier): Money
    {
        return Money::franc($this->amount * $multiplier);
    }
}
