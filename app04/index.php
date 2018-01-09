<?php

$users = [
    [
        "name" => "John",
        "surname" => "Doe",
        "age" => 20,
        "email" => "john@example.com",
        "banned" => true
    ],

    [
        "name" => "Jane",
        "surname" => "Doe",
        "age" => 18,
        "email" => "jane@example.com",
        "banned" => false
    ],
    
    [
        "name" => "Mary",
        "surname" => "Doe",
        "age" => 19,
        "email" => "mary@example.com",
        "banned" => false
    ],
];

$products = [
    [
        "product_title" => "chair",
        "product_price" => 20,
        "created" => "2018-01-07",
        "in_stock" => true
        // ...
    ],
    [
        "product_title" => "table",
        "product_price" => 10,
        "created" => "2018-01-07",
        "in_stock" => false
        // ...
    ],
    [
        "product_title" => "computer",
        "product_price" => 100,
        "created" => "2018-01-07",
        "in_stock" => true
        // ...
    ],
];

/**
 * Function map
 *
 * @param [array] $items
 * @param [anonymouse function] $func
 *  
 * @return array
 */
function map($items, $func) 
{
    $results = [];

    foreach ($items as $item) {
        $results[] = $func($item);
    }

    return $results;
}

function filter($items, $func)
{
    $results = [];

    foreach ($items as $item) {
        if ($func($item)) {
            $results[] = $item;
        }
    }

    return $results;
}

function reject($items, $func)
{
    $results = [];

    foreach ($items as $item) {
        if (!$func($item)) {
            $results[] = $item;
        }
    }

    return $results;
}

// показать забаненных пользователей
$bannedUsers = filter(
    $users, function ($user) {
        return $user["banned"];
    }
);

// исключить забаненных пользователей 
$notBannedUsers = reject(
    $users, function ($user) {
        return $user["banned"];
    }
);

// показать продукты "в наличии"
$productsInStock = filter(
    $products, function ($product) {
        return $product["in_stock"];
    }
);

$productsInStockTitle = map(
    $productsInStock, function ($product) {
        return [
            $product["product_title"],
            $product["product_price"]
        ];
    }
);

var_dump($notBannedUsers, $productsInStockTitle);

exit;
// Получить коллекцию / список емейлов

$emails = map(
    $users, function ($user) {
        return $user["email"];
    }
);


// Получить коллекцию / список имен
$names = map(
    $users, function ($user) {
        return $user["name"];
    }
);


// Получить коллекцию / список товаров
$finalProducts = map(
    $products, function ($product) {
        return [
            "title" => $product["product_title"],
            "price" => $product["product_price"]
        ];
    }
);


var_dump($emails, $names, $finalProducts);
