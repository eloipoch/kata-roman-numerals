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

        if (is_int($arabicNumber)) {
            $romanNumber = str_repeat('I', $arabicNumber);
        }

        return $romanNumber;
    }
}