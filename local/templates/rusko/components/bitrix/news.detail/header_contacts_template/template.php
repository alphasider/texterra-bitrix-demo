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

<div class="contacts">
  <a href="tel:<?= $arResult['DISPLAY_PROPERTIES']['PHONE']['DISPLAY_VALUE'] ?>">
    <svg width="20" height="20">
      <use xlink:href="#icon-phone"></use>
    </svg>
    <span><?= $arResult['DISPLAY_PROPERTIES']['PHONE']['DISPLAY_VALUE'] ?></span>
  </a>
  <a href="mailto:<?= $arResult['DISPLAY_PROPERTIES']['EMAIL']['DISPLAY_VALUE'] ?>">
    <svg width="20" height="20">
      <use xlink:href="#icon-mail"></use>
    </svg>
    <span><?= $arResult['DISPLAY_PROPERTIES']['EMAIL']['DISPLAY_VALUE'] ?></span>
  </a>
</div>
