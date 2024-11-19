<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("tags", "feedback");
$APPLICATION->SetPageProperty("description", "Страница для отправки сообщений и запросов от пользователей. Также отображается в левом меню раздела \"Контакты\".");
$APPLICATION->SetTitle("Обратная связь");
?>Если у вас есть вопросы или предложения, пожалуйста, заполните форму обратной связи. Мы обязательно рассмотрим ваш запрос и свяжемся с вами в ближайшее время.<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>