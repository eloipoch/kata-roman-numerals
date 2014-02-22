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
    ];

    /**
     * @param int $arabicNumber
     *
     * @return string
     */
    public function fromArabic($arabicNumber)
    {
        $romanNumber = $this->executeArabicConversions($arabicNumber);

        if (is_int($arabicNumber)) {
            $romanNumber .= str_repeat('I', $arabicNumber);
        }

        return $romanNumber;
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
            $romanNumber = $symbol;
            $arabicNumber -= $quantity;
        }

        return $romanNumber;
    }
}