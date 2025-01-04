<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

foreach($arResult["ITEMS"] as $arItem):

	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	
	$IMG = SITE_TEMPLATE_PATH . "/img/no_photo.jpg";
	
	if(isset($arItem["PREVIEW_PICTURE"]["SRC"])):
		$arFile = CFile::ResizeImageGet($arItem['PREVIEW_PICTURE'], array('width' => 68, 'height' => 50), BX_RESIZE_IMAGE_EXACT, true);
		$IMG = $arFile["src"];
	endif;
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

		<div class="review-img-wrap">
			<a href="<?=$arItem["DETAIL_PAGE_URL"]?>">
				<img src="<?=$IMG?>" alt="img">
			</a>
		</div>
	</div>

<?endforeach;?>

<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
	<br /><?=$arResult["NAV_STRING"]?>
<?endif;?>


