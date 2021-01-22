<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;

require_once "src/FizzBuzz.php";


final class FizzBuzzTest extends TestCase
{
    //number divisible by 5
    public function testCheckForFizzBuzzTen() : void
    {
        $fizz = new FizzBuzz();
        $this->assertEquals("buzz", $fizz->checkForFizzBuzz(10));
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

    //number divisible by 3, 5, 15
    public function testCheckForFizzBuzzOneFifty() : void
    {
        $fizz = new FizzBuzz();
        $this->assertEquals("fizzbuzz", $fizz->checkForFizzBuzz(150));
    }
}