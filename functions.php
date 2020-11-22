<?php
function amount_formatting($amount) {
    return number_format($amount,0,'',' ') . ' Р';
}
/**
 * @noinspection PhpIncludeInspection
 */
function include_template(string $template, array  $data = [])
{
    ob_start();
    extract($data, EXTR_OVERWRITE);
    require __DIR__."/templates/{$template}.php";

    return ob_get_clean();
}
