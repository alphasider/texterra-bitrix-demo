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

<div class="services">
  <? foreach ($arResult['ITEMS'] as $arItem): ?>
    <div class="service">
      <div class="caption"><? echo $arItem["NAME"] ?></div>
      <ul>
        <? foreach ($arItem["DISPLAY_PROPERTIES"] as $pid => $arProperty): ?>
          <? if (is_array($arProperty["DISPLAY_VALUE"])): ?>
            <? foreach ($arProperty['DISPLAY_VALUE'] as $service): ?>
              <li><?= $service; ?> </li>
            <? endforeach; ?>
          <? else: ?>
            <li><?= $arProperty["DISPLAY_VALUE"]; ?></li>
          <? endif ?>
        <? endforeach; ?>
      </ul>
      <div class="btn" data-call="order" data-service="data-service">Оставить заявку</div>
    </div>
  <? endforeach; ?>
</div>
