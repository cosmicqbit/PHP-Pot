<?php
    $y = 12;
    function registerUser($email) {
        global $y;
        $x = 10; // Function scope

        echo $email . " User registered";
        echo $x;
        echo $y . '<br>';
    }

    registerUser('john@mail.com');

    function add($a = 0, $b = 0) {
        return $a + $b . '<br>';
    }

    echo add(4, 5);
    

    // Anonymous Function
    $subtract = function($a, $b) {
        return $a - $b;
    };

    echo $subtract(9, 8);

    // Arrow Functions
    $multiply = fn($a, $b) => $a * $b;