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
        <? foreach ($arResult['ITEMS'] as $banner): ?>
          <div class="swiper-slide"
               style="background-image: url(<?= $banner['DISPLAY_PROPERTIES']['BACKGROUND_IMAGE']['FILE_VALUE']['SRC']; ?>);"
               id="slide-first">
            <div class="container">
              <div class="content">

                  <h1>
                    <span class="lightyellow">
                      <?= $banner['DISPLAY_PROPERTIES']['SUB_TITLE']['DISPLAY_VALUE']; ?>
                    </span>
                    <?= $banner['DISPLAY_PROPERTIES']['TITLE']['DISPLAY_VALUE']; ?>
                  </h1>
                  <ul>
                    <? foreach ($banner['DISPLAY_PROPERTIES']['ADDITIONAL_FIELDS']['DISPLAY_VALUE'] as $field): ?>
                      <li><?= $field ?></li>
                    <? endforeach; ?>
                  </ul>
                  <div class="btnline">
                    <a class="toankor btn" href="#wehelp">Наши услуги</a>
                    <button class="btn white" data-call="callback">Получить <span>бесплатную  </span>консультацию
                    </button>
                  </div>
              </div>
            </div>
          </div>

        <? endforeach; ?>
      </div>
      <div class="swiper-pagination"></div>
    </div>
  </div>
