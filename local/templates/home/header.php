<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
use Bitrix\Main\Page\Asset;
IncludeTemplateLangFile(__FILE__);

Asset::getInstance()->addCss("https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900|Roboto+Mono:300,400,500");
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/fonts/icomoon/style.css");

Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/bootstrap.min.css");
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/magnific-popup.css");
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/jquery-ui.css");
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/owl.carousel.min.css");
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/owl.theme.default.min.css");
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/bootstrap-datepicker.css");
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/mediaelementplayer.css");
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/animate.css");
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/fonts/flaticon/font/flaticon.css");
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/fl-bigmug-line.css");
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/aos.css");
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/style.css");
?>

<!DOCTYPE html>
<html lang="<?=LANGUAGE_ID?>">
<head>
    <?$APPLICATION->ShowHead();?>
    <title><?$APPLICATION->ShowTitle()?></title>
</head>

<body>
<?$APPLICATION->ShowPanel();?>
  <div class="site-loader"></div>

  <div class="site-wrap">
    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
    	  <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
    	  </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->

    <div class="border-bottom bg-white top-bar">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-6 col-md-6">
            <p class="mb-0">
              <a href="#" class="mr-3"><span class="text-black fl-bigmug-line-phone351"></span> <span class="d-none d-md-inline-block ml-2">
                  <?$APPLICATION->IncludeComponent(
                  "bitrix:main.include",
                  "",
                  Array(
                    "AREA_FILE_SHOW" => "file",
                    "AREA_FILE_SUFFIX" => "inc",
                    "EDIT_TEMPLATE" => "",
                    "PATH" => "/include/phone.php"
                  )
                  );?>
                </span>
              </a>
              <a href="#"><span class="text-black fl-bigmug-line-email64"></span> <span class="d-none d-md-inline-block ml-2">
                  <?$APPLICATION->IncludeComponent(
                  "bitrix:main.include",
                  "",
                  Array(
                    "AREA_FILE_SHOW" => "file",
                    "AREA_FILE_SUFFIX" => "inc",
                    "EDIT_TEMPLATE" => "",
                    "PATH" => "/include/mail.php"
                  )
                  );?>
                </span>
              </a>
            </p>
          </div>
         
          <div class="col-6 col-md-6 text-right">
                  <?$APPLICATION->IncludeComponent(
                  "bitrix:main.include",
                  "",
                  Array(
                    "AREA_FILE_SHOW" => "file",
                    "AREA_FILE_SUFFIX" => "inc",
                    "EDIT_TEMPLATE" => "",
                    "PATH" => "/include/SNS_icon.php"
                  )
                  );?>
          </div>
        </div>
      </div>
    </div>
    
    <div class="site-navbar">
      <div class="container py-1">
        <div class="row align-items-center">
          <div class="col-8 col-md-8 col-lg-4">
            <h1>
              <?$APPLICATION->IncludeComponent(
                "bitrix:main.include",
                "",
                Array(
                  "AREA_FILE_SHOW" => "file",
                  "AREA_FILE_SUFFIX" => "inc",
                  "EDIT_TEMPLATE" => "",
                  "PATH" => "/include/logo.php"
                )
              );?>
            </h1>
          </div>

          <div class="col-4 col-md-4 col-lg-8">
             <?$APPLICATION->IncludeComponent("bitrix:menu", "top_menu", Array(
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
                "COMPONENT_TEMPLATE" => "horizontal_multilevel1"
              ),
              false
            );?> 
          </div>

        </div>
      </div>
    </div>
  </div>

<?$current_page = $_SERVER["REQUEST_URI"];
$is_home_page = ($current_page == "/" || $current_page == "/index.php");

if (!$is_home_page):?>
  <?$APPLICATION->IncludeComponent(
	"bitrix:breadcrumb", 
	"inner_breadcrumb", 
	array(
		"PATH" => "",
		"SITE_ID" => "s1",
		"START_FROM" => "0",
		"COMPONENT_TEMPLATE" => "inner_breadcrumb"
	),
	false
);?>

<div class="site-section border-bottom">
	<div class="container">

<?else:?>
 
<? endif; ?>
