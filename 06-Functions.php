<?php
    $y = 12;
    function registerUser() {
        global $y;
        $x = 10; // Function scope

        echo "User ergistered";
        echo $x;
        echo $y;
    }

    registerUser();

    