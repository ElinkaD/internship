<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Актуальный опрос");
?><?$APPLICATION->IncludeComponent(
	"bitrix:voting.current", 
	".default", 
	array(
		"COMPONENT_TEMPLATE" => ".default",
		"CHANNEL_SID" => "FIRST_ASK",
		"VOTE_ID" => "1",
		"VOTE_ALL_RESULTS" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "3600"
	),
	false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>