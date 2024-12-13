<?
use Bitrix\Main\EventManager;
use Bitrix\Highloadblock\HighloadBlockTable;
use Bitrix\Main\Application;
// скрипт в файле /local/php_interface/init.php
require_once $_SERVER['DOCUMENT_ROOT'] . "/local/php_interface/include/AfterUserAdd.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/local/php_interface/include/HighloadBlockCacheHandler.php";

AddEventHandler(
    "main",  // Модуль, который инициирует событие
    "OnAfterUserAdd",  // Идентификатор события
    Array("MyAfterUserAdd", "OnAfterUserAddHandler"),  // Обработчик события
);

// Убедитесь, что модуль highloadblock подключен
if (CModule::IncludeModule("highloadblock")) {
    // Регистрируем обработчики для событий Highload-блоков

    // Обработчик для добавления элемента
    AddEventHandler(
        "highloadblock",  
        "OnAfterAdd",      
        Array("HighloadBlockCacheHandler", "onAfterAdd") 
    );

    // Обработчик для обновления элемента
    AddEventHandler(
        "highloadblock",  
        "OnAfterUpdate",   
        Array("HighloadBlockCacheHandler", "onAfterUpdate") 
    );

    // Обработчик для удаления элемента
    AddEventHandler(
        "highloadblock",  
        "OnAfterDelete",   
        Array("HighloadBlockCacheHandler", "onAfterDelete") 
    );
}
?>