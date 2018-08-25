<?php

namespace App;

use App\Money;

class Franc extends Money
{
    /**
     * @param integer $amount
     */
    public function __construct(int $amount)
    {
        $this->amount = $amount;
        $this->currency = "CHF";
    }

    /**
     * @param integer $multiplier
     * @return Money
     */
    public function times(int $multiplier): Money
    {
        return new Franc($this->amount * $multiplier);
    }
}
