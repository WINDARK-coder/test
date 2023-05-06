<?php

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
