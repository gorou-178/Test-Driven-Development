<?php

namespace App;

use App\Money;

class Dollar extends Money
{
    /**
     * @param integer $amount
     */
    public function __construct(int $amount)
    {
        $this->amount = $amount;
    }

    /**
     * @param integer $multiplier
     * @return Money
     */
    public function times(int $multiplier): Money
    {
        return new Dollar($this->amount * $multiplier);
    }

    /**
     * @return string
     */
    public function currency(): string
    {
        return "USD";
    }
}
