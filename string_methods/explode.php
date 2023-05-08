<?php
// In PHP, the `explode()` function is used to split a string into an array based on a delimiter.
// The syntax of the `explode()` function is:

// ================ explode($delimiter, $string, $limit = PHP_INT_MAX) ========================

// The function takes in two required parameters and one optional parameter:

// - `$delimiter`: The string used to identify where to split the string. This parameter is mandatory.
// - `$string`: The string to be split into an array. This parameter is mandatory.
// - `$limit`: An optional integer value that specifies the maximum number of array elements to create.
//    By default, `explode()` will create as many elements as needed to include every delimited substring.
//    If `$limit` is set to a positive integer, then the returned array will contain at most `$limit` elements.
//    If `$limit` is set to a negative integer, then the last `$limit` elements will be returned.

// Here's an example that demonstrates how to use the `explode()` function:

$string = 'apple,banana,orange,grape';
$delimiter = ',';

// Split the string into an array using the comma delimiter
$fruits = explode($delimiter, $string);

// Output each element of the array
foreach ($fruits as $fruit) {
    echo $fruit . '<br>';
}

// In this example, we define a string `$string` containing a comma-separated list of fruits.
// We then use the `explode()` function to split the string into an array using a comma delimiter.
// Finally, we loop through each element of the resulting array and output it to the screen.

// The output of this code would be:

// apple
// banana
// orange
// grape

// Here's another example that shows how to use the `$limit` parameter:

$string = 'apple,banana,orange,grape';
$delimiter = ',';

// Split the string into an array using the comma delimiter and limit to 2 elements
$fruits = explode($delimiter, $string, 2);

// Output each element of the array
foreach ($fruits as $fruit) {
    echo $fruit . '<br>';
}

// In this example, we use the same `$string` and `$delimiter` variables as in the previous example,
// but this time we pass in a `$limit` parameter of 2 to the `explode()` function.
// This means that the resulting array will contain at most 2 elements.
// In this case, the resulting array will contain the first two fruits in the original list:
// `apple` and `banana`. The output of this code would be:

// apple
// banana

// Note that the `explode()` function can be useful in a wide range of applications, from parsing
// data from CSV files to breaking up user input into individual words or phrases.


// Using explode() to extract values from a URL


// Define a URL string
$url = 'https://example.com/page.php?id=123&name=John+Doe';

// Extract the query string portion of the URL
$queryString = parse_url($url, PHP_URL_QUERY);

// Split the query string into an array using the ampersand as a delimiter
$params = explode('&', $queryString);

// Loop through each parameter and extract the key/value pairs
foreach ($params as $param) {
    $parts = explode('=', $param);
    $key = urldecode($parts[0]);
    $value = urldecode($parts[1]);
    echo $key . ' = ' . $value . '<br>';
}
// In this example, we start by defining a URL string and then using the parse_url() function to
// extract the query string portion of the URL. We then use explode() to split the query string
// into an array using the ampersand as a delimiter. Finally, we loop through each parameter in
// the resulting array and extract the key/value pairs using explode() again, this time using
// the equals sign as a delimiter. We then output each key/value pair.

// Splitting a multiline string into an array


// Define a multiline string
$string = "apple\nbanana\norange\ngrape\n";

// Split the string into an array using the newline character as a delimiter
$array = explode("\n", $string);

// Remove any empty elements from the resulting array
$array = array_filter($array);

// Output each element of the resulting array
foreach ($array as $element) {
    echo $element . "<br>";
}
// In this example, we define a multiline string and use the explode() function to split it into an
// array using the newline character as a delimiter. We then use array_filter() to remove any empty
// elements from the resulting array, and finally output each element of the array.