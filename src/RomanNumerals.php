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

        foreach ($this->arabicConversions as $arabicNumber => $conversion) {
            $romanNumber .= $this->convertArabic($arabicNumberToConvert, $arabicNumber, $conversion);
        }

        return $romanNumber;
    }

    /**
     * @param int    $arabicNumber
     * @param int    $quantity
     * @param string $symbol
     *
     * @return string
     */
    private function convertArabic(&$arabicNumber, $quantity, $symbol)
    {
        $romanNumber = '';

        if ($arabicNumber >= $quantity) {
            $remainder           = $arabicNumber % $quantity;
            $numberOfConversions = ($arabicNumber - $remainder) / $quantity;

            $romanNumber  = str_repeat($symbol, $numberOfConversions);
            $arabicNumber = $remainder;
        }

        return $romanNumber;
    }
}