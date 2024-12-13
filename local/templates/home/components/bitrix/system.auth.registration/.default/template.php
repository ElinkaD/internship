<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?
if (!empty($arParams["~AUTH_RESULT"])) {
    ShowMessage($arParams["~AUTH_RESULT"]);
}
?>

<?if ($arResult["SHOW_EMAIL_SENT_CONFIRMATION"]):?>
    <p><?=GetMessage("AUTH_EMAIL_SENT")?></p>
<?endif;?>

<?if (!$arResult["SHOW_EMAIL_SENT_CONFIRMATION"] && $arResult["USE_EMAIL_CONFIRMATION"] === "Y"):?>
    <p><?=GetMessage("AUTH_EMAIL_WILL_BE_SENT")?></p>
<?endif?>

<?if (!$arResult["SHOW_EMAIL_SENT_CONFIRMATION"]):?>
<div class="site-section">
	<div class="container" style="display: flex; justify-content: center;">
		<div class="col-md-12 col-lg-8 mb-5">
		<form method="post" action="<?=$arResult["AUTH_URL"]?>" name="bform" enctype="multipart/form-data" class="p-5 bg-white border">
			<input type="hidden" name="AUTH_FORM" value="Y" />
			<input type="hidden" name="TYPE" value="REGISTRATION" />

			<label class="font-weight-bold"><?=GetMessage("AUTH_REGISTER")?></label>

			<div class="row form-group">
				<div class="col-md-12">	
					<label for="USER_NAME" class="font-weight-bold"><?=GetMessage("AUTH_NAME");?></label>
					<input
						type="text"
						name="USER_NAME"
						id="USER_NAME"
						class="form-control"
						maxlength="50" value="<?=$arResult["USER_NAME"]?>"
					/>
				</div>
			</div>
			<div class="row form-group">
				<div class="col-md-12">	
					<label for="USER_LAST_NAME" class="font-weight-bold"><?=GetMessage("AUTH_LAST_NAME");?></label>
					<input
						type="text"
						name="USER_LAST_NAME"
						id="USER_LAST_NAME"
						class="form-control"
						maxlength="50" value="<?=$arResult["USER_LAST_NAME"]?>"
					/>
				</div>
			</div>
			<div class="row form-group">
				<div class="col-md-12">	
					<label for="USER_LOGIN" class="font-weight-bold"><span class="starrequired">*</span><?=GetMessage("AUTH_LOGIN_MIN");?></label>
					<input
						type="text"
						name="USER_LOGIN"
						id="USER_LOGIN"
						class="form-control"
						maxlength="50" value="<?=$arResult["USER_LOGIN"]?>"
					/>
				</div>
			</div>
			<div class="row form-group">
				<div class="col-md-12">	
					<label for="USER_PASSWORD" class="font-weight-bold"><span class="starrequired">*</span><?=GetMessage("AUTH_PASSWORD_REQ");?></label>
					<input
						type="password"
						name="USER_PASSWORD"
						id="USER_PASSWORD"
						class="form-control"
						autocomplete="off"
						maxlength="50" value="<?=$arResult["USER_PASSWORD"]?>"
					/>
				</div>
			</div>

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

			<div class="row form-group">
				<div class="col-md-12">	
					<label for="USER_CONFIRM_PASSWORD" class="font-weight-bold"><span class="starrequired">*</span><?=GetMessage("AUTH_CONFIRM");?></label>
					<input
						type="password"
						name="USER_CONFIRM_PASSWORD"
						id="USER_CONFIRM_PASSWORD"
						class="form-control"
						autocomplete="off"
						maxlength="50" value="<?=$arResult["USER_CONFIRM_PASSWORD"]?>"
					/>
				</div>
			</div>

			<?if($arResult["EMAIL_REGISTRATION"]):?>
				<div class="row form-group">
					<div class="col-md-12">	
						<?if($arResult["EMAIL_REQUIRED"]):?><label for="USER_EMAIL" class="font-weight-bold"><span class="starrequired">*</span><?endif?><?=GetMessage("AUTH_EMAIL");?></label>
						<input
							type="email"
							name="USER_EMAIL"
							id="USER_EMAIL"
							class="form-control"
							autocomplete="off"
							maxlength="255" value="<?=$arResult["USER_EMAIL"]?>"
						/>
					</div>
				</div>
			<?endif?>
			
			<div class="row form-group">
				<div class="col-md-12">
					<label class="font-weight-bold"><?=GetMessage("AUTH_USER_TYPE")?></label>
					<div>
						<input type="radio" id="USER_TYPE_BUYER" name="UF_USER_TYPE_2" value="1" 
						<?=($_POST['UF_USER_TYPE_2'] === '1' || empty($_POST['UF_USER_TYPE_2'])) ? 'checked' : ''?>>
						<label for="USER_TYPE_BUYER"><?=GetMessage("AUTH_BUYER")?></label>
					</div>
					<div>
						<input type="radio" id="USER_TYPE_SELLER" name="UF_USER_TYPE_2" value="0" 
						<?=($_POST['UF_USER_TYPE_2'] === '0') ? 'checked' : ''?>>
						<label for="USER_TYPE_SELLER"><?=GetMessage("AUTH_SELLER")?></label>
					</div>
				</div>
			</div>

			<?if ($arResult["USE_CAPTCHA"] == "Y"):?>
				<div class="row form-group">
					<div class="col-md-12">
						<label class="font-weight-bold"><?=GetMessage("CAPTCHA_REGF_TITLE");?></label>
					</div>
					<div class="col-md-12">
						<input type="hidden" name="captcha_sid" value="<?=$arResult["CAPTCHA_CODE"]?>" />
						<img src="/bitrix/tools/captcha.php?captcha_sid=<?=$arResult["CAPTCHA_CODE"]?>" width="180" height="40" alt="CAPTCHA" />
						<label><?=GetMessage("CAPTCHA_REGF_PROMT")?></label>
						<input type="text" name="captcha_word" maxlength="50" class="form-control mt-2" />
					</div>
				</div>
			<?endif?>

			<div class="form-group">
				<input type="submit" name="Register" value="<?=GetMessage("AUTH_REGISTER")?>" class="btn btn-primary py-2 px-4 rounded-0">
			</div>

			<p><?echo $arResult["GROUP_POLICY"]["PASSWORD_REQUIREMENTS"];?>
			<p><span class="starrequired">*</span><?=GetMessage("AUTH_REQ")?></p>
			<p><a href="<?=$arResult["AUTH_AUTH_URL"]?>" rel="nofollow"><b><?=GetMessage("AUTH_AUTH")?></b></a></p>
		</form>


		<script>
		document.bform.USER_NAME.focus();
		</script>

		</div>
	</div>
</div>
<?endif?>
