<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

if (empty($arResult)) 
    return "";

$strReturn = '
<div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(/images/hero_bg_2.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row align-items-center justify-content-center text-center">
            <div class="col-md-10">';

if(empty(end($arResult)['LINK'])){
    $page_title = $arResult[count($arResult) - 2]['TITLE'];
}
else{
    $page_title = end($arResult)['TITLE'];
}

$strReturn .= '<h1 class="mb-2">' . htmlspecialchars($page_title) . '</h1>';

$strReturn .= '<div>';
$itemSize = count($arResult);

for ($index = 0; $index < $itemSize; $index++) {
    $title = htmlspecialcharsex($arResult[$index]["TITLE"]);

    if (!empty($arResult[$index]["LINK"])) {
        if ($title !== $page_title) {
            $strReturn .= '<a href="' . $arResult[$index]["LINK"] . '" title="' . $title . '">' . $title . '</a> <span class="mx-2 text-white">•</span>';
        } else {
            $strReturn .= '<strong class="text-white">' . $title . '<br></strong>';
        }
    }
}

$strReturn .= '</div>
            </div>
        </div>
    </div>
</div>';
return $strReturn;
?>
