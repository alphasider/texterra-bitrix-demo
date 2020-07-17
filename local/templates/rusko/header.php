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
    <div class="logo"><img src="<?=SITE_TEMPLATE_PATH ?>/assets/img/logo.png" alt="РусКо"/></div>
    <div class="navblock">
      <div class="backbtn">
        <svg width="40" height="40">
          <use xlink:href="#icon-closecross"></use>
        </svg>
      </div>
      <div class="contacts"><a href="tel:+78000000000">
          <svg width="20" height="20">
            <use xlink:href="#icon-phone"></use>
          </svg>
          <span>8 (000) 000-00-00</span></a><a href="mailto:info@info">
          <svg width="20" height="20">
            <use xlink:href="#icon-mail"></use>
          </svg>
          <span>info@info.ru</span></a></div>
      <nav><a class="toankor" href="#whywe">Почему мы</a><a class="toankor" href="#wehelp">Услуги</a><a class="toankor"
                                                                                                        href="#tariffs">Тарифы</a><a
          class="toankor" href="#reviews">Отзывы</a><a class="toankor" href="#contacts">Контакты</a></nav>
    </div>
    <div class="headoverlay"></div>
  </div>
</header>
<main>
