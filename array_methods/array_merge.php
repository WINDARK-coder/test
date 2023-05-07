<?php
// The `array_merge()` function is used to merge two or more arrays into a single array.
// It takes two or more arrays as arguments, and returns a new array that contains all the
// elements of the input arrays. The resulting array is created by appending the elements of
// each input array to the previous one, in the order they are listed in the argument list.

// Here is the basic syntax of the `array_merge()` function:

// ======================= array_merge(array1, array2, ...) =============================

// where `array1`, `array2`, etc. are the arrays to be merged.

// Merging two arrays:

$a1 = array('a', 'b', 'c');
$a2 = array('d', 'e', 'f');
$result = array_merge($a1, $a2);
echo "<pre>";
print_r($result);
echo "<br>";
// Output: Array ( [0] => a [1] => b [2] => c [3] => d [4] => e [5] => f )

// This code merges two arrays, `$a1` and `$a2`, into a new array called `$result`.
// The resulting array contains all the elements of the two input arrays, in the order they were listed.

// Merging multiple arrays:

$a1 = array('a', 'b', 'c');
$a2 = array('d', 'e', 'f');
$a3 = array('g', 'h', 'i');
$result = array_merge($a1, $a2, $a3);
print_r($result);
echo "<br>";
// Output: Array ( [0] => a [1] => b [2] => c [3] => d [4] => e [5] => f [6] => g [7] => h [8] => i )

// This code merges three arrays, `$a1`, `$a2`, and `$a3`, into a new array called `$result`.
// The resulting array contains all the elements of the three input arrays, in the order they were listed.

// Merging arrays with keys:

$a1 = array('a' => 1, 'b' => 2, 'c' => 3);
$a2 = array('d' => 4, 'e' => 5, 'f' => 6);
$result = array_merge($a1, $a2);
print_r($result);
echo "<br>";
// Output: Array ( [a] => 1 [b] => 2 [c] => 3 [d] => 4 [e] => 5 [f] => 6 )

// This code merges two arrays, `$a1` and `$a2`, into a new array called `$result`.
// The resulting array contains all the elements of the two input arrays, including the keys,
// in the order they were listed. If there are duplicate keys, the values from the later arrays
// overwrite the values from the earlier arrays.

$a1 = array('a' => 1, 'b' => 2, 'c' => 3);
$a2 = array(1 => 'd', 2 => 'e', 3 => 'f');
$result = array_merge($a1, $a2);
print_r($result);
echo "<br>";

// Output: Array ( [a] => 1 [b] => 2 [c] => 3 [0] => d [1] => e [2] => f ) 
// This code merges two arrays, $a1 and $a2, that have different data types for the keys.
// The resulting array contains all the elements of the two input arrays, with the keys
// from the first array preserved and the keys from the second array re-indexed starting
// from zero. Note that the keys from the second array overwrite the corresponding keys from
// the first array if they have the same values.



//  Merging an array of arrays:

$a1 = array('a', 'b', 'c');
$a2 = array('d', 'e', 'f');
$a3 = array('g', 'h', 'i');
$result = array_merge(array($a1, $a2, $a3));
print_r($result);
// Output: Array ( [0] => a [1] => b [2] => c [3] => d [4] => e [5] => f [6] => g [7] => h [8] => i )
// This code merges an array of arrays into a single array. The resulting array contains all the
// elements of the input arrays, with the keys re-indexed starting from zero. Note that the input
// arrays must be enclosed in an outer array for this to work.

// Merging arrays with duplicate keys:

$a1 = array('a' => 1, 'b' => 2, 'c' => 3);
$a2 = array('a' => 'x', 'b' => 'y', 'd' => 'z');
$result = array_merge($a1, $a2);
print_r($result);
// Output: Array ( [a] => x [b] => y [c] => 3 [d] => z )

// This code merges two arrays, `$a1` and `$a2`, that have duplicate keys. The resulting array
// contains all the elements of the two input arrays, with the keys from the second array overwriting
// the corresponding keys from the first array.

// Merging arrays with nested arrays:

$a1 = array('a' => array('x', 'y'), 'b' => array('z'));
$a2 = array('c' => array('p', 'q'), 'a' => array('r', 's'));
$result = array_merge_recursive($a1, $a2);
print_r($result);
// Output: Array ( [a] => Array ( [0] => x [1] => y [0] => r [1] => s ) [b] => Array ( [0] => z )
// [c] => Array ( [0] => p [1] => q ) ) 

// This code merges two arrays, `$a1` and `$a2`, that contain nested arrays. The resulting array
// is created recursively, with any nested arrays merged using the same rules as the top-level arrays.
// Note that this code uses the `array_merge_recursive()` function instead of `array_merge()` to achieve
// the desired result.