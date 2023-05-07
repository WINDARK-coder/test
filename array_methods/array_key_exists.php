<?php
// The `array_key_exists()` function is a built-in PHP function that checks whether
// a specified key exists in an array or not. The function takes two arguments:

// ======================= array_key_exists('key',array) =========================

// 1. The key to check for existence
// 2. The array to search in

// The function returns a boolean value - `true` if the key exists in the array, and `false` if it doesn't.

// Example 1:

$array = array('foo' => 1, 'bar' => 2, 'baz' => 3);
if (array_key_exists('foo', $array)) {
    echo "Key 'foo' exists in the array <br>";
} else {
    echo "Key 'foo' does not exist in the array <br>";
}
// Output:
// Key 'foo' exists in the array

// In this example, we define an array with three key-value pairs. We then use `array_key_exists()`
// to check if the key `'foo'` exists in the array. Since `'foo'` is indeed a key in the array,
// the function returns `true`, and the corresponding message is printed to the console.

// Note that `array_key_exists()` only checks for the existence of a key in an array.
// To check if a value exists in an array, you can use the `in_array()` function.




// Example 2: Checking for keys in a nested array

$array = array(
    'fruit' => array(
        'apple' => 1,
        'banana' => 2,
        'orange' => 3
    ),
    'vegetable' => array(
        'carrot' => 4,
        'celery' => 5,
        'lettuce' => 6
    )
);

if (array_key_exists('apple', $array['fruit'])) {
    echo "Found 'apple' in the 'fruit' array <br>";
} else {
    echo "Did not find 'apple' in the 'fruit' array <br>";
}

if (array_key_exists('celery', $array['vegetable'])) {
    echo "Found 'celery' in the 'vegetable' array <br>";
} else {
    echo "Did not find 'celery' in the 'vegetable' array <br>";
}

// Output:
// Found 'apple' in the 'fruit' array
// Found 'celery' in the 'vegetable' array

// In this example, we have a nested array that contains two sub-arrays: `fruit` and `vegetable`.
// We use `array_key_exists()` to check for the existence of specific keys in each of these sub-arrays.

// Example 3: Using `array_key_exists()` with dynamic keys

$user = array(
    'id' => 1234,
    'name' => 'John Smith',
    'email' => 'john@example.com'
);

$keys_to_check = array('id', 'name', 'age');

foreach ($keys_to_check as $key) {
    if (array_key_exists($key, $user)) {
        echo "Key '$key' exists in the user array <br>";
    } else {
        echo "Key '$key' does not exist in the user array <br>";
    }
}
echo "<br>";

// Output:

// Key 'id' exists in the user array
// Key 'name' exists in the user array
// Key 'age' does not exist in the user array

// In this example, we have an array representing a user with various pieces of information.
// We also have another array `$keys_to_check` that contains a list of keys that we want to
// check for in the user array. We use a `foreach` loop to iterate over each key in `$keys_to_check`,
// and use `array_key_exists()` to check for its existence in the user array.