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


<div class="tarifftabs">
  <div class="tabholder">
    <? foreach ($arResult['ITEMS'] as $index => $rate) : ?>
      <div class="tabitem <?= $index == 0 ? 'active' : null ?>">
        <?= $rate['NAME'] ?>
      </div>
    <? endforeach; ?>
  </div>
  <div class="tabcontent">
    <? foreach ($arResult['ITEMS'] as $index => $rate) : ?>
      <div class="tabcontentitem"
        <?= $index == 0 ? 'style="display: block"' : null ?>
      >
        <?= $rate['DISPLAY_PROPERTIES']['TABLE']['DISPLAY_VALUE'] ?>
      </div>
    <? endforeach; ?>
  </div>
</div>
