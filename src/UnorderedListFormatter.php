<?php

require_once 'AbstractHtmlFormatter.php';

class UnorderedListAbstractFormatter extends AbstractFormatter
{
    /**
     * @param string $str
     *
     * @return string
     */
    public function format(string $str):string
    {
        return "<ul>{$str}</ul>";
    }
}