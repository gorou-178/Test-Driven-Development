<?php

namespace App;


class Franc
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
     * @return Franc
     */
    public function times(int $multiplier): Franc
    {
        return new Franc($this->amount * $multiplier);
    }

    /**
     * @param Franc $franc
     * @return bool
     */
    public function equals(Franc $franc): bool
    {
        return $this->amount === $franc->amount;
    }

}
