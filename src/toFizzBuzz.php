<?php

/**
 * Fizz Buzz フィルタに通した結果を返す。
 *
 * @param int $target
 *
 * @return string
 */
function toFizzBuzz($target)
{
    $converted = '';
    $unlessFzzBuzz = true;
    if ($target % 3 === 0) {
        $converted .= 'Fizz';
        $unlessFzzBuzz = false;
    }
    if ($target % 5 === 0) {
        $converted .= 'Buzz';
        $unlessFzzBuzz = false;
    }
    if ($unlessFzzBuzz) {
        $converted = (string) $target;
    }

    return $converted;
}
