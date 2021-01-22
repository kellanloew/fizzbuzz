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
        $this->assertEquals($fizz->checkForFizzBuzz(27), "fizz");
    }

    //number divisible by 3 and 5
    public function testCheckForFizzBuzzFifteen() : void
    {
        $fizz = new FizzBuzz();
        $this->assertEquals($fizz->checkForFizzBuzz(15), "fizzbuzz");
    }

    // a number divisible by 3, 5, 15, and contains 3 in it
    public function testCheckForFizzBuzzOneThirtyFive() : void
    {
        $fizz = new FizzBuzz();
        $this->assertEquals($fizz->checkForFizzBuzz(135), "lucky");
    }

    //number divisible by 3, 5, 15
    public function testCheckForFizzBuzzOneFifty() : void
    {
        $fizz = new FizzBuzz();
        $this->assertEquals($fizz->checkForFizzBuzz(150), "fizzbuzz");
    }
}