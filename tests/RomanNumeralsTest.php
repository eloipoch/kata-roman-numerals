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
            '0'    => ['expectedRomanNumber' => '',         'arabicNumber' => 0],
            '1'    => ['expectedRomanNumber' => 'I',        'arabicNumber' => 1],
            '2'    => ['expectedRomanNumber' => 'II',       'arabicNumber' => 2],
            '3'    => ['expectedRomanNumber' => 'III',      'arabicNumber' => 3],
            '4'    => ['expectedRomanNumber' => 'IV',       'arabicNumber' => 4],
            '5'    => ['expectedRomanNumber' => 'V',        'arabicNumber' => 5],
            '6'    => ['expectedRomanNumber' => 'VI',       'arabicNumber' => 6],
            '7'    => ['expectedRomanNumber' => 'VII',      'arabicNumber' => 7],
            '8'    => ['expectedRomanNumber' => 'VIII',     'arabicNumber' => 8],
            '9'    => ['expectedRomanNumber' => 'IX',       'arabicNumber' => 9],
            '10'   => ['expectedRomanNumber' => 'X',        'arabicNumber' => 10],
            '14'   => ['expectedRomanNumber' => 'XIV',      'arabicNumber' => 14],
            '15'   => ['expectedRomanNumber' => 'XV',       'arabicNumber' => 15],
            '17'   => ['expectedRomanNumber' => 'XVII',     'arabicNumber' => 17],
            '19'   => ['expectedRomanNumber' => 'XIX',      'arabicNumber' => 19],
            '20'   => ['expectedRomanNumber' => 'XX',       'arabicNumber' => 20],

            '1713' => ['expectedRomanNumber' => 'MDCCXIII', 'arabicNumber' => 1713],
            '2465' => ['expectedRomanNumber' => 'MMCDLXV',  'arabicNumber' => 2465],
        ];
    }
}
 