<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?><?

if (!empty($arParams["~AUTH_RESULT"]))
{
	ShowMessage($arParams["~AUTH_RESULT"]);
}

?>
<div class="col-md-12 col-lg-8 mb-5">
	<form name="bform" method="post" target="_top" action="<?=$arResult["AUTH_URL"]?>" class="p-5 bg-white border">
	<?
	if ($arResult["BACKURL"] <> '')
	{
	?>
		<input type="hidden" name="backurl" value="<?=$arResult["BACKURL"]?>" />
	<?
	}
	?>
		<input type="hidden" name="AUTH_FORM" value="Y">
		<input type="hidden" name="TYPE" value="SEND_PWD">

		<p><?echo GetMessage("sys_forgot_pass_label")?></p>

		<div class="row form-group">
			<div class="col-md-12">	
				<label class="font-weight-bold"><?=GetMessage("sys_forgot_pass_login1");?></label>
				<input
					type="text"
					name="USER_LOGIN"
					id="USER_LOGIN"
					class="form-control"
					maxlength="50" value="<?=$arResult["USER_LOGIN"]?>"
				/>
				<input type="hidden" name="USER_EMAIL" />
				<div><?echo GetMessage("sys_forgot_pass_note_email")?></div>
			</div>
		</div>

	<?if($arResult["USE_CAPTCHA"]):?>
		<div class="row form-group">
			<div class="col-md-12">
				<input type="hidden" name="captcha_sid" value="<?echo $arResult["CAPTCHA_CODE"]?>" />
				<img src="/bitrix/tools/captcha.php?captcha_sid=<?echo $arResult["CAPTCHA_CODE"]?>" width="180" height="40" alt="CAPTCHA" />
			</div>
			<div class="col-md-12">
				<div class="font-weight-bold"><?=GetMessage("system_auth_captcha")?></div>
				<input type="text" name="captcha_word" maxlength="50" value="" class="form-control mt-2" />
			</div>		
		</div>
	<?endif?>

		<div class="row form-group">
			<div class="col-md-12">
				<input type="submit" name="send_account_info" value="<?=GetMessage("AUTH_SEND")?>" class="btn btn-primary py-2 px-4 rounded-0">
			</div>
		</div>

		<div class="row form-group">
			<div class="col-md-12">
				<a href="<?=$arResult["AUTH_AUTH_URL"]?>"><?=GetMessage("AUTH_AUTH")?></a>
			</div>
		</div>
	</form>
</div>

<script>
document.bform.onsubmit = function(){document.bform.USER_EMAIL.value = document.bform.USER_LOGIN.value;};
document.bform.USER_LOGIN.focus();
</script>
