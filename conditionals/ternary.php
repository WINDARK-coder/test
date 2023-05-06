<?php
//The ternary operator in PHP is a shorthand way of writing an if-else statement. 
//It allows you to write a conditional expression in a single line of code, 
// which can be useful in situations where you need to assign a value to a variable based on a condition.


//=========== (condition) ? value_if_true : value_if_false; ==================


// Example 1


// Here we have $score variable. We wanna show if this score is more or equal 60.
// Because it is true, it gives us 'pass'.
// But if we change condition to less than or equal, it will show us 'fail'. It is because of being false.

$score = 75;
$result = ($score >= 60) ? 'pass' : 'fail';
echo $result; // Output: pass
echo "<br>";

$result = ($score <= 60) ? 'pass' : 'fail';
echo $result; // Output: fail

// Example 2

// In this example, the ternary operator is used inside the calculateDiscount function
// to calculate the discount on the price if the discount value is greater than 0. 
// If the discount value is 0 or negative, the function returns 0. The ternary operator
// is used again outside the function to subtract the discount from the price and assign
// the result to the $total variable.

function calculateDiscount($price, $discount)
{
    return ($discount > 0) ? $price * ($discount / 100) : 0;
}

$price = 100;
$discount = 20;

$total = $price - calculateDiscount($price, $discount);
echo "<br>";

echo $total; // Output: 80


echo "<br>";

// Example 3
// In this example, the ternary operator is used in a nested manner to calculate
// the grade for a student based on their score. The first ternary operator checks
// if the score is greater than or equal to 90, if it is true, then the grade is set
// to 'A', otherwise the second ternary operator is evaluated. 
// The second ternary operator checks if the score is greater than or equal to 80,
// if it is true, then the grade is set to 'B', otherwise the third ternary operator
// is evaluated. The third ternary operator checks if the score is greater than or equal to 70,
// if it is true, then the grade is set to 'C', otherwise the grade is set to 'F'.
// The result is the grade 'B' for a score of 80.


$grade = 80;
$result = ($grade >= 90) ? 'A' : (($grade >= 80) ? 'B' : (($grade >= 70) ? 'C' : 'F'));
echo $result; // Output: B
echo "<br>";

// Example 4

// In this example, the ternary operator is used to set the day of the week based on
// the current date. The first ternary operator checks if the day of the week is
// equal to 1, if it is true, then the day is set to 'Monday', otherwise the second
// ternary operator is evaluated. The second ternary operator checks if the day of
// the week is equal to 2, if it is true, then the day is set to 'Tuesday', and so on,
// until the final else condition is reached, which sets the day to 'Weekend'.
// The switch statement is then used to print a message based on the day of the week.
// If the day is Monday, it prints a message about the start of the work week, if it is
// Saturday or Sunday, it prints a message about the weekend, and for all other days, it
// prints a message to keep pushing.




$dayOfWeek = date('N');
$message = ($dayOfWeek == 1) ? 'Monday' : (($dayOfWeek == 2) ? 'Tuesday' : (($dayOfWeek == 3) ? 'Wednesday' : (($dayOfWeek == 4) ? 'Thursday' : (($dayOfWeek == 5) ? 'Friday' : 'Weekend'))));
switch ($dayOfWeek) {
    case 1:
        echo "Today is $message, start of the work week.";
        break;
    case 6:
    case 7:
        echo "Today is $message, enjoy your weekend.";
        break;
    default:
        echo "Today is $message, keep pushing!";
}
echo "<br>";

// Example 5


//In this example, the ternary operator is used to set a default value for the
// $greeting variable based on the value of the $name argument. 
//If the $name argument is not provided or is empty, the ternary operator
// evaluates to false and the default greeting "Hello, stranger!" is assigned
// to the $greeting variable. If the $name argument is provided and is not empty,
// the ternary operator evaluates to true and the personalized greeting "Hello, $name!"
// is assigned to the $greeting variable.


function greet($name = '')
{
    $greeting = ($name) ? "Hello, $name!" : "Hello, stranger!";
    echo $greeting;
}

greet(); // Output: "Hello, stranger!"
echo "<br>";

greet('John'); // Output: "Hello, John!"
