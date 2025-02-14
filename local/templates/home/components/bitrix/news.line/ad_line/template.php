<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<div class="site-section site-section-sm bg-light">
	<div class="container">
		<div class="row mb-5">
			<div class="col-12">
				<div class="site-section-title">
					<h2><?= GetMessage("TITLE_AD") ?></h2>
				</div>
			</div>
		</div>
		<div class="row mb-5">
			<?foreach($arResult["ITEMS"] as $arItem):?>
				<?
				$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
				$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
				?>
				<div class="col-md-6 col-lg-4 mb-4" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
					<a href="<?= $arItem['DETAIL_PAGE_URL'] ?>" class="prop-entry d-block"> 
						<figure> <img alt="Image" src="<?= $arItem['PREVIEW_PICTURE']['SRC'] ?>" class="img-fluid"> </figure>
						<div class="prop-text">
							<div class="inner">
								<span class="price rounded"><?= $arItem['PROPERTY_PRICE_VALUE'] ?> <?= GetMessage("RUB") ?></span>
								<h3 class="title"><?echo $arItem["NAME"]?></h3>
								<p class="location"><?= $arItem['PREVIEW_TEXT'] ?></p>
							</div>
							<div class="prop-more-info">
								<div class="inner d-flex">
									<div class="col">
										<span><?= GetMessage("AREA") ?></span> <strong><?= $arItem['PROPERTY_TOTAL_AREA_VALUE'] ?>m<sup>2</sup></strong>
									</div>
									<div class="col">
										<span><?= GetMessage("FLOOR") ?></span> <strong><?= $arItem['PROPERTY_COUNT_FLOOR_VALUE'] ?></strong>
									</div>
									<div class="col">
										<span><?= GetMessage("BATHS") ?></span> <strong><?= $arItem['PROPERTY_COUNT_BATHROOM_VALUE'] ?></strong>
									</div>
									<div class="col">
										<span><?= GetMessage("GARAGE") ?></span> <strong><?= $arItem['PROPERTY_GARAGE_VALUE'] ?></strong>
									</div>
								</div>
							</div>
						</div>
					</a>
				</div>
			<?endforeach;?>
		</div>
	</div>
</div>

			
