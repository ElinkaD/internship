<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
	die();
}?>
<div class="row mb-5">
	<div class="col-md-12">
		<h3 class="footer-heading mb-4"><?= GetMessage("NAV") ?></h3>
	</div>

<?php
if (!empty($arResult)) 
{
    $firstHalf = array_slice($arResult, 0, 4);
    $secondHalf = array_slice($arResult, 4, 4); 

    ?>
    <div class="col-md-6 col-lg-6">
        <ul class="list-unstyled">
            <?php
            foreach ($firstHalf as $item) 
            {
                if ($arParams['MAX_LEVEL'] === 1 && $item['DEPTH_LEVEL'] > 1) 
                {
                    continue;
                }
                ?>
                <li>
                    <a href="<?=$item['LINK']?>"><?=$item['TEXT']?></a>
                </li>
                <?php
            }
            ?>
        </ul>
    </div>

    <div class="col-md-6 col-lg-6">
        <ul class="list-unstyled">
            <?php
            foreach ($secondHalf as $item) 
            {
                if ($arParams['MAX_LEVEL'] === 1 && $item['DEPTH_LEVEL'] > 1) 
                {
                    continue;
                }
                ?>
                <li>
                    <a href="<?=$item['LINK']?>"><?=$item['TEXT']?></a>
                </li>
                <?php
            }
            ?>
        </ul>
    </div>
</div>
    <?php
}
?>
