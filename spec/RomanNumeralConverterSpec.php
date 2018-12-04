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
}
