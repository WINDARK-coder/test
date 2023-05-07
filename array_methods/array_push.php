<?php

// The `array_push()` function in PHP is used to add one or more elements to the end of an array.
// The syntax for `array_push()` is as follows:

// ================= array_push($array, $element1, $element2, ...) ==================

// The first argument `$array` is the array to which the elements will be added.
// The remaining arguments `$element1`, `$element2`, and so on, are the elements
// to be added to the end of the array.

// Here's an example:

$fruits = array('apple', 'banana');
array_push($fruits, 'cherry', 'date');
echo "<pre>";

print_r($fruits);
echo "<br>";

// Output:
// Array
// (
//     [0] => apple
//     [1] => banana
//     [2] => cherry
//     [3] => date
// )

// In this example, we first create an array `$fruits` containing two elements, "apple" and "banana".
// We then use `array_push()` to add two more elements, "cherry" and "date", to the end of the array.
// Finally, we use `print_r()` to output the resulting array.

// `array_push()` can be useful when you need to add one or more elements to the end of an existing array,
// such as when building a list of items or accumulating data from a loop.

// It's worth noting that `array_push()` is not the only way to add elements to an array in PHP.
// You can also use the assignment operator (`=`) to append elements to an array, like this:

$fruits = array('apple', 'banana');
$fruits[] = 'cherry';
$fruits[] = 'date';
print_r($fruits);
echo "<br>";


// Output:
// Array
// (
//     [0] => apple
//     [1] => banana
//     [2] => cherry
//     [3] => date
// )

// This achieves the same result as the previous example, but uses a slightly different syntax.
// The advantage of using `array_push()` is that you can add multiple elements at once,
// which can be more efficient than using multiple assignments.


// Adding multiple elements to an array using a loop

$numbers = array();
for ($i = 1; $i <= 5; $i++) {
    array_push($numbers, $i);
}
print_r($numbers);
// Output:
// Array
// (
//     [0] => 1
//     [1] => 2
//     [2] => 3
//     [3] => 4
//     [4] => 5
// )

// In this example, we create an empty array $numbers. We then use a for loop to add
// the numbers 1 through 5 to the end of the array, one at a time, using array_push().
// Finally, we use print_r() to output the resulting array.