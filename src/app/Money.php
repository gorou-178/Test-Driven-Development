<?php

namespace App;


class Money
{
    protected $amount;

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
