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

    /**
     * @param $expectedRomanNumber
     * @param $arabicNumber
     *
     * @dataProvider provideArabicNumbersWithItsExpectations
     */
    public function testICanConvertNumbersFromArabic($expectedRomanNumber, $arabicNumber)
    {
        $romanNumerals = new RomanNumerals();

        $this->assertSame($expectedRomanNumber, $romanNumerals->fromArabic($arabicNumber));
    }

    public static function provideArabicNumbersWithItsExpectations()
    {
        return [
            '0' => ['expectedRomanNumber' => '',    'arabicNumber' => 0],
            '1' => ['expectedRomanNumber' => 'I',   'arabicNumber' => 1],
            '2' => ['expectedRomanNumber' => 'II',  'arabicNumber' => 2],
            '3' => ['expectedRomanNumber' => 'III', 'arabicNumber' => 3],
        ];
    }
}
 