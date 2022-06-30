<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo "Comments & Variables"; ?></title>
</head>
<body>
    <?php 
    //  This is a single line comment in PHP 
    /*This 
    is a multiple line Comment
    in PHP */
    echo "Bismillah <br>";
    ?>

    <?php
    // Variables
    $person = 'Boy';
    $age = 24;
    $AGE = 'right';

    echo "This $person is $age yrs old $AGE<br>"

    ?>

    <?php
    // Data Types
    // String
    // integer 
    // Float 
    // Boolean 
    // Array 
    // Object 
    // NULL 
    // Resource 

    $test = 12;
    $fill = 1.2;
    $boolean = true;
    var_dump($test);
    echo "<br>";
    var_dump($fill);
    echo "<br>";
    var_dump($boolean);
    echo "<br>";

    $cars = array("Volvo", "BMW", "Toyota");
    var_dump($cars);
    echo "$cars[0]";
    echo "$cars[1]";
    echo "<br>";
    $name = NULL;
    echo var_dump($name);

    echo "<br>";
    // String Functions 

    // strlen() returns the length of a string

    echo strlen("Wired");
    echo "<br>";
    echo strlen("This is a test message")
    ?>
</body>
</html>