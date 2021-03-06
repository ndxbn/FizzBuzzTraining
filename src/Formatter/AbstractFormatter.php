<?php

namespace FizzBuzzTraining\Formatter;

abstract class AbstractFormatter
{
    /**
     * @param string $str
     *
     * @return string
     */
    abstract public function format(string $str): string;
}
