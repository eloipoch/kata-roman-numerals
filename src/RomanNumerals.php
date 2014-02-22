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

        if ($arabicNumber >= 5) {
            $romanNumber  = 'V';
            $arabicNumber -= 5;
        }

        if (is_int($arabicNumber)) {
            $romanNumber .= str_repeat('I', $arabicNumber);
        }

        return $romanNumber;
    }
}