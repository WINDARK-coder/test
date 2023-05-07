<?php
// `array_walk()` is a PHP function that allows you to iterate over an array and perform a
// custom action on each element. Unlike `array_map()`, which creates a new array with the
// modified values, `array_walk()` modifies the original array in place.

// The syntax of `array_walk()` is as follows:

// =========== array_walk(array &$array, callable $callback, mixed $userdata = null): bool ===========

// Here's a brief description of the three parameters:

// - `$array`: The array to iterate over. This parameter is passed by reference,
// so any modifications made to the array within the callback function will be
// reflected in the original array.

// - `$callback`: The callback function to call for each element of the array.
// The callback function should take two arguments: the current element value,
// and the current element key. It can perform any custom action on the element,
// such as modifying its value or outputting it to the screen.

// - `$userdata` (optional): An optional user-defined data that can be passed to the callback function.
// Example 1
// Here's an example of using `array_walk()` to output the values of an array:

$fruits = ['apple', 'banana', 'orange'];
array_walk($fruits, function ($value, $key) {
    echo $key . ' -> ' . $value . "<br>";
});
echo "<pre>";
print_r($fruits);
echo "<br>";

// Output:
// 0 -> apple
// 1 -> banana
// 2 -> orange

// In this example, the `array_walk()` function is called with the `$fruits` array as the first argument,
// and an anonymous function as the second argument. The anonymous function takes two arguments:
// `$value` and `$key`, which represent the current element value and key, respectively.
// It simply outputs the key and value of each element followed by a newline character.

// `array_walk()` is a useful function for cases where you need to perform a custom action on
// each element of an array, but don't need to modify the array itself. Since `array_walk()`
// modifies the original array in place, it can be more efficient than `array_map()` in some cases,
// especially for large arrays.


// Example 2: Using `array_walk()` to calculate the sum of an array


$numbers = [1, 2, 3, 4, 5];
$sum = 0;

array_walk($numbers, function ($value) use (&$sum) {
    $sum += $value;
});

echo 'The sum of the array is: ' . $sum;
echo "<br>";


// Output:
// The sum of the array is: 15

// In this example, the `array_walk()` function is used to iterate over the `$numbers`
// array and add each element to the `$sum` variable. Note that since `$sum` is modified
// within the anonymous function, we need to pass it by reference using the `&` symbol.

// Example 2: Using `array_walk()` to filter an array

$numbers = [1, 2, 3, 4, 5];
$odd_numbers = [];

array_walk($numbers, function ($value) use (&$odd_numbers) {
    if ($value % 2 == 1) {
        $odd_numbers[] = $value;
    }
});

print_r($odd_numbers);
echo "<br>";

// Output:
// Array
// (
//     [0] => 1
//     [2] => 3
//     [4] => 5
// )

// In this example, we create an empty array called $odd_numbers to hold the filtered values.
// Within the anonymous function passed to array_walk(), we check if the current value is odd and,
// if so, we append it to the $odd_numbers array using the [] operator. We use the use keyword
// to pass $odd_numbers into the anonymous function by reference so that we can modify
// it within the function. After calling array_walk(), $odd_numbers will contain only the odd numbers
// from the original $numbers array.

// Example 3: Using `array_walk()` with user-defined data

$numbers = [1, 2, 3, 4, 5];
$multiplier = 2;

array_walk($numbers, function (&$value, $key, $multiplier) {
    $value *= $multiplier;
}, $multiplier);

print_r($numbers);
echo "<br>";


// Output:
// Array
// (
//     [0] => 2
//     [1] => 4
//     [2] => 6
//     [3] => 8
//     [4] => 10
// )

// In this example, the `array_walk()` function is used to multiply each element of
// the `$numbers` array by a user-defined `$multiplier` value. The `$multiplier` value
// is passed as the third argument to `array_walk()`, and is then passed as the third
// argument to the anonymous function. Note that `$multiplier` is not modified within
// the anonymous function, so it doesn't need to be passed by reference.