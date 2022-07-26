<?php
/* ---- Conditionals & Operators ---- */

/* ------------ Operators ----------- */

/*
< Less than
> Greater than
<= Less than or equal to
>= Greater than or equal to
== Equal to
=== Identical to
!= Not equal to
!== Not identical to
*/

/* ---------- If Statements --------- */

/*
** If Statement Syntax
if (condition) {
  // code to be executed if condition is true
}
*/

$age  = 22;

if($age > 20) {
    echo "You are old enough to vote";
} else {
    echo "Sorry you are not eligible to vote";
};

$t = date("F");

echo $t;

if($t < 12) {
    echo "Salam it is morning";
} elseif($t < 17) {
    echo "Good afternoon";
} else {
    echo "Good Evening";
};

// $students = [];
$students = ['wired', 'edith', 'bhadoo'];

if(!empty($students)) {
    echo $students[0];
} else {
    echo "Array empty";
};


// Ternary Operator

$stu = !empty($students) ? $students[2] : 'No posts'; 
echo $stu;

// Coleascing Operator
$stu = $students[0] ?? null;

// Switch

$favcolor = 'red';

switch($favcolor) {
    case 'red':
        echo "Your favorite color is red";
        break;
    case 'blue';
        echo "Your favorite color is blue";
        break;
    case 'green';
        echo "Your favorite color is green";
        break;
    default:
        echo "Your fav color is mine one: Purple";
};

