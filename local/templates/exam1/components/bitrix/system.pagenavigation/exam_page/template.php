<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true){die();}?>

<?if(!$arResult["NavShowAlways"])
{
    if ($arResult["NavRecordCount"] == 0 || ($arResult["NavPageCount"] == 1 && $arResult["NavShowAll"] == false))
        return;
}

$strNavQueryString = ($arResult["NavQueryString"] != "" ? $arResult["NavQueryString"]."&amp;" : "");
$strNavQueryStringFull = ($arResult["NavQueryString"] != "" ? "?".$arResult["NavQueryString"] : "");
?>
<div class="row">
    <div class="col-md-12 text-center">
        <div class="site-pagination">
            <? 
            $maxVisiblePages = 5; 
            $startPage = max($arResult["nStartPage"], $arResult["NavPageNomer"] - 2);
            $endPage = min($arResult["nEndPage"], $arResult["NavPageNomer"] + 2);
            
            if ($arResult["NavPageCount"] > $maxVisiblePages) {
                $startPage = max(1, $arResult["NavPageNomer"] - 2);
                $endPage = min($arResult["NavPageCount"], $arResult["NavPageNomer"] + 2);

                if ($startPage > 1) {
                    echo '<a href="'.$arResult["sUrlPath"].'?'.$strNavQueryString.'PAGEN_'.$arResult["NavNum"].'=1">1</a>';
                    if ($startPage > 2) {
                        echo '<span>...</span>';
                    }
                }

                if ($endPage < $arResult["NavPageCount"]) {
                    for ($i = $startPage; $i <= $endPage; $i++):
                        if ($i == $arResult["NavPageNomer"]): ?>
                            <a href="#" class="active"><?=$i?></a>
                        <? else: ?>
                            <a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=$i?>"><?=$i?></a>
                        <? endif;
                    endfor;

                    if ($endPage < $arResult["NavPageCount"] - 1) {
                        echo '<span>...</span>';
                    }
                    echo '<a href="'.$arResult["sUrlPath"].'?'.$strNavQueryString.'PAGEN_'.$arResult["NavNum"].'='.$arResult["NavPageCount"].'">'.$arResult["NavPageCount"].'</a>';
                }
            } else {
                for ($i = $arResult["nStartPage"]; $i <= $arResult["nEndPage"]; $i++):
                    if ($i == $arResult["NavPageNomer"]): ?>
                        <a href="#" class="active"><?=$i?></a>
                    <? else: ?>
                        <a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=$i?>"><?=$i?></a>
                    <? endif;
                endfor;
            }
            ?>
        </div>
    </div>
</div>
