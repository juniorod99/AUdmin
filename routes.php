<?php

$controller = str_replace('/', '', parse_url($_SERVER['REQUEST_URI'])['path']);

if (!file_exists("controllers/{$controller}.controller.php")) {
    abort(404);
}

require "controllers/{$controller}.controller.php";
