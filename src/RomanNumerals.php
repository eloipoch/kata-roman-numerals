<?php

namespace EloiPoch;

class RomanNumerals
{
    /**
     * @var array
     */
    private $arabicConversions = [
        10 => 'X',
        5  => 'V',
        4  => 'IV',
        1  => 'I',
    ];

    /**
     * @param int $arabicNumber
     *
     * @return string
     */
    public function fromArabic($arabicNumber)
    {
        return $this->executeArabicConversions($arabicNumber);
    }

    /**
     * @param int $arabicNumberToConvert
     *
     * @return string
     */
    private function executeArabicConversions(&$arabicNumberToConvert)
    {
        $romanNumber = '';

        foreach ($this->arabicConversions as $digit => $glyph) {
            $romanNumber .= $this->convertArabic($arabicNumberToConvert, $digit, $glyph);
        }

        return $romanNumber;
    }

    /**
     * @param int    $arabicNumber
     * @param int    $digit
     * @param string $glyph
     *
     * @return string
     */
    private function convertArabic(&$arabicNumber, $digit, $glyph)
    {
        $romanNumber = '';

        if ($arabicNumber >= $digit) {
            $remainder           = $arabicNumber % $digit;
            $numberOfConversions = ($arabicNumber - $remainder) / $digit;

            $romanNumber  = str_repeat($glyph, $numberOfConversions);
            $arabicNumber = $remainder;
        }

        return $romanNumber;
    }
}