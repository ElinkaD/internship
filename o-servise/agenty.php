<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("tags", "agents");
$APPLICATION->SetPageProperty("description", "Страница, на которой представлены специалисты компании, их контактные данные и области работы.");
$APPLICATION->SetTitle("Агенты");
?><?$APPLICATION->IncludeComponent(
	"mcart:agents.list",
	".default",
	Array(
		"CACHE_TIME" => 10,
		"HLBLOCK_TNAME" => "b_hlsys_real_estate_agents",
		"PAGE_SIZE" => 3,
	)
);?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>