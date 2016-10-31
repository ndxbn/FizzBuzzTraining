<?php

require_once '../init.php';

//
assert(toFizzBuzz(1) === '1');
assert(toFizzBuzz(2) === '2');
// Fizz 1回目
assert(toFizzBuzz(3) === 'Fizz');
// ちゃんと戻るか
assert(toFizzBuzz(4) === '4');
// Buzz 1回目
assert(toFizzBuzz(5) === 'Buzz');
// Fizz 2回目
assert(toFizzBuzz(6) === 'Fizz');
// Buzz 2回目
assert(toFizzBuzz(10) === 'Buzz');

// FizzBuzz
assert(toFizzBuzz(15) === 'FizzBuzz');
assert(toFizzBuzz(30) === 'FizzBuzz');
assert(toFizzBuzz(45) === 'FizzBuzz');
// 100の前後
// Q1で「100回」だったので、もしかしたら無用な制限とかがあるかもしれない。
assert(toFizzBuzz(99) === 'Fizz');
assert(toFizzBuzz(100) === 'Buzz');
assert(toFizzBuzz(101) === '101');

// 返り値の型
// 数字も、常に文字列で返される
assert(is_string(toFizzBuzz(1)));
