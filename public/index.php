<?php

require_once __DIR__ . '/../bootstrap.php';

// constants
const MODE_CLI = 1;
const MODE_HTML_UNORDERED_LIST = 2;

const MODE_DEFAULT = MODE_CLI;

// routing
// with mode
/** @var int $mode */
$mode = filter_input(INPUT_GET, 'mode', FILTER_VALIDATE_INT);
if (false === $mode) {
    $mode = MODE_DEFAULT;
}

// formatter
/** @var \FizzBuzzTraining\Formatter\AbstractFormatter $formatter */
$formatter = new \FizzBuzzTraining\Formatter\ConsoleFormatter();
if (MODE_HTML_UNORDERED_LIST === $mode) {
    $formatter = new \FizzBuzzTraining\Formatter\UnorderedListFormatter();
}

// printer
for ($i = 1; $i <= 100; ++$i) {
    echo $formatter->format(\FizzBuzzTraining\toFizzBuzz($i));
}
