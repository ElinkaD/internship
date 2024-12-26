<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?php
$APPLICATION->SetTitle("Отзыв – " . $arResult["NAME"] . " – " . $arResult["DISPLAY_PROPERTIES"]["COMPANY"]["DISPLAY_VALUE"]);
?>

<hr>
<div class="review-block">
	<div class="review-text">
		<?if($arResult["DETAIL_TEXT"] <> ''):?>
			<div class="review-text-cont">
				<?= $arResult["DETAIL_TEXT"];?>
			</div>
		<?endif?>

		<?if($arParams["DISPLAY_NAME"]!="N" && $arResult["NAME"] && $arParams["DISPLAY_DATE"]!="N" && $arResult["DISPLAY_ACTIVE_FROM"] && !empty($arResult["DISPLAY_PROPERTIES"]["POSITION"]["DISPLAY_VALUE"]) && !empty($arResult["DISPLAY_PROPERTIES"]["COMPANY"]["DISPLAY_VALUE"])):?>
			<div class="review-autor">
				<?echo $arResult["NAME"] . ", " . $arResult["DISPLAY_ACTIVE_FROM"] . "г., " . $arResult["DISPLAY_PROPERTIES"]["POSITION"]["DISPLAY_VALUE"] . ", " . $arResult["DISPLAY_PROPERTIES"]["COMPANY"]["DISPLAY_VALUE"];?>
			</div>
		<?endif;?>
	</div>
		<?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arResult["DETAIL_PICTURE"])):?>
			<div style="clear: both;" class="review-img-wrap"><img src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>" alt="img"></div>
		<?else:?>
			<div style="clear: both;" class="review-img-wrap"><img src="/t2/upload/no_photo.jpg" alt="img"></div>
		<?endif?>
</div>
<div class="exam-review-doc">
<p>Документы:</p>
<?if(!empty($arResult["DISPLAY_PROPERTIES"]["DOCUMENTS"]["FILE_VALUE"])):?>
	<?foreach ($arResult["DISPLAY_PROPERTIES"]["DOCUMENTS"]["FILE_VALUE"] as $fileId):
		$file = CFile::GetFileArray($fileId);
		if ($file && $file["CONTENT_TYPE"] == "application/pdf"): ?>
		<div class="exam-review-item-doc">
			<img class="rew-doc-ico" src="<?= SITE_TEMPLATE_PATH?>/img/icons/pdf_ico_40.png">
			<a href="<?=$file["SRC"]?>" download><?=$file["ORIGINAL_NAME"]?></a>
		</div>
	<?
		endif;
	endforeach;
endif;
?>
</div>
<hr>
