<?php
// Если index.php лежит в папке pizza221, то __DIR__ укажет на C:\xampp\htdocs\pizza221

// Правильное подключение (убедитесь, что папки Router и Controllers лежат РЯДОМ с index.php)
require_once __DIR__ . '/Router/Router.php';
require_once __DIR__ . '/Controllers/HomeController.php';
require_once __DIR__ . '/Controllers/AboutController.php';
require_once __DIR__ . '/Views/BaseTemplate.php';
require_once __DIR__ . '/Views/HomeTemplate.php';
require_once __DIR__ . '/Views/AboutTemplate.php';

use App\Router\Router;

$router = new Router();
$url = $_SERVER['REQUEST_URI'];
echo $router->route($url);