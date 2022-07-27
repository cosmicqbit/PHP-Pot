<?php
    $fruits = ['Apple', 'Pear', 'Orange'];

    // Get Length
    echo count($fruits);

    // Search array
    var_dump(in_array('Apple', $fruits));

    // Add to array
    $fruits[] = 'Grape';
    array_push($fruits, 'Blueberry', 'Strawberry');

    // Add to beginning
    array_unshift($fruits, 'Mango');

    // Remove from Array
    array_pop($fruits); // Remove End Item
    array_shift($fruits); // Remove Start Item

    // Remove specific Item
    unset($fruits[2]);

    // Split into 2 chunks
    $chunked_array = array_chunk($fruits, 2);

    // Concatenate

    $arr1 = [1, 2, 3];
    $arr2 = [4, 5, 6];

    $arr3 = array_merge($arr1, $arr2);
    // Using spred operator
    $arr4 = [...$arr1];

    // Combine
    $d = ['green', 'red', 'yellow'];
    $e = ['avacado', 'apple', 'banana'];

    $f = array_combine($a, $b); // Matches 'em in key value pairs

    // Flip Array
    $flipped = array_flip($f); // Flips keys  & values

    // Range
    $numbers = range(1, 20);

    // Mapping
    $newNumber = array_map(function($number) {
        return "Number ${number}";
    }, $numbers);

    // Filter
    $lessThan10 = array_filter($numbers, fn($number) => 
    $number <= 10);

    // Reduce
    $num = array_reduce($numbers, fn($carry, $number) => 
    $carry + $number);

