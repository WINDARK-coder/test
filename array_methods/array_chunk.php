<?php
// The `array_chunk()` function in PHP allows you to split an array into smaller "chunks"
// of a specified size. This can be useful when you need to process large amounts of data
// in batches, or when you want to split up a large array into more manageable pieces.

// The basic syntax for `array_chunk()` is as follows:

// =============== array_chunk(array $array, int $size ,[bool $preserve_keys = false]) ============

// - `$array`: The array to be split into chunks
// - `$size`: The number of elements in each chunk
// - `$preserve_keys` (optional): Whether to preserve the keys of the original array in the
// - resulting chunks (default is `false`)

// The function returns a new array of chunks, where each chunk is an array containing `$size`
// elements (except for possibly the last chunk, which may have fewer than `$size` elements).

// Here are some examples of how to use `array_chunk()`:

// Example 1: Split an array into chunks of 2 elements

$fruits = ['apple', 'banana', 'cherry', 'date', 'elderberry', 'fig'];
$chunks = array_chunk($fruits, 2);
echo "<pre>";
print_r($chunks);
echo "<br>";


// Output:
// Array
// (
//     [0] => Array
//         (
//             [0] => apple
//             [1] => banana
//         )
//     [1] => Array
//         (
//             [0] => cherry
//             [1] => date
//         )
//     [2] => Array
//         (
//             [0] => elderberry
//             [1] => fig
//         )
// )

// In this example, we use `array_chunk()` to split the `$fruits` array into chunks of 2 elements each.
// The resulting array `$chunks` contains 3 sub-arrays, each with 2 elements (except for the last chunk,
// which has 2 elements).

// Example 2: Split an array into chunks of 3 elements, preserving keys

$numbers = ['one' => 1, 'two' => 2, 'three' => 3, 'four' => 4, 'five' => 5, 'six' => 6];
$chunks = array_chunk($numbers, 3, true);

print_r($chunks);
echo "<br>";


// Output:
// Array
// (
//     [0] => Array
//         (
//             [one] => 1
//             [two] => 2
//             [three] => 3
//         )
//     [1] => Array
//         (
//             [four] => 4
//             [five] => 5
//             [six] => 6
//         )
// )

// In this example, we use `array_chunk()` to split the `$numbers` array into chunks of 3 elements each,
// while preserving the keys of the original array. The resulting array `$chunks` contains 2 sub-arrays,
// each with 3 elements (except for the last chunk, which has only 1 element).




// 1. Pagination: Suppose we have an array of items and want to display them in pages,
// with 10 items per page. We can use `array_chunk()` to split the array into chunks of
// 10 items each, corresponding to each page. For example:

$items = [/* ... */];
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$page_items = array_chunk($items, 10)[$page - 1];  // display $page_items on the current page

// This code first checks if a `page` parameter is present in the query string, and if so,
// converts it to an integer. It then uses `array_chunk()` to split the `$items` array into
// chunks of 10 items each, and selects the chunk corresponding to the current page
// (which is `$page - 1`, since array indexes are zero-based).

// 2. Processing image files: Suppose we have a directory containing a large number of image files,
// and we want to process them in batches of 100 at a time. We can use `glob()` to get a list of file
// paths matching a certain pattern (e.g. all `.jpg` files in a directory), and then use `array_chunk()`
// to split the list into batches. For example:

$files = glob('/path/to/images/*.jpg');
$batches = array_chunk($files, 100);
foreach ($batches as $batch) {
    foreach ($batch as $file) {
        // process $file
    }
}

// This code uses `glob()` to get a list of all `.jpg` files in the `/path/to/images` directory.
// It then uses `array_chunk()` to split the list into batches of 100 files each, and loops over
// each batch to process each file in turn.

// 3. Batch insert in database: Suppose we have an array of data that we want to insert into
// a database table, with a limit of 1000 records per insert to prevent memory issues.
// We can use `array_chunk()` to split the array into chunks of 1000 records each, and then
// perform a batch insert for each chunk. For example:

$data = [/* ... */];
// $db = new PDO(/* ... */);
$batches = array_chunk($data, 1000);
foreach ($batches as $batch) {
    $placeholders = rtrim(str_repeat('(?, ?, ?), ', count($batch)), ', ');
    $stmt = $db->prepare("INSERT INTO my_table (col1, col2, col3) VALUES $placeholders");
    $params = [];
    foreach ($batch as $row) {
        $params = array_merge($params, [$row['col1'], $row['col2'], $row['col3']]);
    }
    $stmt->execute($params);
}

// This code uses `array_chunk()` to split the `$data` array into chunks of 1000 records each.
// It then constructs an SQL query string with the appropriate number of placeholders for each
// record, and prepares a statement with that query string. It then loops over each batch,
// flattens the array of records into a flat list of parameters, and executes the statement
// with those parameters.