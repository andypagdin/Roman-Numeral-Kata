<?php

namespace spec;

use RomanNumeralConverter;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class RomanNumeralConverterSpec extends ObjectBehavior
{
    function it_calculates_the_roman_numeral_for_1() {
        $this->convert(1)->shouldReturn('I');
    }
}
