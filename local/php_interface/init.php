<?
// скрипт в файле /local/php_interface/init.php
require_once $_SERVER['DOCUMENT_ROOT'] . "/local/php_interface/include/AfterUserAdd.php";

AddEventHandler(
    "main",  // Модуль, который инициирует событие
    "OnAfterUserAdd",  // Идентификатор события
    Array("MyAfterUserAdd", "OnAfterUserAddHandler"),  // Обработчик события
);
?>