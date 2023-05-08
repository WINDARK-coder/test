<?php
// In PHP, the `array_values()` function is used to return all the values of an array as a new array.
// The returned array contains only the values of the original array, with new numeric keys that start
// from 0 and are assigned in ascending order. This means that any previous key assignments in the
// original array are lost in the new array returned by `array_values()`.

// ============ $new_array = array_values($old_array) ============

// where `$old_array` is the original array and `$new_array` is the new array returned by the function.

// Example 1:

$fruits = array('apple' => 'red', 'banana' => 'yellow', 'orange' => 'orange', 'kiwi' => 'green');

$fruit_values = array_values($fruits);
echo "<pre>";
print_r($fruit_values);
echo "<br>";


// In this example, an associative array `$fruits` is defined with fruit names as keys and their colors
// as values. The `array_values()` function is called on this array, and the resulting array with only
// the values is assigned to the variable `$fruit_values`. Finally, `print_r()` is used to output the
// contents of the new array to the screen. The output will look like this:

// Array
// (
//     [0] => red
//     [1] => yellow
//     [2] => orange
//     [3] => green
// )

// As you can see, the new array `$fruit_values` contains only the values of the original array `$fruits`,
// with new numeric keys assigned in ascending order. The original key assignments in `$fruits` are lost
// in the new array.

// Example 2: Re-indexing a numeric array

$fruits = array('apple', 'banana', 'orange', 'kiwi');

$new_fruits = array_values($fruits);

print_r($new_fruits);
echo "<br>";

// In this example, a numeric array `$fruits` is defined with fruit names as values.
// The `array_values()` function is called on this array, and the resulting array with
// only the values is assigned to the variable `$new_fruits`. Finally, `print_r()` is used
// to output the contents of the new array to the screen. The output will look like this:

// Array
// (
//     [0] => apple
//     [1] => banana
//     [2] => orange
//     [3] => kiwi
// )

// As you can see, the new array `$new_fruits` contains the same values as the original array `$fruits`,
// but with new numeric keys assigned in ascending order.

// Example 3: Removing gaps in a numeric array

$numbers = array(10 => 'ten', 20 => 'twenty', 30 => 'thirty', 40 => 'forty', 50 => 'fifty');

$new_numbers = array_values($numbers);

print_r($new_numbers);
echo "<br>";

// In this example, an associative array `$numbers` is defined with numbers as keys and their
// names as values. However, the keys are not consecutive, leaving gaps in the numeric sequence.
// The `array_values()` function is called on this array, and the resulting array with only the
// values is assigned to the variable `$new_numbers`. Finally, `print_r()` is used to output the
// contents of the new array to the screen. The output will look like this:

// Array
// (
//     [0] => ten
//     [1] => twenty
//     [2] => thirty
//     [3] => forty
//     [4] => fifty
// )

// As you can see, the new array `$new_numbers` contains the same values as the original array `$numbers`,
// but with new numeric keys assigned in ascending order, without gaps.

// Example 4: Creating a copy of an array

$original = array('a' => 'apple', 'b' => 'banana', 'c' => 'cherry');

$copy = array_values($original);

print_r($copy);
echo "<br>";

// In this example, an associative array `$original` is defined with letters as keys and fruit names
// as values. The `array_values()` function is called on this array, and the resulting array with only
// the values is assigned to the variable `$copy`. Finally, `print_r()` is used to output the contents
// of the new array to the screen. The output will look like this:

// Array
// (
//     [0] => apple
//     [1] => banana
//     [2] => cherry
// )

// As you can see, the new array `$copy` contains only the values of the original array `$original`,
// with new numeric keys assigned in ascending order. This effectively creates a copy of the original
// array with new keys.