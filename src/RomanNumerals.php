<?php

namespace EloiPoch;

class RomanNumerals
{
    /**
     * @param int $arabicNumber
     */
    public function fromArabic($arabicNumber)
    {
        $romanNumber = $this->convertArabic10($arabicNumber);

        if ($arabicNumber >= 5) {
            $romanNumber  = 'V';
            $arabicNumber -= 5;
        }

        if (is_int($arabicNumber)) {
            $romanNumber .= str_repeat('I', $arabicNumber);
        }

        return $romanNumber;
    }

    /**
     * @param $arabicNumber
     *
     * @return array
     */
    private function convertArabic10(&$arabicNumber)
    {
        $romanNumber = '';

        if ($arabicNumber >= 10) {
            $romanNumber = 'X';
            $arabicNumber -= 10;
        }

        return $romanNumber;
    }
}