<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

if (!empty($arParams["~AUTH_RESULT"]))
{
	ShowMessage($arParams["~AUTH_RESULT"]);
}

if (!empty($arResult['ERROR_MESSAGE']))
{
	ShowMessage($arResult['ERROR_MESSAGE']);
}
?>

<!-- <div class="site-section">
	<div class="container"> -->
		<div class="col-md-12 col-lg-8 mb-5">
			<form name="form_auth" method="post" target="_top" action="<?=$arResult["AUTH_URL"]?>"  class="p-5 bg-white border">
				<label class="font-weight-bold"><?=GetMessage("AUTH_TITLE");?></label>
				<input type="hidden" name="AUTH_FORM" value="Y" />
				<input type="hidden" name="TYPE" value="AUTH" />
				<?if ($arResult["BACKURL"] <> ''):?>
					<input type="hidden" name="backurl" value="<?=$arResult["BACKURL"]?>" />
				<?endif?>
				<?foreach ($arResult["POST"] as $key => $value):?>
					<input type="hidden" name="<?=$key?>" value="<?=$value?>" />
				<?endforeach?>
				
				<div class="row form-group">
					<div class="col-md-12">	
						<label for="USER_LOGIN" class="font-weight-bold"><?=GetMessage("AUTH_LOGIN");?></label>
						<input
							type="text"
							name="USER_LOGIN"
							id="USER_LOGIN"
							class="form-control"
							maxlength="50" value="<?=$arResult["LAST_LOGIN"]?>"
						/>
					</div>
				</div>
				
				<div class="row form-group">
					<div class="col-md-12">
						<label class="font-weight-bold" for="USER_PASSWORD"><?=GetMessage("AUTH_PASSWORD") ?></label>
						<input
							type="password"
							name="USER_PASSWORD"
							id="USER_PASSWORD"
							class="form-control"
							maxlength="255"
							autocomplete="off"
						/>
					</div>
				</div>					
				<?if ($arResult["STORE_PASSWORD"] == "Y"):?>
					<div class="row form-group">
						<div class="col-md-12">
							<input type="checkbox" id="USER_REMEMBER" name="USER_REMEMBER" value="Y" />
							<label for="USER_REMEMBER"><?=GetMessage("AUTH_REMEMBER_ME")?></label>
						</div>
					</div>
				<?endif;?>

				<?if ($arResult["CAPTCHA_CODE"]):?>
					<div class="row form-group">
						<div class="col-md-12">
							<label><?=GetMessage("AUTH_CAPTCHA_PROMT")?></label>
							<input type="hidden" name="captcha_sid" value="<?echo $arResult["CAPTCHA_CODE"]?>" />
							<img src="/bitrix/tools/captcha.php?captcha_sid=<?echo $arResult["CAPTCHA_CODE"]?>" width="180" height="40" alt="CAPTCHA" />
							<input type="text" name="captcha_word" maxlength="50" value="" class="form-control mt-2" />
						</div>
					</div>
				<?endif;?>

				<div class="row form-group">
					<div class="col-md-12">
						<input type="submit" name="Login" value="<?=GetMessage("AUTH_AUTHORIZE")?>" class="btn btn-primary py-2 px-4 rounded-0">
					</div>
				</div>

				<?if ($arParams["NOT_SHOW_LINKS"] != "Y"):?>
					<div class="row form-group">
						<div class="col-md-12">
							<a href="<?=$arResult["AUTH_FORGOT_PASSWORD_URL"]?>" rel="nofollow"><?=GetMessage("AUTH_FORGOT_PASSWORD_2")?></a>
						</div>
					</div>
				<?endif?>

				<?if($arParams["NOT_SHOW_LINKS"] != "Y" && $arResult["NEW_USER_REGISTRATION"] == "Y"):?>
					<div class="row form-group">
						<div class="col-md-12">
							<a href="<?=$arResult["AUTH_REGISTER_URL"]?>" rel="nofollow"><?=GetMessage("AUTH_REGISTER")?></a><br>
							<?=GetMessage("AUTH_FIRST_ONE")?>
						</div>
					</div>
				<?endif;?>

				<?if($arResult["SECURE_AUTH"]):?>
					<span class="bx-auth-secure" id="bx_auth_secure" title="<?echo GetMessage("AUTH_SECURE_NOTE")?>" style="display:none">
						<div class="bx-auth-secure-icon"></div>
					</span>
					<noscript>
						<span class="bx-auth-secure" title="<?echo GetMessage("AUTH_NONSECURE_NOTE")?>">
							<div class="bx-auth-secure-icon bx-auth-secure-unlock"></div>
						</span>
					</noscript>
					<script>
					document.getElementById('bx_auth_secure').style.display = 'inline-block';
					</script>
				<?endif?>
			</form>
		</div>
	<!-- </div>
</div> -->
<script>
<?if ($arResult["LAST_LOGIN"] <> ''):?>
try{document.form_auth.USER_PASSWORD.focus();}catch(e){}
<?else:?>
try{document.form_auth.USER_LOGIN.focus();}catch(e){}
<?endif?>
</script>

