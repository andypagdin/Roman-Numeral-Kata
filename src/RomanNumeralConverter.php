<?php

interface RomanNumeral
{
    public function convert(int $number);
}

class RomanNumeralConverter implements RomanNumeral
{
    public function convert(int $number) {
        return 'I';
    }
}
