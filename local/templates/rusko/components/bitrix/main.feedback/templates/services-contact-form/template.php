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
<div class="modal" data-pp="order">
  <div class="modalbody">
    <div class="close">
      <svg>
        <use xlink:href="#icon-closecross"></use>
      </svg>
    </div>
    <div class="holder">
      <? if (!empty($arResult["ERROR_MESSAGE"])) : ?>
        foreach ($arResult["ERROR_MESSAGE"] as $v)
        ShowError($v);
      <? endif; ?>
      <? if (strlen($arResult["OK_MESSAGE"]) > 0) : ?>
        <script>thanks();</script>
      <? endif; ?>

      <form action="<?= POST_FORM_ACTION_URI ?>" method="POST">
        <?= bitrix_sessid_post() ?>
        <input type="hidden" data-servicename="data-servicename"/>
        <div class="caption lightyellow">Оставьте заявку</div>
        <p>Наш сотрудник с вами свяжется в ближайшее время.</p>
        <div class="fields">
          <div class="inputholder">
            <input type="text" name="user_name" value="<?= $arResult["AUTHOR_NAME"] ?>"
                   placeholder="<?= GetMessage("MFT_NAME") ?>">

            <input type="text" name="user_phone" value="<?= $arResult["AUTHOR_PHONE"] ?>"
                   placeholder="<?= GetMessage("MFT_PHONE") ?>" data-phone="data-phone"
                   data-placeholder="+7 (___) ___-__-__">

          <span class="or">или</span>

            <input type="text" name="user_email" value="<?= $arResult["AUTHOR_EMAIL"] ?>"
                   placeholder="<?= GetMessage('MFT_EMAIL') ?>">
          </div>
          <div class="inputholder">
            <label for="">Ваш вопрос</label>
            <textarea name="MESSAGE" rows="10" cols="30"><?=$arResult["MESSAGE"]?></textarea>
          </div>
        </div>
        <input type="hidden" name="PARAMS_HASH" value="<?= $arResult["PARAMS_HASH"] ?>">
        <div class="inputholder btns">
          <input type="submit" name="submit" class="btn" value="<?= GetMessage("MFT_SUBMIT") ?>" data-send="data-send">
          <span class="small">
            Нажимая на кнопку «Оставить заявку», вы подтверждаете свое согласие на
            <a href="#" target="_blank">обработку пользовательских данных.</a>
          </span>
        </div>
      </form>
    </div>
  </div>
</div>