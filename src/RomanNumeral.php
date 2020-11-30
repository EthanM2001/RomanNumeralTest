<?php

/* 
    Array has been created for each instance of number
    Iterate through the symbols array
    if statement to see if the number passed in is <= iterated symbol
    if number is less than, take that number away and 
    put the roman numeral into an empty array
    if new number is less than, repeat until number is 0... while loop...?
    return roman number array
*/

namespace PhpNwSykes;

class RomanNumeral
{
    protected $symbols = [
        1000 => 'M',
        500 => 'D',
        100 => 'C',
        50 => 'L',
        10 => 'X',
        9 => 'IX',
        5 => 'V',
        4 => 'IV',
        1 => 'I',
    ];

    protected $numeral;

    // public function numberToNumeral($number) {
    //     while ($number > 0) {
    //         foreach ($symbols as $num => $stringNumeral) {
    //             if ($number >= $num) {
    //                 $number -= $num;
    //                 $numeral .= $stringNumeral
    //             }
    //         }
    //     }
    // }

    public function __construct(string $romanNumeral)
    {
        $this->numeral = $romanNumeral;
    }

    /**
     * Converts a roman numeral such as 'X' to a number, 10
     *
     * @throws InvalidNumeral on failure (when a numeral is invalid)
     */

    public function toInt():int
    {
        $total = 0;

        return $total;
    }
}
