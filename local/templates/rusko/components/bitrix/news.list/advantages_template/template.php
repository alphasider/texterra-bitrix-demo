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

<div class="whytabs">
  <dl class="tabholder">
    <? foreach ($arResult['ITEMS'] as $advantage): ?>
      <dt class="tabitem"><?= $advantage['NAME']; ?></dt>
      <dd class="tabdesc"><?= $advantage['PREVIEW_TEXT']; ?></dd>
    <? endforeach; ?>
  </dl>
  <div class="tabcontent">
    <div class="text"></div>
  </div>
</div>
