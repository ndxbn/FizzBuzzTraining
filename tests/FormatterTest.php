<?php
namespace FizzBuzzTraining;

require_once __DIR__.'/../init.php';

// <ul> でフォーマットするフォーマッタの単体テスト
$unorderedListFormatter = new UnorderedListAbstractFormatter();
assert('<ul>1</ul>' === $unorderedListFormatter->format('1'));
assert('<ul>Fizz</ul>' === $unorderedListFormatter->format('Fizz'));
assert('<ul>FizzBuzz</ul>' === $unorderedListFormatter->format('FizzBuzz'));

// コンソール用で、改行コードとともに出力するフォーマッタの単体テスト
$consoleFormatter = new ConsoleFormatter();
assert(('1'.PHP_EOL) === $consoleFormatter->format('1'));
assert(('Fizz'.PHP_EOL) === $consoleFormatter->format('Fizz'));
assert(('FizzBuzz'.PHP_EOL) === $consoleFormatter->format('FizzBuzz'));
