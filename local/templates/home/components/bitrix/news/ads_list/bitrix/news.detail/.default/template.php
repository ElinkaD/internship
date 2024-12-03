<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arResult["DETAIL_PICTURE"])):?>
	<div class="site-blocks-cover overlay" style="background-image: url(<?= $arResult['DETAIL_PICTURE']['SRC'] ?>);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">
          <div class="col-md-10">
            <span class="d-inline-block text-white px-3 mb-3 property-offer-type rounded"><?= GetMessage("PROPERTY")?></span>
            	<?if($arParams["DISPLAY_NAME"]!="N" && $arResult["NAME"]):?>
                <h1 class="mb-2"><?echo $arResult['NAME']?></h1>              
              <?endif;?>
              <?if($arResult['DISPLAY_PROPERTIES']['PRICE']['DISPLAY_VALUE'] ):?>
                <p class="mb-5"><strong class="h2 text-success font-weight-bold">
                <?= $arResult['DISPLAY_PROPERTIES']['PRICE']['DISPLAY_VALUE'] ?> <?= GetMessage("VALUTA") ?>
                </strong></p>
              <?endif;?>
          </div>
        </div>
      </div>
    </div>
<?endif?>

<div class="site-section site-section-sm">
  <div class="container">
    <div class="row">
      <div class="col-lg-8" style="margin-top: -150px;">
        <div class="mb-5">
          <div class="slide-one-item home-slider owl-carousel">
            <?if (!empty($arResult['DISPLAY_PROPERTIES']['IMAGE_GALLERY']['FILE_VALUE'])):?>
              <? 
              $images = is_array($arResult['DISPLAY_PROPERTIES']['IMAGE_GALLERY']['FILE_VALUE']) 
                        ? $arResult['DISPLAY_PROPERTIES']['IMAGE_GALLERY']['FILE_VALUE'] 
                        : [$arResult['DISPLAY_PROPERTIES']['IMAGE_GALLERY']['FILE_VALUE']];
              ?>
              <?foreach ($images as $file):?>
                  <div>
                    <img src="<?=$file['SRC']?>" alt="Image" class="img-fluid">
                  </div>
              <?endforeach;?>
            <?endif;?>
          </div>
        </div>

        <div class="bg-white">
          <div class="row mb-5">
            <div class="col-md-6">
              <?if($arResult['DISPLAY_PROPERTIES']['PRICE']['DISPLAY_VALUE'] ):?>
                <strong class="text-success h1 mb-3"><?= $arResult['DISPLAY_PROPERTIES']['PRICE']['DISPLAY_VALUE'] ?> <?= GetMessage("VALUTA") ?></strong>
              <?endif;?>
            </div>
            <div class="col-md-6">
              <ul class="property-specs-wrap mb-3 mb-lg-0  float-lg-right">
                <li>
                    <?if($arResult["TIMESTAMP_X"]):?>
                      <span class="property-specs"><?= GetMessage("DATE_UPDATE")?></span>
                      <span class="property-specs-number"><?= CIBlockFormatProperties::DateFormat('d.m.Y', MakeTimeStamp($arResult["TIMESTAMP_X"])) ?></span>
                    <?endif;?>
                </li>
                <li>
                  <?if($arResult['DISPLAY_PROPERTIES']['COUNT_FLOOR']['DISPLAY_VALUE'] ):?>
                    <span class="property-specs"><?= GetMessage("FLOOR")?></span>
                    <span class="property-specs-number"><?= $arResult['DISPLAY_PROPERTIES']['COUNT_FLOOR']['DISPLAY_VALUE'] ?></span>
                  <?endif;?>
                </li>
                <li>
                    <?if($arResult['DISPLAY_PROPERTIES']['TOTAL_AREA']['DISPLAY_VALUE'] ):?>
                      <span class="property-specs"><?= GetMessage("AREA")?></span>
                      <span class="property-specs-number"><?= $arResult['DISPLAY_PROPERTIES']['TOTAL_AREA']['DISPLAY_VALUE'] ?> m<sup>2</sup></span>
                  <?endif;?>
                </li>
              </ul>
            </div>
          </div>
          <div class="row mb-5">
            <div class="col-md-6 col-lg-4 text-left border-bottom border-top py-3">
              <span class="d-inline-block text-black mb-0 caption-text"><?= GetMessage("BATHS")?></span>
              <?if($arResult['DISPLAY_PROPERTIES']['COUNT_BATHROOM']['DISPLAY_VALUE'] ):?>
                <strong class="d-block"><?= $arResult['DISPLAY_PROPERTIES']['COUNT_BATHROOM']['DISPLAY_VALUE'] ?></strong>
              <?endif;?>
            </div>
            <div class="col-md-6 col-lg-4 text-left border-bottom border-top py-3">
              <span class="d-inline-block text-black mb-0 caption-text"><?= GetMessage("GARAGE")?></span>
              <?if($arResult['DISPLAY_PROPERTIES']['GARAGE']['DISPLAY_VALUE'] ):?>
                <strong class="d-block"><?= $arResult['DISPLAY_PROPERTIES']['GARAGE']['DISPLAY_VALUE'] ?></strong>
              <?endif;?>
            </div>
          </div>

          <?if($arParams["DISPLAY_DETAIL_TEXT"]!="N" && $arResult["DETAIL_TEXT"]):?>
            <h2 class="h4 text-black"><?= GetMessage("INFO")?></h2>
            <p><?= $arResult['DETAIL_TEXT']?></p>
          <?endif;?>

          <div class="row mt-5">
            <div class="col-12">
              <h2 class="h4 text-black mb-3"><?= GetMessage("PROP_GALL")?></h2>
            </div>
            <?if (!empty($arResult['DISPLAY_PROPERTIES']['IMAGE_GALLERY']['FILE_VALUE'])):?>
              <? 
              $images = is_array($arResult['DISPLAY_PROPERTIES']['IMAGE_GALLERY']['FILE_VALUE']) 
                        ? $arResult['DISPLAY_PROPERTIES']['IMAGE_GALLERY']['FILE_VALUE'] 
                        : [$arResult['DISPLAY_PROPERTIES']['IMAGE_GALLERY']['FILE_VALUE']];
              ?>
              <?foreach ($images as $file):?>
                  <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                    <a href="<?=$file['SRC']?>" class="image-popup gal-item"><img src="<?=$file['SRC']?>" alt="Image" class="img-fluid"></a>
                  </div>
              <?endforeach;?>
            <?endif;?>
          </div>
          
          <?if($arResult['DISPLAY_PROPERTIES']['DOP_MATERIAL']['DISPLAY_VALUE']):?>
            <h2 class="h4 text-black"><?= GetMessage("ADD_MAT")?></h2>
            <p>
                <?$file = CFile::GetFileArray($arResult['DISPLAY_PROPERTIES']['DOP_MATERIAL']['FILE_VALUE']);
                if (in_array($file['CONTENT_TYPE'], ['image/jpeg', 'image/png', 'image/gif'])): ?>
                  <img src="<?= $file['SRC'] ?>" alt="Дополнительный материал" class="img-fluid">
                <?else: ?>
                  <a href="<?= $file['SRC'] ?>" target="_blank"><?= GetMessage("DOWNLOAD_FILE") ?></a>
                <? endif; ?>
            </p>
          <?endif;?>

          <?if($arResult['DISPLAY_PROPERTIES']['LINKS_EXT_RESOURCES']['DISPLAY_VALUE']):?>
            <h2 class="h4 text-black"><?= GetMessage("EX_LINK")?></h2>
            <p>
              <?= $arResult['DISPLAY_PROPERTIES']['LINKS_EXT_RESOURCES']['DISPLAY_VALUE']?>
            </p>
          <?endif;?>
        </div>
      </div>


      <div class="col-lg-4 pl-md-5">
        <div class="bg-white widget border rounded">
          <h3 class="h4 text-black widget-title mb-3">Contact Agent</h3>
          <form action="" class="form-contact-agent">
            <div class="form-group">
              <label for="name">Name</label>
              <input type="text" id="name" class="form-control">
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" id="email" class="form-control">
            </div>
            <div class="form-group">
              <label for="phone">Phone</label>
              <input type="text" id="phone" class="form-control">
            </div>
            <div class="form-group">
              <input type="submit" id="phone" class="btn btn-primary" value="Send Message">
            </div>
          </form>
        </div>

        <div class="bg-white widget border rounded">
          <h3 class="h4 text-black widget-title mb-3">Paragraph</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit qui explicabo, libero nam, saepe eligendi. Molestias maiores illum error rerum. Exercitationem ullam saepe, minus, reiciendis ducimus quis. Illo, quisquam, veritatis.</p>
        </div>
      </div>
    </div>
  </div>
</div>