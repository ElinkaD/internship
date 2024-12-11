<?
if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die();?>

<div class="col-md-12 col-lg-8 mb-5">
	<?if(!empty($arResult["ERROR_MESSAGE"]))
	{
		foreach($arResult["ERROR_MESSAGE"] as $v)
			ShowError($v);
	}
	if($arResult["OK_MESSAGE"] <> '')
	{
		?><div class="alert alert-success"><?=$arResult["OK_MESSAGE"]?></div><?
	}
	?>
	<form action="<?=POST_FORM_ACTION_URI?>" method="POST" class="p-5 bg-white border">
		<?=bitrix_sessid_post()?>
		<div class="row form-group">
			<div class="col-md-12">	
				<label for="fullname" class="font-weight-bold"><?=GetMessage("MFT_NAME");?><?
					if(empty($arParams["REQUIRED_FIELDS"]) || in_array("NAME", $arParams["REQUIRED_FIELDS"])):?><?endif;?></label>
				<input
					type="text"
					name="user_name"
					id="fullname"
					class="form-control"
					placeholder="Full Name"
					value="<?=$arResult["AUTHOR_NAME"]?>"
					<?if(empty($arParams["REQUIRED_FIELDS"]) || in_array("NAME", $arParams["REQUIRED_FIELDS"])): ?>required<?endif?>
				/>
			</div>
		</div>

		<div class="row form-group">
			<div class="col-md-12">
				<label class="font-weight-bold" for="email"><?=GetMessage("MFT_EMAIL")?><?
					if(empty($arParams["REQUIRED_FIELDS"]) || in_array("EMAIL", $arParams["REQUIRED_FIELDS"])):?><?endif?></label>
				<input
					type="email"
					name="user_email"
					id="email"
					class="form-control"
					placeholder="Email Address"
					value="<?=$arResult["AUTHOR_EMAIL"]?>"
					<?if(empty($arParams["REQUIRED_FIELDS"]) || in_array("EMAIL", $arParams["REQUIRED_FIELDS"])):?>required<?endif?>
				/>
			</div>
		</div>

		<div class="row form-group">
			<div class="col-md-12">
				<label class="font-weight-bold" for="message"><?=GetMessage("MFT_MESSAGE")?><?
					if(empty($arParams["REQUIRED_FIELDS"]) || in_array("MESSAGE", $arParams["REQUIRED_FIELDS"])):?><?endif?></label>
				<textarea name="MESSAGE" id="message" cols="30" rows="5" class="form-control" placeholder="<?= GetMessage("MFT_SAY_HI")?>"><?=$arResult["MESSAGE"]?></textarea>
			</div>
		</div>

		<?if($arParams["USE_CAPTCHA"] == "Y"):?>
		<div class="form-row">
			<div class="form-group col-auto">
				<label class="font-weight-bold"><?=GetMessage("MFT_CAPTCHA_CODE")?><span class="mf-control-required">*</span></label><br/>
				<input type="text" if="mainFeedback_captcha" class="form-control" name="captcha_word" size="30" maxlength="50" value=""/><br/>
			</div>
			<div class="form-group col">
				<label for="mainFeedback_captcha"><?=GetMessage("MFT_CAPTCHA")?></label> <div style="clear:both"></div>
				<input type="hidden" name="captcha_sid" value="<?=$arResult["capCode"]?>">
				<img src="/bitrix/tools/captcha.php?captcha_sid=<?=$arResult["capCode"]?>" width="180" height="38" alt="CAPTCHA">
			</div>
		</div>
		<?endif;?>

		<input type="hidden" name="PARAMS_HASH" value="<?=$arResult["PARAMS_HASH"]?>"> 
		<div class="row form-group">
			<div class="col-md-12">
				<input type="submit" name="submit" value="<?=GetMessage("MFT_SUBMIT");?>" class="btn btn-primary py-2 px-4 rounded-0"><br>
				<br>
				<br>
			</div>
		</div>
	</form>
</div>