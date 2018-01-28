<?php

namespace FizzBuzzTraining\Formatter;

class UnorderedListFormatter extends AbstractFormatter
{
    /**
     * @param string $str
     *
     * @return string
     */
    public function format(string $str): string
    {
        return "<ul>{$str}</ul>";
    }
}
