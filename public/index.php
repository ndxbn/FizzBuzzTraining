<?php

require_once '../init.php';

for ($i = 1; $i <= 100; ++$i) {
    echo toFizzBuzz($i);
    echo PHP_EOL;
}
