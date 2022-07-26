
<?php
/* ----- Variables & Data Types ----- */

/* --------- PHP Data Types --------- */
/*
- String - A string is a series of characters surrounded by quotes
- Integer - Whole numbers
- Float - Decimal numbers
- Boolean - true or false
- Array - An array is a special variable, which can hold more than one value
- Object - A class
- NULL - Empty variable
- Resource - A special variable that holds a resource
*/

/* --------- Variable Rules --------- */
/*
- Variables must be prefixed with $
- Variables must start with a letter or the underscore character
- variables can't start with a number
- Variables can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )
- Variables are case-sensitive ($name and $NAME are two different variables)
*/

$name = 'wired'; // string
$age = 21; // Int
$has_Kids = true; // bool
$cash_On_hand = 10.23; // Float

echo $name;
echo $age;
echo $has_Kids; // Returns 1 if true or 0 if false

var_dump($has_Kids);

// Concatenation
echo '$name is my name'; // This won't work cuz of single quotes
echo "$name is my name"; // This is instaed work cuz of double quotes
echo "${name} is my name"; // Preferred method

echo $name . ' is ' . $age . ' years old '; // Concatenation
echo 10 / 2;
echo 2 + 2;

// Creating constants
define('HOST', 'localhost');
define('ENROLL', 21);

echo ENROLL;