<?php

$users = [
    [
        "name" => "John",
        "surname" => "Doe",
        "age" => 20,
        "email" => "john@example.com"
    ],

    [
        "name" => "Jane",
        "surname" => "Doe",
        "age" => 18,
        "email" => "jane@example.com"
    ],

    [
        "name" => "Mary",
        "surname" => "Doe",
        "age" => 19,
        "email" => "mary@example.com"
    ],
];

$products = [
    [
        "product_title" => "chair",
        "product_price" => 20,
        "created" => "2018-01-07"
        // ...
    ],
    [
        "product_title" => "table",
        "product_price" => 10,
        "created" => "2018-01-07"
        // ...
    ],
    [
        "product_title" => "computer",
        "product_price" => 100,
        "created" => "2018-01-07"
        // ...
    ],
];


// Задача: получить коллекцию / список емейлов

$emails = [];

foreach ($users as $user) {
    $emails[] = $user["email"];
}

// Задача: получить коллекцию / список имен
$names = [];

foreach ($users as $user) {
    $names[] = $user["name"];
}

// Задача: получить коллекцию / список товаров
$finalProducts = [];

foreach ($products as $product) {
    $finalProducts[] = [
        "title" => $product["product_title"],
        "price" => $product["product_price"]
    ];
}

var_dump($emails, $names, $finalProducts);
