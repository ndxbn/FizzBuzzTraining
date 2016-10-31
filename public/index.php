<?php

for ($i = 1; $i <= 100; ++$i) {
    $unlessFzzBuzz = true;
    if ($i % 3 === 0) {
        echo 'Fizz';
        $unlessFzzBuzz = false;
    }
    if ($i % 5 === 0) {
        echo 'Buzz';
        $unlessFzzBuzz = false;
    }
    if ($unlessFzzBuzz) {
        echo $i;
    }
    echo PHP_EOL;
}
