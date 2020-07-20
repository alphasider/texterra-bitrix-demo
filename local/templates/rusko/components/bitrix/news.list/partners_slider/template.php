<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
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

<div class="sliderholder">
  <div class="swiper-container">
    <div class="swiper-wrapper">
      <? foreach ($arResult["ITEMS"] as $arItem): ?>
        <div class="swiper-slide">
          <img src="<?= $arItem['PREVIEW_PICTURE']['SRC']; ?>" alt="<?= $arItem['PREVIEW_PICTURE']['ALT']; ?>"/>
        </div>
      <? endforeach; ?>
    </div>
  </div>
  <div class="swiper-button-next">
    <svg width="16" height="29">
      <use xlink:href="#icon-arrow"></use>
    </svg>
  </div>
  <div class="swiper-button-prev">
    <svg width="16" height="29">
      <use xlink:href="#icon-arrow"></use>
    </svg>
  </div>
</div>


