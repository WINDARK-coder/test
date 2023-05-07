<?php
// `array_filter()` is a built-in PHP function that allows you to filter the elements
// of an array based on a specified condition. The function takes an input array and an
// optional callback function as parameters, and returns a new array containing only the
// elements of the input array that meet the condition specified in the callback function.


// =================== $filtered_array = array_filter($input_array, $callback_function) ==============

// The `$input_array` parameter is the array you want to filter, and the `$callback_function`
// parameter is an optional function that is used to determine which elements of the input array
// should be included in the output array.

// The callback function should take one argument, which represents the value of the current
// element being processed. It should return `true` if the element should be included in the
// output array, or `false` if it should be excluded. If no callback function is provided,
// `array_filter()` will remove all elements from the input array that are equal to `false`
// (e.g. `null`, `0`, `false`, an empty string, or an empty array).


// Example 1
// Here's an example of how to use `array_filter()` to filter an array of numbers:

$numbers = [1, 2, 3, 4, 5];

$filtered_numbers = array_filter($numbers, function ($number) {
    return $number % 2 == 0;
});
echo "<pre>";
print_r($filtered_numbers);
echo "<br>";


// Output:
// Array
// (
//     [1] => 2
//     [3] => 4
// )

// In this example, we use `array_filter()` to create a new array called `$filtered_numbers`
// that contains only the even numbers from the original `$numbers` array. We pass an anonymous
// function as the callback function to `array_filter()`, which takes each element of `$numbers`
// as its input and returns `true` if the number is even (i.e. has no remainder when divided by 2),
// and `false` otherwise. `array_filter()` then returns a new array containing only the elements of
// `$numbers` for which the callback function returned `true`.


// Example 2: Filter an array of strings to only include those that contain a certain substring

$fruits = ['apple', 'banana', 'pear', 'kiwi', 'orange'];

$filtered_fruits = array_filter($fruits, function ($fruit) {
    return strpos($fruit, 'a') !== false;
});

print_r($filtered_fruits);
echo "<br>";


// Output:
// Array
// (
//     [0] => apple
//     [1] => banana
//     [2] => pear
//     [4] => orange
// )

// In this example, we use `array_filter()` to create a new array called `$filtered_fruits`
// that contains only the fruits from the original `$fruits` array that contain the letter 'a'.
// We pass an anonymous function as the callback function to `array_filter()`, which takes each
// element of `$fruits` as its input and returns `true` if the fruit contains the letter 'a',
// and `false` otherwise. `array_filter()` then returns a new array containing only the elements
// of `$fruits` for which the callback function returned `true`.


// Example 3: Filter an associative array based on key value

$students = [
    'Alice' => 90,
    'Bob' => 80,
    'Charlie' => 95,
    'David' => 85
];

$filtered_students = array_filter($students, function ($grade) {
    return $grade >= 90;
});

print_r($filtered_students);
echo "<br>";


// Output:
// Array
// (
//     [Alice] => 90
//     [Charlie] => 95
// )

// In this example, we use `array_filter()` to create a new array called `$filtered_students` that
// contains only the students from the original `$students` array who scored 90 or above.
// We pass an anonymous function as the callback function to `array_filter()`, which takes each value
// of `$students` as its input and returns `true` if the grade is 90 or above, and `false` otherwise.
// `array_filter()` then returns a new array containing only the elements of `$students` for which the 
//callback function returned `true`. Since `$students` is an associative array, `array_filter()`
// preserves the keys of the original array.

// Example 4: Remove empty or null values from an array

$data = [
    'name' => 'Alice',
    'age' => null,
    'email' => '',
    'city' => 'New York',
    'country' => null
];

$filtered_data = array_filter($data);

print_r($filtered_data);
echo "<br>";


// Output:
// Array
// (
//     [name] => Alice
//     [city] => New York
// )

// In this example, we use `array_filter()` to create a new array called `$filtered_data` that
// contains only the non-empty and non-null values from the original `$data` array. Since we don't
// specify a callback function, `array_filter()` will remove any elements that evaluate to `false`
// in a boolean context. In PHP, empty strings, `null`, `false`, `0`, and empty arrays all evaluate
// to `false`, so `array_filter()` removes them from the array. Note that `array_filter()` preserves
// the keys of the original array in this case as well.