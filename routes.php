<?php
$controller = 'index';

if (isset($_SERVER['PATH_INFO'])) {
    $controller = str_replace('/', '', $_SERVER['PATH_INFO']);
}

function carregarController()
{

    $controller = str_replace('/', '', parse_url($_SERVER['REQUEST_URI'])['path']);

    if (! $controller) {
        $controller = 'index';
    }

    if (! file_exists("controllers/{$controller}.controller.php")) {

        echo "página não existente";
        http_response_code(404);
        die();

    }

    require "controllers/{$controller}.controller.php";
}

carregarController();
