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
        $this->assertEquals($product->amount, (new Dollar(10))->amount);
        $product = $fiveDollar->times(3);
        $this->assertEquals($product->amount, (new Dollar(15))->amount);
    }

    public function testEquality() {
        $this->assertTrue((new Dollar(5))->equals(new Dollar(5)));
        $this->assertFalse((new Dollar(5))->equals(new Dollar(6)));
    }


}
