<?php


/* -------- Loops & Iteration ------- */

/* ------------ For Loop ------------ */

/*
** For Loop Syntax
  for (initialize; condition; increment) {
  // code to be executed
  }
*/

for($x = 0; $x <= 10; $x++) {
    // echo $x;
    echo "Number " . $x . '<br>';
}


/* ------------ While Loop ------------ */

/*
** While Loop Syntax
  while (condition) {
  // code to be executed
  }
*/

echo "This is while loop" . '<br>' . '<br>';

$x = 1;

while($x <= 10) {
    echo "Number " . $x . '<br>';
    $x++;
}


/* ---------- Do While Loop --------- */

/*
** Do While Loop Syntax
  do {
  // code to be executed
  } while (condition);
do...while loop will always execute the block of code once, even if the condition is false.
*/

echo "This is a do while loop" . '<br>' . '<br>';

$x = 3;

do {
    echo "Number " . $x . '<br>';
    $x++;
} while($x <= 10);

/* ---------- Foreach Loop ---------- */

/*
** Foreach Loop Syntax
  foreach ($array as $value) {
  // code to be executed
  }
*/

// Loop through an array

echo "This is a ForEach loop" . '<br>' . '<br>';

$subjects = ['Science', 'GK', 'Economics', 'Language'];

//Using regular for loop
for($x = 0; $x < count($subjects); $x++) {
    echo $subjects[$x] . '<br>';
}

echo "This is a forEach loop" . '<br>' . '<br>';

// Using ForEach Loop
foreach($subjects as $index => $sub) {
    echo $index . '-' . $sub . '<br>';
}