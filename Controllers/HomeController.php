<?php
// Объявляем пространство имен
namespace Controllers;

// Подключаем зависимости (шаблон)
require_once __DIR__ . '/../Views/BaseTemplate.php';
require_once __DIR__ . '/../Views/HomeTemplate.php';

use App\Views\HomeTemplate;

// ❗ КЛАСС ДОЛЖЕН НАЗЫВАТЬСЯ ИМЕННО ТАК
class HomeController
{
    public function get(): string 
    {
        return HomeTemplate::getTemplate();
    }
}