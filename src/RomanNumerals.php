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

        if (1 === $arabicNumber) {
            $romanNumber = 'I';
        }

        return $romanNumber;
    }
}