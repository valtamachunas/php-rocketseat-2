<?php
$controller = "index";
var_dump($_SERVER['PATH_INFO']);

if (isset($_SERVER['PATH_INFO'])) { //se tiver barra na url entao tem path info senao nao tem, no index por exemplo nao tem path info por isso fazemos essa verificação
    $controller = str_replace("/", "", $_SERVER['PATH_INFO']);
}

if (!file_exists("controllers/{$controller}.controller.php")) {
    http_response_code(404);
    echo "Página não existe";
    die();
}

require "controllers/{$controller}.controller.php";
