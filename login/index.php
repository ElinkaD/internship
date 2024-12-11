<?define("NEED_AUTH", true);?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

if (is_string($_REQUEST["backurl"]) && mb_strpos($_REQUEST["backurl"], "/") === 0)
{
	LocalRedirect($_REQUEST["backurl"]);
}

$APPLICATION->SetTitle("Войти на сайт");?>

<div class="site-section">
	<div class="container">
		<p>
				Вы зарегистрированы и успешно авторизовались.
		</p>
		<p>
			<a href="<?=SITE_DIR?>">Вернуться на главную страницу</a>
		</p>

		<form action="<?= $APPLICATION->GetCurPageParam("logout=yes", array(
						"login",
						"logout",
						"register",
						"forgot_password",
						"change_password"
					)) ?>">
			<input type="hidden" name="logout" value="yes" />
			<input type="submit" name="logout_butt" value="Выйти из профиля" class="btn btn-primary py-2 px-4 rounded-0">
		</form>
	</div>
</div>

 <?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>