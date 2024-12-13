<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

/*
 *  Задать имя компонента и Описание
 *  Разместить его в своем разделе в Визуальном редакторе
 */

 $arComponentDescription = array(
    "NAME" => GetMessage("T_MYCOMPONENT_DESC_LIST"), 
    "DESCRIPTION" => GetMessage("T_MYCOMPONENT_DESC_LIST_DESC"), 
    "SORT" => 20, 
    "CACHE_PATH" => "Y", 
    "PATH" => array(
        "ID" => "my komponent",
        "NAME" => GetMessage("T_MYCOMPONENT_DESC_MY_COMPONENTS"), 
    ),
);

?>