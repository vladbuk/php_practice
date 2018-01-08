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

function map($items, $func) {
    $results = [];

    foreach ($items as $item) {
        $results[] = $func($item);
    }

    return $results;
}


// Получить коллекцию / список емейлов

$emails = map($users, function($user) {
    return $user["email"];
});


// Получить коллекцию / список имен
$names = map($users, function($user) {
    return $user["name"];
});


// Получить коллекцию / список товаров
$finalProducts = map($products, function($product) {
    return [
        "title" => $product["product_title"],
        "price" => $product["product_price"]
    ];
});


var_dump($emails, $names, $finalProducts);
