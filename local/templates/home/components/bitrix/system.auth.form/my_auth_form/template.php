<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

CJSCore::Init();
?>

<div class="col-md-12 col-lg-8 mb-5">
	<?
	if ($arResult['SHOW_ERRORS'] === 'Y' && $arResult['ERROR'] && !empty($arResult['ERROR_MESSAGE']))
	{
		ShowMessage($arResult['ERROR_MESSAGE']);
	}
	?>

	<?if($arResult["FORM_TYPE"] == "login"):?>

	<form name="system_auth_form<?=$arResult["RND"]?>" method="post" target="_top" action="<?=$arResult["AUTH_URL"]?>" class="p-5 bg-white border">
		<?if($arResult["BACKURL"] <> ''):?>
			<input type="hidden" name="backurl" value="<?=$arResult["BACKURL"]?>" />
		<?endif?>
		<?foreach ($arResult["POST"] as $key => $value):?>
			<input type="hidden" name="<?=$key?>" value="<?=$value?>" />
		<?endforeach?>
		<input type="hidden" name="AUTH_FORM" value="Y" />
		<input type="hidden" name="TYPE" value="AUTH" />

		<div class="row form-group">
			<div class="col-md-12">	
				<label for="USER_LOGIN" class="font-weight-bold"><?=GetMessage("AUTH_LOGIN");?></label>
				<input
					type="text"
					name="USER_LOGIN"
					id="USER_LOGIN"
					class="form-control"
					maxlength="50" value=""
				/>
				<script>
				BX.ready(function() {
					var loginCookie = BX.getCookie("<?=CUtil::JSEscape($arResult["~LOGIN_COOKIE_NAME"])?>");
					if (loginCookie)
					{
						var form = document.forms["system_auth_form<?=$arResult["RND"]?>"];
						var loginInput = form.elements["USER_LOGIN"];
						loginInput.value = loginCookie;
					}
				});
			</script>
			</div>
		</div>

		<div class="row form-group">
			<div class="col-md-12">
				<label class="font-weight-bold" for="USER_PASSWORD"><?=GetMessage("AUTH_PASSWORD")?></label>
				<input
					type="password"
					name="USER_PASSWORD"
					id="USER_PASSWORD"
					class="form-control"
					maxlength="255"
					autocomplete="off"
				/>					
				<?if ($arResult["STORE_PASSWORD"] == "Y"):?>
					<div class="row form-group">
						<div class="col-md-12">
							<input type="checkbox" id="USER_REMEMBER" name="USER_REMEMBER" value="Y" />
							<label for="USER_REMEMBER"><?=GetMessage("AUTH_REMEMBER_SHORT")?></label>
						</div>
					</div>
				<?endif;?>
				<?if ($arResult["CAPTCHA_CODE"]):?>
					<div class="row form-group">
						<div class="col-md-12">
							<label><?=GetMessage("AUTH_CAPTCHA_PROMT")?></label>
							<input type="hidden" name="captcha_sid" value="<?=$arResult["CAPTCHA_CODE"]?>" />
							<img src="/bitrix/tools/captcha.php?captcha_sid=<?=$arResult["CAPTCHA_CODE"]?>" width="180" height="40" alt="CAPTCHA" />
							<input type="text" name="captcha_word" maxlength="50" value="" class="form-control mt-2" />
						</div>
					</div>
				<?endif;?>

				<div class="row form-group">
					<div class="col-md-12">
						<input type="submit" name="Login" value="<?=GetMessage("AUTH_LOGIN_BUTTON")?>" class="btn btn-primary py-2 px-4 rounded-0">
					</div>
				</div>

				<?if($arResult["NEW_USER_REGISTRATION"] == "Y"):?>
					<div class="row form-group">
						<div class="col-md-12">
							<a href="<?=$arResult["AUTH_REGISTER_URL"]?>"><?=GetMessage("AUTH_REGISTER")?></a>
						</div>
					</div>
				<?endif;?>

				<div class="row form-group">
					<div class="col-md-12">
						<a href="<?=$arResult["AUTH_FORGOT_PASSWORD_URL"]?>"><?=GetMessage("AUTH_FORGOT_PASSWORD_2")?></a>
					</div>
				</div>
			</div>
        </div>
    </form>

 <?else:?>
        <div class="p-5 bg-white border">
            <p><?=GetMessage("AUTH_USER")?><?=$arResult["USER_NAME"]?> [<?=$arResult["USER_LOGIN"]?>]</p>
            <!-- <a href="<?=$arResult["PROFILE_URL"]?>"><?=GetMessage("AUTH_PROFILE")?></a> -->
            <form action="<?= $APPLICATION->GetCurPageParam("logout=yes", array(
							"login",
							"logout",
							"register",
							"forgot_password",
							"change_password"
						)) ?>">
                <input type="hidden" name="logout" value="yes" />
                <input type="submit" name="logout_butt" value="<?=GetMessage("AUTH_LOGOUT_BUTTON")?>" class="btn btn-primary py-2 px-4 rounded-0">
            </form>
        </div>
    <?endif;?>
</div>