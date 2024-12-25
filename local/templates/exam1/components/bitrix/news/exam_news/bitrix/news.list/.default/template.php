<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

  <?foreach($arResult["ITEMS"] as $arItem):?>
    <?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
	<div class="review-block" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
		<div class="review-text">
			<div class="review-block-title">
				<span class="review-block-name">
				<?if($arParams["DISPLAY_NAME"]!="N" && $arItem["NAME"]):?>
					<?if(!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])):?>
					<a href="<?echo $arItem["DETAIL_PAGE_URL"]?>"><?echo $arItem["NAME"]?></a>
					<?else:?>
					<b><?echo $arItem["NAME"]?></b><br />
					<?endif;?>
				<?endif;?>
				</span>
				<span class="review-block-description">
				<?if($arParams["DISPLAY_DATE"]!="N" && $arItem["DISPLAY_ACTIVE_FROM"] && !empty($arItem["DISPLAY_PROPERTIES"]["POSITION"]["DISPLAY_VALUE"]) && !empty($arItem["DISPLAY_PROPERTIES"]["COMPANY"]["DISPLAY_VALUE"])):?>
					<span class="news-date-time"><?echo $arItem["DISPLAY_ACTIVE_FROM"] . "г., " . $arItem["DISPLAY_PROPERTIES"]["POSITION"]["DISPLAY_VALUE"] . ", " . $arItem["DISPLAY_PROPERTIES"]["COMPANY"]["DISPLAY_VALUE"]?></span>
				<?endif;?>
				</span>
			</div>
			<div class="review-text-cont">
				<?if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && $arItem["PREVIEW_TEXT"]):?>
					<?echo $arItem["PREVIEW_TEXT"];?>
				<?endif;?> 
			</div>
		</div>

		<?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arItem["PREVIEW_PICTURE"])):?>
			<div class="review-img-wrap"><a href="<?=$arItem["DETAIL_PAGE_URL"]?>"><img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="img"></a></div>
		<?else:?>
			<div class="review-img-wrap"><a href="<?=$arItem["DETAIL_PAGE_URL"]?>"><img src="/t1/upload/no_photo.jpg" alt="img"></a></div>
		<?endif;?>
	</div>

<?endforeach;?>

<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
	<br /><?=$arResult["NAV_STRING"]?>
<?endif;?>


