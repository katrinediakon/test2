<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>

<div class="review-block">
<div class="review-text">
<div class="review-text-cont">
	<?echo $arResult["DETAIL_TEXT"];?>
</div>
<div class="review-autor">
<?echo $arResult["NAME"]?> ,<?=date("d M o г.",$arResult["DATE_ACTIVE_FROM"])?>., <?=$arResult["PROPERTIES"]["POSITION"]["VALUE"]?>, <?=$arResult["PROPERTIES"]["COMPANY"]["VALUE"]?>
</div>
</div>
<?if(isset($arResult["DETAIL_PICTURE"])):?>
<div style="clear: both;" class="review-img-wrap"><img src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>" alt="img"></div>

<?else:?>
<div style="clear: both;" class="review-img-wrap"><img src="/local/templates/.default/components/bitrix/news/reviews/no_photo.jpg" alt="img"></div>
<?endif?>
</div>
<?if(isset($arResult["DISPLAY_PROPERTIES"]["DOC"])):?>
<div class="exam-review-doc">
<p>Документы:</p>
<?foreach ($arResult["DISPLAY_PROPERTIES"]["DOC"]["FILE_VALUE"] as $key ):?>
<div  class="exam-review-item-doc"><img class="rew-doc-ico" src="/pdf_ico_40.png"><a href="<?=$key["SRC"]?>">Файл </a></div>
<?endforeach?>
</div>
<?endif?>
<hr>
