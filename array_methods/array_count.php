<?php
// Here is the basic syntax for using `array_count_values()`:

// ================== $new_array = array_count_values($old_array) ========================

// where `$old_array` is the original array and `$new_array` is the new array returned by the function.

// Example 1:
$fruits = array('apple', 'banana', 'orange', 'banana', 'kiwi', 'apple', 'banana');

$fruit_counts = array_count_values($fruits);
echo "<pre>";
print_r($fruit_counts);
echo "<br>";


// In this example, we define an array `$fruits` containing several fruit names, including duplicates.
// We then call the `array_count_values()` function on this array, and assign the result to a new variable
// `$fruit_counts`. Finally, we use `print_r()` to output the contents of the new array to the screen.
// The output will look like this:

// Array
// (
//     [apple] => 2
//     [banana] => 3
//     [orange] => 1
//     [kiwi] => 1
// )

// As you can see, the `$fruit_counts` array contains the unique fruit names as keys, and their respective
// counts as values. In this case, "apple" appears twice, "banana" appears three times, and "orange" and
// "kiwi" each appear once.

// Example 2: Counting occurrences of numbers in an array

$numbers = array(1, 2, 3, 2, 1, 4, 5, 1);

$number_counts = array_count_values($numbers);

print_r($number_counts);
echo "<br>";

// In this example, we have an array `$numbers` containing several integers, including duplicates.
// We call the `array_count_values()` function on this array, and assign the result to a new variable
// `$number_counts`. Finally, we use `print_r()` to output the contents of the new array to the screen.
// The output will look like this:

// Array
// (
//     [1] => 3
//     [2] => 2
//     [3] => 1
//     [4] => 1
//     [5] => 1
// )

// As you can see, the `$number_counts` array contains the unique numbers as keys, and their respective
// counts as values.

// Example 3: Counting occurrences of words in a string

$string = "The quick brown fox jumps over the lazy dog";

$words = explode(" ", $string);

$word_counts = array_count_values($words);

print_r($word_counts);
echo "<br>";

// In this example, we have a string `$string` containing several words. We first use the `explode()`
// function to split the string into an array of individual words. We then call the `array_count_values()`
// function on this array, and assign the result to a new variable `$word_counts`. Finally, we use `print_r()`
// to output the contents of the new array to the screen. The output will look like this:

// Array
// (
//     [The] => 1
//     [quick] => 1
//     [brown] => 1
//     [fox] => 1
//     [jumps] => 1
//     [over] => 1
//     [the] => 1
//     [lazy] => 1
//     [dog] => 1
// )

// As you can see, the `$word_counts` array contains the unique words as keys, and their respective counts
// as values. Note that the capitalization of the words has been preserved in the output.
// If you wanted to treat "The" and "the" as the same word, you could convert all the words to lowercase
// (or uppercase) before calling `array_count_values()`.