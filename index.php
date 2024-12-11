<?php

echo "SEMPRE CAI NO INDEX.PHP!!!!";
$controller = "index";
// echo "<pre>";
var_dump($_SERVER['PATH_INFO']);
// echo "</pre>";
if (isset($_SERVER['PATH_INFO'])) {
    $controller = str_replace("/", "", $_SERVER['PATH_INFO']);
}







require "controllers/{$controller}.controller.php";
