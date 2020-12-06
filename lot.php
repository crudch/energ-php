<?php

require __DIR__ . '/functions.php';

$categories = __DIR__ . '/data/categories.php';
$product = null;

if (!empty($_GET['id'])) {
    $product = findProductByid((int)$_GET['id']);
}

if (null === $product) {
    http_response_code(404);
}

$content = include_template('lot', compact('lot', 'product'));

echo include_template('layout', [
    'content'    => $content,
    'categories' => $categories
]);
