<?php

namespace App;

use App\Money;

class Dollar extends Money
{
    public $amount;

    /**
     * @param integer $amount
     */
    public function __construct(int $amount)
    {
        $this->amount = $amount;
    }

    /**
     * @param integer $multiplier
     * @return Dollar
     */
    public function times(int $multiplier): Dollar
    {
        return new Dollar($this->amount * $multiplier);
    }

    /**
     * @param Dollar $dollar
     * @return bool
     */
    public function equals(Dollar $dollar): bool
    {
        return $this->amount === $dollar->amount;
    }

}
