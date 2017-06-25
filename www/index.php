<?php
    include_once '../config/config.php';        //Инициализация перееменных
    include_once '../library/mainFanction.php'; //Основные функции
    //Определение контроллера для работы и имя экшена для формирования страницы
    $controllerName = isset($_GET['controller']) ? ucfirst($_GET['controller']):'Index';
    $actionName = isset($_GET['action']) ? $_GET['action']:'index';
    loadPage($controllerName,$actionName);
//Урок 1.4.2 пройден