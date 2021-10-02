<?php

function view($template, array $data = []): string
{
    extract($data, EXTR_SKIP);
    ob_start();
    include __DIR__ . "/../views/{$template}.php";
    return ob_get_clean();
}
