<?php 

    // echo "hello 43"

    /* This is a multi line 
    commnt */

    // echo - Output strings nums, html etc

    echo "This is nice text"; // Use the semicolon
    echo 12, 'Text String', true;

    // print - works like echo
    print_r([1, 2, 3]);

    // var_dump - Returns more info like data type and length 
    var_dump('Hello');
    var_dump(true);

    // var_export = Similar to var_dump except it returns quotes around string
    var_export('Hello test');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Title</title></title> 
</head>
<body>
    <h1><?php echo 'This is the heading'; ?></h1>
    <h3><?= 'This is the heading'; ?></h3>
</body>
</html>