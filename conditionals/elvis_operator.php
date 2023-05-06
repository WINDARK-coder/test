<?php
// Example 1: Using the Elvis operator with an empty value
$name = $data['name'] ?: 'Guest';

// Example 2: Using the Null coalescing operator with an empty value
$name = $data['name'] ?? 'Guest';


//In Example 1, if $data['name'] is an empty string or an integer 0,
// the Elvis operator will still return that value, and $name will be
// assigned an empty string or integer 0. In Example 2, the Null coalescing operator
// will return the default value 'Guest' instead of the empty value.

//So, the choice of operator depends on your use case and how you want to handle empty values.
// If you want to allow empty values to be returned, use the Elvis operator.
// If you want to replace empty values with a default value, use the Null coalescing operator.



// Example 1: Using the Elvis operator to assign a default value
$username = $data['user'] ?: 'Guest';

// If $data['user'] is not null or undefined, $username will be set to its value.
// If $data['user'] is null or undefined, $username will be set to 'Guest'.

// Example 2: Using the Elvis operator to access an object property
$address = $user->address ?: 'Unknown';

// If $user->address is not null or undefined, $address will be set to its value.
// If $user->address is null or undefined, $address will be set to 'Unknown'.

// Example 3: Using the Elvis operator with a complex expression
$fullName = ($user->firstName . ' ' . $user->lastName) ?: 'Unknown';

// If $user->firstName and $user->lastName are not null or undefined,
// $fullName will be set to their concatenation.
// If either $user->firstName or $user->lastName is null or undefined,
// $fullName will be set to 'Unknown'.


// In each of these examples, the Elvis operator is used to assign a default value to a variable
// when a value is null or undefined.