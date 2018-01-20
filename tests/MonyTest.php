<?php

namespace tests;


use App\Dollar;
use PHPUnit\Framework\TestCase;

class MoneyTet extends TestCase
{

    public function testMultiplication()
    {
        $fiveDollar = new Dollar(5);
        $fiveDollar->times(2);
        $this->assertEquals($fiveDollar->amount, 10);
    }

}
