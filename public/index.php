<?php

require_once __DIR__.'/../init.php';

// constants
// @todo move to init.php or constants.php or class constant.
const MODE_CLI = 0;
const MODE_HTML_UNORDERED_LIST = 1;

// routing
// with mode
/** @var int $mode */
$mode = filter_input(INPUT_GET, 'mode', FILTER_VALIDATE_INT);
if (false === $mode) {
    $mode = 0;
}

// formatter
/** @var \FizzBuzzTraining\AbstractFormatter $formatter */
$formatter = new \FizzBuzzTraining\ConsoleFormatter();
if (MODE_HTML_UNORDERED_LIST === $mode) {
    $formatter = new \FizzBuzzTraining\UnorderedListFormatter();
}

// printer
$outputBuffer = '';
for ($i = 1; $i <= 100; ++$i) {
    $outputBuffer .= $formatter->format(\FizzBuzzTraining\toFizzBuzz($i));
}
echo $outputBuffer;
