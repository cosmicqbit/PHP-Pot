<?php
    // Simple Array
    $numbers = [1, 33, 5];
    $fruits = array('Apple', 'Mango', 12);

    var_dump($numbers);
    echo $fruits[1]; // Prints Mango

    // Associative Array
    $color = [
        1 => 'red',
        2 => 'blue',
        3 => 'green',
        4 => 'yellow'
    ];

    echo $color[3];

    $hex = [
        'red' => '#f00',
        'blue' => '#0f0',
        'green' => '#00f'
    ];

    echo $hex['blue'];

    $person = [
        'first_name' => 'Shariq',
        'last_name' => 'Hussain',
        'email' => 'test@mail.com'
    ];

    echo $person['first_name'];

    $people = [
        [
            'first_name' => 'Shariq',
            'last_name' => 'Hussain',
            'email' => 'test@mail.com'
        ],
        [
            'first_name' => 'Numair',
            'last_name' => 'Badir',
            'email' => 'test_01@mail.com'
        ]
    ];

    echo $people[1]['email'];
    var_dump(json_encode($people));