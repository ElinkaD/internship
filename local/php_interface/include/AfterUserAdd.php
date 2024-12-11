<?
// файл local/php_interface/include/AfterUserAdd.php
class MyAfterUserAdd
{
    public static function OnAfterUserAddHandler(&$arFields)
    {
		if($arFields["ID"] > 0) { 
			if(strlen($arFields["UF_USER_TYPE_2"]) === '0')  
			{ 
				$arGroups = CUser::GetUserGroup($arFields["ID"]); 
				$arGroups[] = 8;  
				CUser::SetUserGroup($arFields["ID"], $arGroups); 
			} 
			else 
			{ 
				$arGroups = CUser::GetUserGroup($arFields["ID"]); 
				$arGroups[] = 7;
				CUser::SetUserGroup($arFields["ID"], $arGroups); 
			} 
		} 
    }
}
?>