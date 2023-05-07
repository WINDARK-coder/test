<?php

// The `array_pop()` function is a built-in PHP function that is used to remove and
// return the last element from an array.

// The syntax for using `array_pop()` is as follows:

// =================== array_pop(array $array): mixed =======================

// Here's an example of how to use `array_pop()`:

$fruits = array('apple', 'banana', 'cherry', 'date');

$last_fruit = array_pop($fruits);

echo "The last fruit is $last_fruit.\n";
echo "<br>";
// Output:
// The last fruit is date.

// In this example, we have an array of fruits, and we use `array_pop()` to remove the last element
// (which is 'date') and store it in a variable `$last_fruit`. We then use `echo` to output the value
// of `$last_fruit`.

// Note that the `array_pop()` function modifies the original array by removing the last element from it.

// Here's another example that demonstrates how `array_pop()` can be used with an associative array:

$user = array(
    'name' => 'John Smith',
    'email' => 'john@example.com',
    'age' => 35
);

$last_value = array_pop($user);

echo "The last value is $last_value.\n";
echo "<br>";
echo "<pre>";
print_r($user);

// Output:
// The last value is 35.
// Array
// (
//     [name] => John Smith
//     [email] => john@example.com
// )

// In this example, we have an associative array representing a user with various pieces of information.
// We use `array_pop()` to remove the last value (which is the value associated with the `age` key,
// which is 35) and store it in a variable `$last_value`. We then use `echo` to output the value of
// `$last_value`.

// Note that `array_pop()` modifies the original array by removing the last element, so when we use
// `print_r()` to output the contents of `$user`, we can see that the `age` key and its value have
// been removed from the array.




// Example 1: Using `array_pop()` to build a stack

// One common use of `array_pop()` is to build a stack data structure, which is a collection of
// elements that can be added or removed only at one end (the "top" of the stack). Here's an example:

// Initialize an empty stack
$stack = array();

// Add some elements to the stack
array_push($stack, 'apple');
array_push($stack, 'banana');
array_push($stack, 'cherry');

// Pop an element off the top of the stack
$last_fruit = array_pop($stack);

echo "The last fruit is $last_fruit.\n";
echo "<br>";


// Output:
// The last fruit is cherry.

// In this example, we first initialize an empty array, `$stack`, which we will use to represent
// our stack. We then add three fruits to the stack using `array_push()`. Finally, we use
// `array_pop()` to remove the last element (which is the "top" of the stack) and store it
// in a variable `$last_fruit`. We then use `echo` to output the value of `$last_fruit`.

// Example 2: Using `array_pop()` to reverse an array

// Another use of `array_pop()` is to reverse the order of an array. Here's an example:

$colors = array('red', 'green', 'blue', 'yellow');

$reversed_colors = array();
while (!empty($colors)) {
    $color = array_pop($colors);
    array_push($reversed_colors, $color);
}

print_r($reversed_colors);
echo "<br>";


// Output:
// Array
// (
//     [0] => yellow
//     [1] => blue
//     [2] => green
//     [3] => red
// )

// In this example, we have an array of colors that we want to reverse. We first initialize
// an empty array, `$reversed_colors`, which we will use to store the reversed array. We then
// use a `while` loop to repeatedly pop elements off the end of the original array using `array_pop()`
// and push them onto the beginning of the reversed array using `array_push()`. When the original array
// is empty, we have successfully reversed the order of the elements.

// Note that there is a built-in PHP function, `array_reverse()`, that can be used to achieve the same
// result more easily. However, this example demonstrates how `array_pop()` can be used in combination
// with `array_push()` to manipulate arrays.