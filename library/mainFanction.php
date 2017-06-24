<?php
    /*
     * Основные функции
     */
    /*Формирование запрашиваемой страницы
     * 
     * @param string $controllerName название контроллера
     * @param string $actionName название функции обработки страницы
     */
    function loadPage($controllerName,$actionName = 'index'){
        //Подключаем контроллер
        include_once PathPrefix.$controllerName.PathPostfix;
        //Формируем название функции
        $function = $actionName . 'Action';
        $function();
    }