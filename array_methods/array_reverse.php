<?php

// The `array_reverse()` method in PHP is a built-in function that takes an array and returns
// a new array with the order of the elements reversed. The original array is not modified.

// The `array_reverse()` method takes one required argument: the array to be reversed.
// An optional second argument can be used to specify whether the array's keys should also be reversed.

// Here is the basic syntax of the `array_reverse()` method:

// ================ array_reverse(array $array, bool $preserve_keys = false): array ================

// The first argument `$array` is the array to be reversed. It must be an array.

// The second argument `$preserve_keys` is an optional boolean value that specifies whether
// the keys of the array should be preserved in the reversed array. By default, this argument
// is set to `false`, which means the keys are not preserved.

// If `$preserve_keys` is set to `true`, the keys in the original array will be preserved
// in the reversed array. If it's set to `false` (the default), the keys will be renumbered
// starting from zero.

// Example 1:

$array = array('apple', 'banana', 'cherry');
$reversed_array = array_reverse($array);
echo "<pre>";
print_r($reversed_array);
echo "<br>";


// Output:
// Array
// (
//     [0] => cherry
//     [1] => banana
//     [2] => apple
// )

// In this example, the `array_reverse()` method is used to reverse the order of the elements
// in the `$array` array. The resulting `$reversed_array` array contains the same elements as
// the original array, but in reverse order. The keys are also renumbered starting from zero,
// since the `$preserve_keys` argument is not specified.

// Example 2: Reversing an array with preserved keys

$array = array('a' => 'apple', 'b' => 'banana', 'c' => 'cherry');
$reversed_array = array_reverse($array, true);

print_r($reversed_array);
echo "<br>";


// Output:
// Array
// (
//     [c] => cherry
//     [b] => banana
//     [a] => apple
// )

// In this example, the `array_reverse()` method is used to reverse the order of the elements
// in the `$array` array while preserving the original keys. The resulting `$reversed_array`
// array contains the same elements as the original array, but with the keys preserved.

// Example 3: Reversing an array with nested arrays

$array = array(
    'fruits' => array('apple', 'banana', 'cherry'),
    'colors' => array('red', 'green', 'blue')
);
$reversed_array = array_reverse($array, true);

print_r($reversed_array);
echo "<br>";


// Output:
// Array
// (
//     [colors] => Array
//         (
//             [0] => blue
//             [1] => green
//             [2] => red
//         )
//     [fruits] => Array
//         (
//             [0] => cherry
//             [1] => banana
//             [2] => apple
//         )

// )

// In this example, the `$array` array contains nested arrays. The `array_reverse()` method
// is used to reverse the order of the elements in the `$array` array, including the elements
// in the nested arrays. The resulting `$reversed_array` array contains the same elements as
// the original array, but with the order of the elements reversed.

// Example 4: Reversing a string as an array of characters

$string = "Hello, world!";
$characters = str_split($string);
$reversed_characters = array_reverse($characters);
$reversed_string = implode('', $reversed_characters);

echo $reversed_string;
echo "<br>";


// Output:
// !dlrow ,olleH

// In this example, the `$string` variable contains a string. The `str_split()` function
// is used to split the string into an array of characters. The `array_reverse()` method
// is used to reverse the order of the characters in the array. The `implode()` function
// is used to join the characters back together into a reversed string. The resulting
// `$reversed_string` variable contains the original string with the order of the characters reversed.