<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<div class="item-wrap">
	<div class="rew-footer-carousel">
<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
	<div class="item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
		<div class="side-block side-opin">
			<div class="inner-block">
				<div class="title">
					<div class="photo-block">
						<?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arItem["PREVIEW_PICTURE"])):?>
							<?$file = CFile::ResizeImageGet($arItem['PREVIEW_PICTURE'], array('width'=>39, 'height'=>39), BX_RESIZE_IMAGE_PROPORTIONAL, false);?>                
							<img src="<?=$file['src']?>">
						<?else:?>
							<img src="/t2/upload/no_photo_left_block.jpg">
						<?endif;?>
					</div>
					<div class="name-block">
						<?if($arParams["DISPLAY_NAME"]!="N" && $arItem["NAME"]):?>
							<a href="<?echo SITE_DIR . 'rew/'. $arItem["DETAIL_PAGE_URL"]?>"><?echo $arItem["NAME"]?></a>
						<?endif;?>
					</div>
					<div class="pos-block">
						<?if(!empty($arItem["DISPLAY_PROPERTIES"]['POSITION']["DISPLAY_VALUE"]) && !empty($arItem["DISPLAY_PROPERTIES"]['COMPANY']["DISPLAY_VALUE"])):?>
							<?echo $arItem["DISPLAY_PROPERTIES"]['POSITION']["DISPLAY_VALUE"] . ' ' . $arItem["DISPLAY_PROPERTIES"]['COMPANY']["DISPLAY_VALUE"]?>
						<?endif?>
					</div>
				</div>
				<div class="text-block">
					<?if (!empty($arItem["PREVIEW_TEXT"])) {
						echo mb_substr(strip_tags($arItem["PREVIEW_TEXT"]), 0, 150) . '...';
					} else {
						echo '<span>' . GetMessage("NO_PREVIEW_TEXT") . '</span>';
					}
					?>
				</div>
			</div>
		</div>
	</div>
<?endforeach;?>
	</div>
</div>
