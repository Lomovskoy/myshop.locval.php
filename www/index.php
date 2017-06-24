<?php
    //Определение контроллера для работы
    $controllerName = isset($_GET['controller']) ? ucfirst($_GET['controller']):'Index';
    $actionName = isset($_GET['action']) ? $_GET['action']:'index';
    echo 'Подключаемый php файл (Контроллер) = ' . $controllerName . '<br/>';
    echo 'Функция формирующая страницу (Экшн) = ' . $actionName . '<br/>';
    //Подключаем контроллер
    include_once '../controllers/'.$controllerName.'Controller.php';
    //Формируем название функции
    $function = $actionName . 'Action';
    echo 'Полсное название вызываемой функции = '.$function;
?>

