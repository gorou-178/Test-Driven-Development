<?php

namespace App;

use App\Money;

class Dollar extends Money
{
    /**
     * @param integer $multiplier
     * @return Money
     */
    public function times(int $multiplier): Money
    {
        return Money::franc($this->amount * $multiplier);
    }
}
