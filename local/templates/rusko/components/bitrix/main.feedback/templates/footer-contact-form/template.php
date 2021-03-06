<?
  if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
  /**
   * Bitrix vars
   *
   * @var array $arParams
   * @var array $arResult
   * @var CBitrixComponentTemplate $this
   * @global CMain $APPLICATION
   * @global CUser $USER
   */
?>
<div class="mfeedback">
  <? if (!empty($arResult["ERROR_MESSAGE"])) : ?>
    foreach ($arResult["ERROR_MESSAGE"] as $v)
    ShowError($v);
  <? endif; ?>
  <? if (strlen($arResult["OK_MESSAGE"]) > 0) : ?>
    <script>thanks();</script>
  <? endif; ?>

  <form action="<?= POST_FORM_ACTION_URI ?>" method="POST">
    <?= bitrix_sessid_post() ?>
    <div class="fields">
      <div class="inputholder">
        <input type="text" name="user_name" value="<?= $arResult["AUTHOR_NAME"] ?>"
               placeholder="<?= GetMessage("MFT_NAME") ?>">
      </div>

      <div class="inputholder">
        <input type="text" name="user_phone" value="<?= $arResult["AUTHOR_PHONE"] ?>" data-phone="data-phone"
               data-placeholder="+7 (___) ___-__-__" placeholder="<?= GetMessage("MFT_PHONE") ?>">
      </div>
    </div>
    <input type="hidden" name="PARAMS_HASH" value="<?= $arResult["PARAMS_HASH"] ?>">
    <div class="sendblock">
      <input type="submit" name="submit" class="btn" value="Отправить">
      <div class="small">Нажимая на кнопку “Отправить”, вы подтверждаете свое согласие на <a href="#" target="_blank">обработку
          пользовательских данных</a></div>
    </div>
  </form>
</div>