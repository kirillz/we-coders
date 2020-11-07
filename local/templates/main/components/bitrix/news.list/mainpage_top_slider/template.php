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


<?php if(!empty($arResult["ITEMS"])): ?>
    <!-- Слайдер -->
    <section class="slider-area">
        <div class="slider-active">

            <?php foreach ($arResult["ITEMS"] as $arItem): ?>
                <div class="single-slider">
                    <?php if(!empty($arItem['PREVIEW_PICTURE']['SRC'])): ?>
                        <div class="slider-img parallax-bg bg-opacity-black-60" style="background:url(<?= $arItem['PREVIEW_PICTURE']['SRC'] ?>)"></div>
                    <?php endif; ?>

                    <div class="slider-content slider-style-2 slider-style-4 text-center z-index-5">
                        <span><?= isset($arItem['NAME']) ? $arItem['NAME'] : '';  ?></span>
                        <h2><?= isset($arItem['PREVIEW_TEXT']) ? $arItem['PREVIEW_TEXT'] : ''; ?></h2>
                        <?php if(!empty($arItem['DETAIL_TEXT']) && !empty($arItem['PROPERTIES']['LINK']['VALUE'])): ?>
                            <a class="my-button" href="<?= $arItem['PROPERTIES']['LINK']['VALUE'] ?>"><?= $arItem['DETAIL_TEXT'] ?></a>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>


<?php endif; ?>


