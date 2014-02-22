<?php

namespace EloiPoch\Test;

use EloiPoch\RomanNumerals;
use PHPUnit_Framework_TestCase;

class RomanNumeralsTest extends PHPUnit_Framework_TestCase
{
    public function testItCanBeInitialized()
    {
        $romanNumerals = new RomanNumerals();

        $this->assertInstanceOf(RomanNumerals::class, $romanNumerals);
    }
}
 