<?php

namespace FizzBuzzTraining\Formatter;

class ConsoleFormatter extends AbstractFormatter
{
    /**
     * @param string $str
     *
     * @return string
     */
    public function format(string $str): string
    {
        return $str . PHP_EOL;
    }
}
