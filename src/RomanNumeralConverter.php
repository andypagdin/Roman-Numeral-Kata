<?php

interface RomanNumeral
{
    /**
     * @param int $number
     * @return string $result
     */
    public function convert(int $number);

    /**
     * @param int $number
     * @throws InvalidArgumentException 
     */
    public function guardAgainstInvalidNumber(int $number);
}

class RomanNumeralConverter implements RomanNumeral
{
    /**
     * Define the roman numeral lookup array, in decending order by numeral value.
     * 
     * @var array
     */
    protected static $lookup = [
        1000 => 'M',
        900 => 'CM',
        500 => 'D',
        400 => 'CD',
        100 => 'C',
        90 => 'XC',
        50 => 'L',
        40 => 'XL',
        10 => 'X',
        9 => 'IX',
        5 => 'V',
        4 => 'IV',
        1 => 'I'
    ];

    public function convert(int $number) {
        $this->guardAgainstInvalidNumber($number);

        $result = '';

        foreach (static::$lookup as $key => $value) {
            while ($number >= $key) {
                $number -= $key;
                $result .= $value;
            }
        }

        return $result;
    }

    public function guardAgainstInvalidNumber(int $number) {
        if ($number < 1 || $number > 3999) {
            throw new InvalidArgumentException;
        }
    }
}
