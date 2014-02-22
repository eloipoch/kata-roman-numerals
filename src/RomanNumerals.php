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
            $romanNumber = 'V';
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
        return $this->convertArabic($arabicNumber, 10, 'X');
    }

    /**
     * @param int $arabicNumber
     * @param int $quantity
     *
     * @return string
     */
    private function convertArabic(&$arabicNumber, $quantity, $symbol)
    {
        $romanNumber = '';

        if ($arabicNumber >= $quantity) {
            $romanNumber = $symbol;
            $arabicNumber -= $quantity;
        }

        return $romanNumber;
    }
}