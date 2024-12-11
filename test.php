<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Тестовая");
?><div class="site-section">
	<div class="container">
		 <?$APPLICATION->IncludeComponent(
	"bitrix:system.auth.form",
	"my_auth_form",
	Array(
		"FORGOT_PASSWORD_URL" => "",
		"PROFILE_URL" => "",
		"REGISTER_URL" => "",
		"SHOW_CAPTCHA" => "Y",
		"SHOW_ERRORS" => "N"
	)
);?>
	</div>
</div>
><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>