<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;

require_once "src/FizzBuzz.php";


final class FizzBuzzTest extends TestCase
{

    // simple 3 check
    public function testCheckForFizzBuzzThree() : void
    {
        $fizz = new FizzBuzz();
        $this->assertEquals($fizz->checkForFizzBuzz(3), "lucky");
    }

    //multiple of 5
    public function testCheckForFizzBuzzTen() : void
    {
        $fizz = new FizzBuzz();
        $this->assertEquals($fizz->checkForFizzBuzz(10), "buzz");
    }

    //number with 3
    public function testCheckForFizzBuzzThirteen() : void
    {
        $fizz = new FizzBuzz();
        $this->assertEquals($fizz->checkForFizzBuzz(13), "lucky");
    }

    //number divisible by 3
    public function testCheckForFizzBuzzTwentySeven() : void
    {
        $fizz = new FizzBuzz();
        $this->assertEquals("fizz", $fizz->checkForFizzBuzz(27));
    }

    //number divisible by 3 and 5
    public function testCheckForFizzBuzzFifteen() : void
    {
        $fizz = new FizzBuzz();
        $this->assertEquals("fizzbuzz", $fizz->checkForFizzBuzz(15));
    }

    // a number divisible by 3, 5, 15, and contains 3 in it
    public function testCheckForFizzBuzzOneThirtyFive() : void
    {
        $fizz = new FizzBuzz();
        $this->assertEquals("lucky", $fizz->checkForFizzBuzz(135));
    }

    //number divisible by 3, 5, 15
    public function testCheckForFizzBuzzOneFifty() : void
    {
        $fizz = new FizzBuzz();
        $this->assertEquals("fizzbuzz", $fizz->checkForFizzBuzz(150));
    }

    //test reports with 20 iterations
    public function testReportsWithLimitTwenty() : void
    {
        $fizz = new FizzBuzz();
        $fizz->program(20);
        $this->assertEquals(4, $fizz->reportArray["fizz"]);
        $this->assertEquals(3, $fizz->reportArray["buzz"]);
        $this->assertEquals(1, $fizz->reportArray["fizzbuzz"]);
        $this->assertEquals(2, $fizz->reportArray["lucky"]);
        $this->assertEquals(10, $fizz->reportArray["integer"]);
    }

    //test reports with 50 iterations
    public function testReportsWithLimitFifty() : void
    {
        $fizz = new FizzBuzz();
        $fizz->program(50);
        $this->assertEquals(9, $fizz->reportArray["fizz"]);
        $this->assertEquals(6, $fizz->reportArray["buzz"]);
        $this->assertEquals(2, $fizz->reportArray["fizzbuzz"]);
        $this->assertEquals(14, $fizz->reportArray["lucky"]);
        $this->assertEquals(19, $fizz->reportArray["integer"]);
    }
}