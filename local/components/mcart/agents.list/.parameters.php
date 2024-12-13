<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}

/*
 * Нужно создать пареметры, можно посмотреть как это сделано в компоненте news.list
 * 1. Названия таблицы (TABLE_NAME) Highload-блока 
 * 2. Количество элементов, для постраничной пагинации 
 * 3. Кеширования (CACHE_TIME), посмотрите, как это реализовано в news.list
 */

$arComponentParameters = array(
    "GROUPS" => array(),
    "PARAMETERS" => array(
        // пример параметр Название таблицы
        "HLBLOCK_TNAME"  =>  Array( // Код поля
            "PARENT" => "BASE", //
            "NAME" => GetMessage("MCART_AGENTS_LIST_HLBLOCK_TNAME"), // Название параметра, берется из языкового файла
            "TYPE" => "STRING", // Тип поля
            "DEFAULT" => "", // Значение по дефолту
        ),
    ),
    "PAGE_SIZE" => array(
        "PARENT" => "BASE",
        "NAME" => GetMessage("MCART_AGENTS_LIST_PAGE_SIZE"),
        "TYPE" => "INTEGER",
        "DEFAULT" => "5",
    ),
    "CACHE_TIME" => array(
        "PARENT" => "CACHE_SETTINGS",
        "NAME" => GetMessage("MCART_AGENTS_LIST_CACHE_TIME"),
        "TYPE" => "INTEGER",
        "DEFAULT" => "3600",
    ),
);
?>