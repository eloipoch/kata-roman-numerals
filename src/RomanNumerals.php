<?php

namespace EloiPoch;

class RomanNumerals
{
    /**
     * @param int $arabicNumber
     */
    public function fromArabic($arabicNumber)
    {
        $romanNumber = '';

        if (5 === $arabicNumber) {
            $romanNumber  = 'V';
            $arabicNumber = '';
        }

        if (is_int($arabicNumber)) {
            $romanNumber = str_repeat('I', $arabicNumber);
        }

        return $romanNumber;
    }
}