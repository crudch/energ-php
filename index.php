<?php
date_default_timezone_set('Europe/Moscow');
require __DIR__ . '/functions.php';

$categories = [
    "Доски и лыжи",
    "Крепления",
    "Ботинки",
    "Одежда",
    "Инструменты",
    "Разное"
];
$products = [
    ["title"    => "2014 Rossignol District Snowboard",
     "category" => "Доски и лыжи",
     "price"    => "784",
     "img"      => "img/lot-1.jpg",
     'end_date' => '2020-11-26 17:58:00'
    ],
    ["title"    => "DC Ply Mens 2016/2017 Snowboard",
     "category" => "Доски и лыжи",
     "price"    => "159999",
     "img"      => "img/lot-2.jpg",
     'end_date' => '2020-11-24 22:00:00'
    ],
    ["title"    => "Крепления Union Contact Pro 2015 года размер L/XL",
     "category" => "Крепления",
     "price"    => "8000",
     "img"      => "img/lot-3.jpg",
     'end_date' => '2020-11-19 22:30:00'
    ],
    ["title"    => "Ботинки для сноуборда DC Mutiny Charocal",
     "category" => "Ботинки",
     "price"    => "10999",
     "img"      => "img/lot-4.jpg",
     'end_date' => '2020-11-30 23:13:00'
    ],
    ["title"    => "Куртка для сноуборда DC Mutiny Charocal",
     "category" => "Одежда",
     "price"    => "7500",
     "img"      => "img/lot-5.jpg",
     'end_date' => '2020-11-27 22:44:00'
    ],
    ["title"    => "Маска Oakley Canopy",
     "category" => "Разное",
     "price"    => "5400",
     "img"      => "img/lot-6.jpg",
     'end_date' => '2020-11-27 23:05:00'
    ]
];

$content = include_template('main', compact('products', 'categories'));

echo include_template('layout', [
    'content'    => $content,
    'categories' => $categories
]);
