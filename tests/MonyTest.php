<?php

namespace tests;


use App\Dollar;
use PHPUnit\Framework\TestCase;

class MoneyTet extends TestCase
{

    public function testMultiplication()
    {
        $fiveDollar = new Dollar(5);
        $product = $fiveDollar->times(2);
        $this->assertEquals($product->amount, 10);
        $product = $fiveDollar->times(3);
        $this->assertEquals($product->amount, 15);
    }

}
