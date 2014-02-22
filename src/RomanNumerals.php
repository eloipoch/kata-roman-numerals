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
        $romanNumber .= $this->convertArabic5($arabicNumber);

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
     * @param $arabicNumber
     *
     * @return array
     */
    private function convertArabic5(&$arabicNumber)
    {
        return $this->convertArabic($arabicNumber, 5, 'V');
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