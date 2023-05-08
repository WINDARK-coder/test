<?php

// The `array_replace()` method is a built-in function in PHP that allows you to replace
// the values of an array with the values from one or more other arrays. It returns a new
// array with the replaced values.

// Here's the basic syntax for using `array_replace()`:

//========= array array_replace ( array $array_want_to_change , array ...$arrays ) ========

// The first argument is the original array that you want to replace values in. The remaining
// arguments are the arrays whose values you want to use as replacements. You can pass as many
// replacement arrays as you want.

// Example 1:

$array1 = array('foo', 'bar', 'baz');
$array2 = array(0 => 'qux', 2 => 'quux');
$replaced_array = array_replace($array1, $array2);
echo "<pre>";
print_r($replaced_array);
echo "<br>";


// In this example, `$array1` is the original array that we want to replace values in.
// `$array2` is the array whose values we want to use as replacements. When we call
// `array_replace()` with `$array1` and `$array2` as arguments, the resulting `$replaced_array` will be:

// Array
// (
//     [0] => qux
//     [1] => bar
//     [2] => quux
// )

// As you can see, the values from `$array2` have replaced the corresponding values in `$array1`.

// One thing to note is that `array_replace()` only replaces values in the original array that
// have matching keys in the replacement arrays. If a key exists in the original array but
// not in the replacement arrays, its value will not be changed. If a key exists in the replacement
// arrays but not in the original array, it will be added to the resulting array.

// Example 2: Replacing values in a multidimensional array

$original_array = array(
    'foo' => array('bar', 'baz'),
    'qux' => array('quux', 'corge')
);

$replacement_array = array(
    'foo' => array('quux', 'corge')
);

$replaced_array = array_replace($original_array, $replacement_array);

print_r($replaced_array);

// In this example, we have an original array that contains two sub-arrays, each with two values.
// We also have a replacement array that contains a sub-array with two different values for the
// 'foo' key. When we call `array_replace()` with these two arrays as arguments, the resulting
// `$replaced_array` will be:

// Array
// (
//     [foo] => Array
//         (
//             [0] => quux
//             [1] => corge
//         )
//     [qux] => Array
//         (
//             [0] => quux
//             [1] => corge
//         )
// )

// As you can see, the values in the 'foo' sub-array have been replaced with the values from
// the replacement array.

// Example 3: Using multiple replacement arrays

$original_array = array('foo', 'bar', 'baz');

$replacement_array1 = array('qux', 'quux');
$replacement_array2 = array('corge');

$replaced_array = array_replace($original_array, $replacement_array1, $replacement_array2);

print_r($replaced_array);

// In this example, we have an original array with three values. We also have two replacement
// arrays - `$replacement_array1` with two values, and `$replacement_array2` with one value.
// When we call `array_replace()` with all three arrays as arguments, the resulting `$replaced_array` will be:

// Array
// (
//     [0] => qux
//     [1] => quux
//     [2] => baz
// )

// As you can see, the first two values in the original array have been replaced with the values from
// `$replacement_array1`, and the third value has not been changed because there is no
// corresponding key in `$replacement_array2`.
