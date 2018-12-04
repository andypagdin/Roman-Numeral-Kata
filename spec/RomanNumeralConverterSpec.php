<?php

namespace spec;

use RomanNumeralConverter;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class RomanNumeralConverterSpec extends ObjectBehavior
{
    /**
     * Test a basic integer.
     */
    function it_calculates_the_roman_numeral_for_1() {
        $this->convert(1)->shouldReturn('I');
    }

    /**
     * Test an integer than will return more than one numeral.
     */
    function it_calculates_the_roman_numeral_for_1600() {
        $this->convert(1600)->shouldReturn('MDC');
    }

    /**
     * Test against edge case.
     */
    function it_calculates_the_roman_numeral_for_1999() {
        $this->convert(1999)->shouldReturn('MCMXCIX');
    }

    /**
     * Test a larger number.
     */
    function it_calculates_the_roman_numeral_for_3999() {
        $this->convert(3999)->shouldReturn('MMMCMXCIX');
    }

    /**
     * Test an invalid number.
     * Number is deemed invalid if it is less than 1 or greater than 3999.
     */
    function it_should_not_allow_an_invalid_number_4500() {
        $this->shouldThrow(new \InvalidArgumentException(''))->duringConvert(4500);
    }

    /**
     * Test an invalid number.
     * Number is deemed invalid if it is less than 1 or greater than 3999.
     */
    function it_should_not_allow_an_invalid_number_minus_1() {
        $this->shouldThrow(new \InvalidArgumentException(''))->duringConvert(-1);
    }
}
