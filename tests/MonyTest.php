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
        $this->assertEquals(Money::dollar(5)->times(2)->amount(), Money::dollar(10)->amount());
        $this->assertEquals(Money::dollar(5)->times(3)->amount(), Money::dollar(15)->amount());
    }

    public function testEquality() {
        $this->assertTrue(Money::dollar(5)->equals(Money::dollar(5)));
        $this->assertFalse(Money::dollar(5)->equals(Money::dollar(6)));
        $this->assertTrue(Money::franc(5)->equals(Money::franc(5)));
        $this->assertFalse(Money::franc(5)->equals(Money::franc(6)));
        $this->assertFalse(Money::franc(5)->equals(Money::dollar(5)));
    }

    public function testFrancMultiplication()
    {
        $this->assertEquals(Money::franc(5)->times(2)->amount(), Money::franc(10)->amount());
        $this->assertEquals(Money::franc(5)->times(3)->amount(), Money::franc(15)->amount());
    }

}
