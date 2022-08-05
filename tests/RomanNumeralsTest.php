<?php

use \PHPUnit\Framework\TestCase;

class RomanNumeralsTest extends TestCase
{
    protected $romanNumerals;

    protected function setUp() : void {
        $this->romanNumerals = new RomanNumerals;
    }

    public function testReturnsRomanNumeralForOne() {

        $this->assertEquals('I', $this->romanNumerals->generateNumber("1"));
    }

    public function testReturnsRomanNumeralForTwo() {

        $this->assertEquals('II', $this->romanNumerals->generateNumber("2"));
    }

    public function testReturnsRomanNumeralForThree() {

        $this->assertEquals('III', $this->romanNumerals->generateNumber("3"));
    }

    public function testReturnsRomanNumeralForFour() {

        $this->assertEquals('IV', $this->romanNumerals->generateNumber("4"));
    }

    public function testReturnsRomanNumeralForFive() {

        $this->assertEquals('V', $this->romanNumerals->generateNumber("5"));
    }

    public function testReturnsRomanNumeralForSix() {

        $this->assertEquals('VI', $this->romanNumerals->generateNumber("6"));
    }

    public function testReturnsRomanNumeralForSeven() {

        $this->assertEquals('VII', $this->romanNumerals->generateNumber("7"));
    }

    public function testReturnsRomanNumeralForEight() {

        $this->assertEquals('VIII', $this->romanNumerals->generateNumber("8"));
    }

    public function testReturnsRomanNumeralForNine() {

        $this->assertEquals('IX', $this->romanNumerals->generateNumber("9"));
    }

    public function testReturnsRomanNumeralForTen() {

        $this->assertEquals('X', $this->romanNumerals->generateNumber("10"));
    }

    public function testReturnsRomanNumeralForEleven() {

        $this->assertEquals('XI', $this->romanNumerals->generateNumber("11"));
    }

    public function testReturnsRomanNumeralForTwenty() {

        $this->assertEquals('XX', $this->romanNumerals->generateNumber("20"));
    }

    public function testReturnsRomanNumeralForThirty() {

        $this->assertEquals('XXX', $this->romanNumerals->generateNumber("30"));
    }

    public function testReturnsRomanNumeralForForty() {

        $this->assertEquals('XL', $this->romanNumerals->generateNumber("40"));
    }

    public function testReturnsRomanNumeralForFifty() {

        $this->assertEquals('L', $this->romanNumerals->generateNumber("50"));
    }





}