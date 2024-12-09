<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("tags", "feedback");
$APPLICATION->SetPageProperty("description", "Страница для отправки сообщений и запросов от пользователей. Также отображается в левом меню раздела \"Контакты\".");
$APPLICATION->SetTitle("Обратная связь");
?>

<div class="site-section">
	<div class="container">
		<div class="row">
			<?$APPLICATION->IncludeComponent("bitrix:main.feedback", "feedback", Array(
				"EMAIL_TO" => "admin@admin.ru",	// E-mail, на который будет отправлено письмо
				"EVENT_MESSAGE_ID" => "",	// Почтовые шаблоны для отправки письма
				"OK_TEXT" => "Спасибо, ваше сообщение принято.",	// Сообщение, выводимое пользователю после отправки
				"REQUIRED_FIELDS" => array(	// Обязательные поля для заполнения
					0 => "NAME",
					1 => "EMAIL",
					2 => "MESSAGE",
				),
				"USE_CAPTCHA" => "Y",	// Использовать защиту от автоматических сообщений (CAPTCHA) для неавторизованных пользователей
				"COMPONENT_TEMPLATE" => "bootstrap_v4"
				),
				false
			);?>
			
			<?$APPLICATION->IncludeComponent(
				"bitrix:main.include", 
				".default", 
				array(
					"COMPONENT_TEMPLATE" => ".default",
					"AREA_FILE_SHOW" => "file",
					"PATH" => "/include/contact_info.php",
					"EDIT_TEMPLATE" => ""
				),
				false
			);?>
		</div>
	</div>
</div>
<br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>