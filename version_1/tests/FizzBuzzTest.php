<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;

require_once "src/FizzBuzz.php";


final class FizzBuzzTest extends TestCase
{
    public function testCheckForFizzBuzzTen() : void
    {
        $fizz = new FizzBuzz();
        $this->assertEquals($fizz->checkForFizzBuzz(10), "buzz");
    }

    public function testCheckForFizzBuzzTwentySeven() : void
    {
        $fizz = new FizzBuzz();
        $this->assertEquals($fizz->checkForFizzBuzz(27), "fizz");
    }

    public function testCheckForFizzBuzzFifteen() : void
    {
        $fizz = new FizzBuzz();
        $this->assertEquals($fizz->checkForFizzBuzz(15), "fizzbuzz");
    }

    public function testCheckForFizzBuzzOneFifty() : void
    {
        $fizz = new FizzBuzz();
        $this->assertEquals($fizz->checkForFizzBuzz(150), "fizzbuzz");
    }
}