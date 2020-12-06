<?php
function amount_formatting($amount)
{
    return number_format($amount, 0, '', ' ') . ' Р';
}

/**
 * @noinspection PhpIncludeInspection
 */
function include_template(string $template, array $data = [])
{
    ob_start();
    extract($data, EXTR_OVERWRITE);
    require __DIR__ . "/templates/{$template}.php";

    return ob_get_clean();
}

/*
 * @param $date
 *
 * $throws Exception
 */

function dateEnd($date)
{
    $diff = strtotime($date) - $_SERVER['REQUEST_TIME'];

    if ($diff < 0) {
        return false;
    }

    $days = floor($diff / 86400) ?: ' ';
    $hours = sprintf('%02d', floor(($diff % 86400) / 3600));
    $minutes = sprintf('%02d', floor(($diff % 3600) / 60));

    return "{$days} {$hours} : {$minutes}";

}


function findProductByid(int $id): ?array
{
    foreach (require __DIR__ . '/data/products.php' as $product) {
        if ($product['id'] === $id) {
            return $product;
        }
    }


    return null;
}
