<?php


// Null coalescing is a feature in PHP that allows you to check
// for the existence of a variable or array element and return a default value
// if it doesn't exist or is null.

// The null coalescing operator ?? is used to implement null coalescing. 
// The operator checks if the value on the left-hand side of the operator is null or not set,
// and if it is, it returns the value on the right-hand side of the operator. 
// If the value on the left-hand side of the operator is not null, it is returned instead.




// Here we have variable $data
// When we call $data['name'] it will show it's name , because it set.
// When we call $dat['age'] it will show 0, because we wrote that if it does not set or null show what we set.
$data = ['name' => 'John', 'age' => null];

$name = $data['name'] ?? 'Unknown';
$age = $data['age'] ?? 0;

echo $name; // Output: John
echo "<br>";
echo $age; // Output: 0

echo "<br>";

$data = [
    'user' => [
        'name' => 'John',
        'email' => null,
        'address' => [
            'city' => 'New York',
            'state' => null
        ]
    ]
];

$email = $data['user']['email'] ?? $data['user']['address']['email'] ?? 'No email found';
$state = $data['user']['address']['state'] ?? 'Unknown';
$city = $data['user']['address']['city'];

echo $email; // Output: No email found
echo "<br>";

echo $state; // Output: Unknown
echo "<br>";
echo $city;
