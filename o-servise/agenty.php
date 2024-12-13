<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("tags", "agents");
$APPLICATION->SetPageProperty("description", "Страница, на которой представлены специалисты компании, их контактные данные и области работы.");
$APPLICATION->SetTitle("Агенты");
?><?$APPLICATION->IncludeComponent(
	"mcart:agents.list",
	"",
	Array(
		"CACHE_TIME" => 3600,
		"HLBLOCK_TNAME" => "b_hlsys_real_estate_agents",
		"PAGE_SIZE" => 5
	)
);?><br>
<br>
<img src="/local/components/mcart/agents.list/templates/.default/images/no-avatar.png" alt="">
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>