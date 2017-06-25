<?php
    /*
     * Файл настроек
     */

    //>Константы для обращения к контроллерам
    define('PathPrefix','../controllers/');
    define('PathPostfix','Controller.php');
    //<
    
    //>Используемый шаблон
    $template = 'default';
    
    //Пути к файлам шаблонов (*.tpl)
    define('TemplatePrefix', "../vievs/{$template}/");
    define('TemplatePostfix', '.tpl');
    
    //Пути к файлам шаблонов в веб пространстве
    define('TemplateWebPath', "../templates/{$template}/");
    //<
    
    //>Инициализируем шаблом Smarty
    //put full path to Smatry.class.php
    require ('../library/Smarty/libs/Smarty.class.php');
    $smarty = new Smarty();
    
    $smarty->setTemplateDir(TemplatePrefix);
    $smarty->setCompileDir('../tmp/smarty/templates_c');
    $smarty->setCacheDir('../tmp/smarty/cache');
    $smarty->setConfigDir('../lubrary/Smarty/configs');
    
    $smarty->assign('templateWebPath',TemplateWebPath);
    //<