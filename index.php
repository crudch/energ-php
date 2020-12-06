<?php
date_default_timezone_set('Europe/Moscow');
require __DIR__ . '/functions.php';

$products = require __DIR__ . '/data/products.php';
$categories = require __DIR__ . '/data/categories.php';

$content = include_template('main', compact('products', 'categories'));

echo include_template('layout', [
    'content'    => $content,
    'categories' => $categories
]);
