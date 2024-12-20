<?$current_page = $_SERVER["REQUEST_URI"];
$is_home_page = ($current_page == "/" || $current_page == "/index.php");

if (!$is_home_page):?>

<?else:?>
 
<? endif; ?>

<footer class="site-footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="mb-5">
            <?$APPLICATION->IncludeComponent(
                "bitrix:main.include",
                "",
                Array(
                  "AREA_FILE_SHOW" => "file",
                  "AREA_FILE_SUFFIX" => "inc",
                  "EDIT_TEMPLATE" => "",
                  "PATH" => "/include/about.php"
                )
              );?>
          </div>
        </div>


        <div class="col-lg-4 mb-5 mb-lg-0">
            <?$APPLICATION->IncludeComponent("bitrix:menu", "bottom_menu", Array(
            "ALLOW_MULTI_SELECT" => "N",	
              "CHILD_MENU_TYPE" => "left",	
              "DELAY" => "N",	
              "MAX_LEVEL" => "3",	
              "MENU_CACHE_GET_VARS" => "",	
              "MENU_CACHE_TIME" => "15772416",	
              "MENU_CACHE_TYPE" => "A",
              "MENU_CACHE_USE_GROUPS" => "Y",
              "ROOT_MENU_TYPE" => "top",	
              "USE_EXT" => "N",	
              "COMPONENT_TEMPLATE" => "store_v3_bottom"
            ),
            false
          );?>
        </div>

        <div class="col-lg-4 mb-5 mb-lg-0">
          <?$APPLICATION->IncludeComponent(
                "bitrix:main.include",
                "",
                Array(
                  "AREA_FILE_SHOW" => "file",
                  "AREA_FILE_SUFFIX" => "inc",
                  "EDIT_TEMPLATE" => "",
                  "PATH" => "/include/sns_footer.php"
                )
              );?>
        </div>
      </div>


      <div class="row pt-5 mt-5 text-center">
        <div class="col-md-12">
          <?$APPLICATION->IncludeComponent(
                "bitrix:main.include",
                "",
                Array(
                  "AREA_FILE_SHOW" => "file",
                  "AREA_FILE_SUFFIX" => "inc",
                  "EDIT_TEMPLATE" => "",
                  "PATH" => "/include/copyright.php"
                )
              );?>
        </div>
      </div>
    </div>
</footer>

<?php
  use Bitrix\Main\Page\Asset;

  Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/jquery-3.3.1.min.js");
  Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/jquery-migrate-3.0.1.min.js");
  Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/jquery-ui.js");
  Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/popper.min.js");
  Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/bootstrap.min.js");
  Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/owl.carousel.min.js");
  Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/mediaelement-and-player.min.js");
  Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/jquery.stellar.min.js");
  Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/jquery.countdown.min.js");
  Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/jquery.magnific-popup.min.js");
  Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/bootstrap-datepicker.min.js");

  Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/aos.js");
  Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/main.js");
?>

</body>
</html>