<?php

namespace tests;


use App\Dollar;
use App\Franc;
use App\Money;
use PHPUnit\Framework\TestCase;

class MoneyTet extends TestCase
{

    public function testMultiplication()
    {
        $five = Money::dollar(5);
        $this->assertEquals($five->times(2)->amount(), (new Dollar(10))->amount());
        $this->assertEquals($five->times(3)->amount(), (new Dollar(15))->amount());
    }

    public function testEquality() {
        $this->assertTrue((new Dollar(5))->equals(new Dollar(5)));
        $this->assertFalse((new Dollar(5))->equals(new Dollar(6)));
        $this->assertTrue((new Franc(5))->equals(new Franc(5)));
        $this->assertFalse((new Franc(5))->equals(new Franc(6)));
        $this->assertFalse((new Franc(5))->equals(new Dollar(5)));
    }

    public function testFrancMultiplication()
    {
        $this->assertEquals((new Franc(5))->times(2)->amount(), (new Franc(10))->amount());
        $this->assertEquals((new Franc(5))->times(3)->amount(), (new Franc(15))->amount());
    }

}
