<?php if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

  use \Bitrix\Main\Page\Asset;

?>

<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
  <title><? $APPLICATION->ShowTitle(); ?>></title>
  <?php
    $APPLICATION->ShowHead();

    Asset::getInstance()->addString('<link rel="apple-touch-icon" sizes="180x180" href="' . SITE_TEMPLATE_PATH . '/assets/apple-touch-icon.png"/>');
    Asset::getInstance()->addString('<link rel="icon" type="image/png" sizes="32x32" href="' . SITE_TEMPLATE_PATH . '/assets/favicon-32x32.png"/>');
    Asset::getInstance()->addString('<link rel="icon" type="image/png" sizes="16x16" href="' . SITE_TEMPLATE_PATH . '/assets/favicon-16x16.png"/>');
    Asset::getInstance()->addString('<link rel="manifest" href="' . SITE_TEMPLATE_PATH . '/assets/site.webmanifest"/>');
    Asset::getInstance()->addString('<link rel="mask-icon" href="' . SITE_TEMPLATE_PATH . '/assets/safari-pinned-tab.svg" color="#166ff3"/>');
    Asset::getInstance()->addString('<link rel="shortcut icon" href="' . SITE_TEMPLATE_PATH . '/assets/favicon.ico" type="image/x-icon"/>');
    Asset::getInstance()->addString('<meta name="msapplication-TileColor" content="#ffffff"/>');
    Asset::getInstance()->addString('<meta name="theme-color" content="#ffffff"/>');

    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/libs.css");
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/style.css");
  ?>
</head>
<body id="page-top">
<div id="panel"> <? $APPLICATION->ShowPanel(); ?> </div>
<header>
  <div class="container">
    <div class="menubtn">
      <svg width="30" height="22">
        <use xlink:href="#icon-menu"></use>
      </svg>
    </div>
    <div class="logo">
      <a href="/">
        <? $APPLICATION->IncludeComponent(
          "bitrix:main.include",
          "",
          array(
            "AREA_FILE_SHOW" => "file",
            "AREA_FILE_SUFFIX" => "inc",
            "EDIT_TEMPLATE" => "",
            "PATH" => "/include/logo.php"
          )
        ); ?>
      </a>
    </div>

    <div class="navblock">
      <div class="backbtn">
        <svg width="40" height="40">
          <use xlink:href="#icon-closecross"></use>
        </svg>
      </div>

      <? $APPLICATION->IncludeComponent(
        "bitrix:news.detail",
        "header_contacts_template",
        array(
          "ACTIVE_DATE_FORMAT" => "d.m.Y",
          "ADD_ELEMENT_CHAIN" => "N",
          "ADD_SECTIONS_CHAIN" => "Y",
          "AJAX_MODE" => "N",
          "AJAX_OPTION_ADDITIONAL" => "",
          "AJAX_OPTION_HISTORY" => "N",
          "AJAX_OPTION_JUMP" => "N",
          "AJAX_OPTION_STYLE" => "Y",
          "BROWSER_TITLE" => "-",
          "CACHE_GROUPS" => "Y",
          "CACHE_TIME" => "36000000",
          "CACHE_TYPE" => "A",
          "CHECK_DATES" => "Y",
          "DETAIL_URL" => "",
          "DISPLAY_BOTTOM_PAGER" => "N",
          "DISPLAY_DATE" => "Y",
          "DISPLAY_NAME" => "Y",
          "DISPLAY_PICTURE" => "Y",
          "DISPLAY_PREVIEW_TEXT" => "Y",
          "DISPLAY_TOP_PAGER" => "N",
          "ELEMENT_CODE" => "",
          "ELEMENT_ID" => "24",
          "FIELD_CODE" => array("", ""),
          "IBLOCK_ID" => "8",
          "IBLOCK_TYPE" => "contacts",
          "IBLOCK_URL" => "",
          "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
          "MESSAGE_404" => "",
          "META_DESCRIPTION" => "-",
          "META_KEYWORDS" => "-",
          "PAGER_BASE_LINK_ENABLE" => "N",
          "PAGER_SHOW_ALL" => "N",
          "PAGER_TEMPLATE" => ".default",
          "PAGER_TITLE" => "",
          "PROPERTY_CODE" => array("PHONE", "EMAIL", ""),
          "SET_BROWSER_TITLE" => "Y",
          "SET_CANONICAL_URL" => "N",
          "SET_LAST_MODIFIED" => "N",
          "SET_META_DESCRIPTION" => "Y",
          "SET_META_KEYWORDS" => "Y",
          "SET_STATUS_404" => "N",
          "SET_TITLE" => "Y",
          "SHOW_404" => "N",
          "STRICT_SECTION_CHECK" => "N",
          "USE_PERMISSIONS" => "N",
          "USE_SHARE" => "N"
        )
      ); ?>

      <nav>
        <? $APPLICATION->IncludeComponent("bitrix:menu", "main_menu", array(
          "ALLOW_MULTI_SELECT" => "N",  // Разрешить несколько активных пунктов одновременно
          "CHILD_MENU_TYPE" => "left",  // Тип меню для остальных уровней
          "DELAY" => "N",  // Откладывать выполнение шаблона меню
          "MAX_LEVEL" => "1",  // Уровень вложенности меню
          "MENU_CACHE_GET_VARS" => array(  // Значимые переменные запроса
            0 => "",
          ),
          "MENU_CACHE_TIME" => "3600",  // Время кеширования (сек.)
          "MENU_CACHE_TYPE" => "N",  // Тип кеширования
          "MENU_CACHE_USE_GROUPS" => "Y",  // Учитывать права доступа
          "ROOT_MENU_TYPE" => "main_menu",  // Тип меню для первого уровня
          "USE_EXT" => "N",  // Подключать файлы с именами вида .тип_меню.menu_ext.php
        ),
          false
        ); ?>
      </nav>

    </div>


    <div class="headoverlay"></div>
  </div>
</header>
<main>
