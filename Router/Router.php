<?php
namespace App\Router;

// Подключаем контроллеры относительно папки Router
// __DIR__ = .../pizza221/Router
// ../Controllers = .../pizza221/Controllers
require_once __DIR__ . '/../Controllers/HomeController.php';
require_once __DIR__ . '/../Controllers/AboutController.php';

use Controllers\HomeController;
use Controllers\AboutController;

class Router
{
    public function route(string $url): ?string 
    {
        $path = parse_url($url, PHP_URL_PATH);
        $pieces = explode("/", $path);
        
        // Получаем ресурс (например, 'about' или пустую строку для главной)
        $resource = $pieces[2] ?? '';

        switch ($resource) {
            case "about":
                // Теперь класс должен найтись, так как файл подключен выше
                $controller = new AboutController();
                return $controller->get();
            
            case "home":
            case "":
                $controller = new HomeController();
                return $controller->get();
                
            default:
                $controller = new HomeController();
                return $controller->get();
        }
    }
}