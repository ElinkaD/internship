<?php
use Bitrix\Highloadblock\HighloadBlockTable;
use Bitrix\Main\Application;

class HighloadBlockCacheHandler
{
    // Обработчик после добавления элемента
    public static function onAfterAdd($arFields){
        self::clearCache($arFields['HLBLOCK']);
    }

    public static function onAfterUpdate($arFields){
        self::clearCache($arFields['HLBLOCK']);
    }

    public static function onAfterDelete($arFields){
        self::clearCache($arFields['HLBLOCK']);
    }

    // Функция для сброса кеша
    private static function clearCache($hlblockId)
    {
        $hlblock = HighloadBlockTable::getById($hlblockId)->fetch();

        if ($hlblock && !empty($hlblock['TABLE_NAME'])) {
            $tableName = $hlblock['TABLE_NAME'];
            $taggedCache = Application::getInstance()->getTaggedCache();
            $taggedCache->clearByTag('hlblock_table_name_' . $tableName); // Очистка кеша по тегу
        }
    }
}
?>
