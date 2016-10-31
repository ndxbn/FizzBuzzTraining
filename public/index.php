<?php

require_once '../init.php';

const MODE_CLI = 0;
const MODE_HTML_UNORDERED_LIST = 1;

/** @var int $mode */
$mode = filter_input(INPUT_GET, 'mode', FILTER_VALIDATE_INT);
if (false === $mode) {
    $mode = 0;
}
// initialize formatter
/** @var AbstractFormatter $formatter */
$formatter = new ConsoleFormatter();
if (MODE_HTML_UNORDERED_LIST === $mode) {
    $formatter = new UnorderedListAbstractFormatter();
}

$outputBuffer = '';
for ($i = 1; $i <= 100; ++$i) {
    $outputBuffer .= $formatter->format(toFizzBuzz($i));
}

echo $outputBuffer;
