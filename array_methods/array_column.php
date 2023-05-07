<?php

// The `array_column()` function in PHP is used to extract a single column
// of values from a multi-dimensional array. The function takes three arguments:

// 1. The input array: This is the multi-dimensional array from which the column needs to be extracted.

// 2. The column key: This is the key or index of the column whose values need to be extracted.

// 3. The index key (optional): This is an optional parameter that specifies the index or
// key of the input array to use as keys for the output array. 
// If this parameter is not specified, the output array will use numeric keys.

// ============ array_column('input_array','column_key','index_key(optional)') ============

// Example 1

$data = [
    ['id' => 1, 'name' => 'John', 'age' => 25],
    ['id' => 2, 'name' => 'Jane', 'age' => 30],
    ['id' => 3, 'name' => 'Bob', 'age' => 40],
];

// Extract the 'name' column
$names = array_column($data, 'name');
echo "<pre>";

print_r($names);
echo '<br>';

// Output:
// Array
// (
//     [0] => John
//     [1] => Jane
//     [2] => Bob
// )

// In the first example, the `array_column()` function is used to extract the `'name'`
// column from the `$data` array, resulting in a new array containing only the `'name'` values.


// Example 2

$ages = array_column($data, 'age', 'id');

print_r($ages);
echo '<br>';


// Output:
// Array
// (
//     [1] => 25
//     [2] => 30
//     [3] => 40
// )


// In the second example, the `array_column()` function is used to extract both the `'name'` and
// `'age'` columns from the `$data` array, with `'id'` used as the index/key for the output array.
// The resulting array is a multi-dimensional array with `'id'` as the
// top-level keys and `'name'` and `'age'` as sub-keys.

// Example 3: Extracting a single column from an associative array



$products = [
    'Product A' => 10.00,
    'Product B' => 20.00,
    'Product C' => 30.00,
];

$prices = array_column($products, null);

print_r($prices);
echo '<br>';


// This will output:

// Array
// (
//     [0] => 10
//     [1] => 20
//     [2] => 30
// )

// In this example, passing `null` as the second argument to `array_column()` will cause it to
// return all values from the input array, effectively extracting just the values and ignoring the keys.

// Example 3: Extracting a column of nested array values

// Suppose you have a multi-dimensional array containing information about orders, including
// the items ordered and their quantities, and you want to extract just the quantities of a
// specific item. You can use `array_column()` with a third argument to extract the quantities like this:


$orders = [
    ['item' => 'Product A', 'quantity' => 2],
    ['item' => 'Product B', 'quantity' => 1],
    ['item' => 'Product A', 'quantity' => 1],
    ['item' => 'Product C', 'quantity' => 3],
];

$quantities = array_column($orders, 'quantity', 'item');

print_r($quantities);
echo '<br>';



// This will output:


// Array
// (
//     [0] => 2
//     [1] => 1
// )


// In this example, passing `'quantity'` as the second argument to `array_column()` will
// cause it to extract just the quantities, and passing `'item'` as the third argument will
// cause it to use the values of the `item` column as the keys for the resulting array.