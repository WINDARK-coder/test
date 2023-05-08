<?php

// `array_search()` is a built-in PHP function that searches an array for a given value
// and returns the corresponding key if the value is found. It has the following syntax:

// ====== array_search($needle(value), $haystack(array), $strict = false('=='),true('===')) =======

// where:

// - `$needle`: The value to search for in the array.
// - `$haystack`: The array to search in.
// - `$strict` (optional): A boolean flag indicating whether to use strict comparison when
//    searching for the value. If set to `true`, `array_search()` will perform a strict comparison
//    using the `===` operator, meaning that the type of the value must match the type of the value
//    in the array, and the value must have the same value as well.

// Example 1:

$fruits = array('apple', 'banana', 'cherry', 'date');
$key = array_search('cherry', $fruits);

if ($key !== false) {
    echo "The key for 'cherry' in the \$fruits array is: $key";
} else {
    echo "'cherry' was not found in the \$fruits array";
}

// In this example, `array_search()` is used to search the `$fruits` array for the value `'cherry'`.
// If the value is found in the array, the function returns the corresponding key, which is then
// printed to the screen. If the value is not found in the array, the function returns `false`,
// which is checked using the strict comparison operator `!==` and a message is printed to the screen.

// It's important to note that `array_search()` only returns the first key that matches the search value.
// If there are multiple keys with the same value, only the first occurrence will be returned.
// Additionally, the function is case-sensitive, meaning that `'Cherry'` and `'cherry'` are considered
// different values.

// Finally, if you need to search for a value in a multidimensional array, you can use a loop and call
// `array_search()` on each sub-array in the loop, or use a more powerful function such as `array_column()`
// or `array_walk_recursive()`.


// Example 2: Searching for a value in an array with strict comparison


$animals = array('dog', 'cat', 'horse', 'elephant', 'rhinoceros');
$search = 'Horse';

$key = array_search($search, $animals, true);

if ($key !== false) {
    echo "The key for $search in the \$animals array is: $key";
} else {
    echo "$search was not found in the \$animals array";
}
// In this example, array_search() is used to search for the value 'Horse' in the $animals
// array using strict comparison. Since the $strict parameter is set to true, the search
// is case-sensitive and the function will only return a key if the value is found with
// the same case as the search string. If the value is found in the array, the function
// returns the corresponding key, which is then printed to the screen. If the value is not
// found in the array, the function returns false, which is checked using the strict comparison
// operator !== and a message is printed to the screen.

// Example 3: Searching for a value in a multidimensional array

$people = array(
    array('name' => 'Alice', 'age' => 25),
    array('name' => 'Bob', 'age' => 30),
    array('name' => 'Charlie', 'age' => 35),
    array('name' => 'Dave', 'age' => 40)
);

$search = 'Charlie';

foreach ($people as $key => $person) {
    if (in_array($search, $person)) {
        $result = array_search($search, $person);
        echo "The key for $search in the sub-array at index $key is: $result";
        break;
    }
}

if (!isset($result)) {
    echo "$search was not found in the \$people array";
}
// In this example, array_search() is used to search for the value 'Charlie' in the $people array,
// which is a multidimensional array. Since array_search() only works on one-dimensional arrays,
// a loop is used to iterate over each sub-array in $people. The in_array() function is used to
// check if the search value is present in the current sub-array, and if so, array_search() is
// called on that sub-array to find the corresponding key. If the search value is not found in
// any of the sub-arrays, a message is printed to the screen.