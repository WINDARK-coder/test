<?php

// Certainly! In PHP, `array_map()` is a built-in function that allows you to apply a callback
// function to every element of an array, and returns a new array with the modified values.
// This function can be very useful when you need to perform the same operation on every element
// of an array.

// Here's the basic syntax of `array_map()`:

// array_map(callable $callback, array $array, array ...$arrays): array

// The first argument `$callback` is the callback function that will be applied to every
// element of the array. It can be a string containing the name of a function, an array containing
// an object and a method name, or a closure (anonymous function). The callback function should
// take one argument, which will be the current element of the array being processed.

// The second argument `$array` is the input array that will be processed by the callback function.
// If you want to process multiple arrays, you can pass additional arrays as arguments.

// Here's an example of using `array_map()` to convert an array of Celsius temperatures to
// Fahrenheit temperatures:

$celsius_temps = [0, 10, 20, 30, 40];
function fahrenheit($temp)
{
    return ($temp * 1.8) + 32;
}
$fahrenheit_temps = array_map('fahrenheit', $celsius_temps);
echo "<pre>";
print_r($fahrenheit_temps);
echo "<br>";

// Output:
// Array
// (
//     [0] => 32
//     [1] => 50
//     [2] => 68
//     [3] => 86
//     [4] => 104
// )

// In this example, the callback function takes one argument `$temp` and returns
// the converted Fahrenheit temperature. The `array_map()` function applies this
// function to every element of the `$celsius_temps` array, and returns a new array
// `$fahrenheit_temps` with the converted values.




$numbers = [1, 2, 3, 4, 5];
$operations = [
    function ($n) {
        return $n * 2;
    },
    function ($n) {
        return $n + 10;
    }
];
$result = $numbers;
foreach ($operations as $op) {
    $result = array_map($op, $result);
}
print_r($result);

// Output:
// Array
// (
//     [0] => 12
//     [1] => 14
//     [2] => 16
//     [3] => 18
//     [4] => 20
// )

// In this example, we define an array of two callback functions (`$operations`)
// that we want to apply to the `$numbers` array. We then use a `foreach` loop to
// apply each function in turn to the `$result` array, starting with the original
// `$numbers` array. The result is a new array `$result` with the values of the
// `$numbers` array first doubled, then incremented by 10.
