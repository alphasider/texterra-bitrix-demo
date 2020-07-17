</main>
<footer id="footer">
  <div class="container">
    <div class="logo"><img src="<?=SITE_TEMPLATE_PATH ?>/assets/img/logo.png" alt="РусКо"/></div>
    <div class="info"><span><a href="#" target="_blank">Политика конфиденциальности</a></span></div>
    <div class="info"><span>©Все права защищены 2020</span></div>
    <div class="dev"><a href="#"><span>Разработано</span>
        <svg>
          <use xlink:href="#icon-texterra-logo"></use>
        </svg></a></div>
  </div>
</footer>
<div id="overlay"></div>
<div class="modal" data-pp="callback">
  <div class="modalbody">
    <div class="close">
      <svg>
        <use xlink:href="#icon-closecross"></use>
      </svg>
    </div>
    <div class="holder">
      <form class="form" action="post">
        <div class="caption lightyellow">Задайте свой вопрос бухгалтеру</div>
        <p>Консультация бесплатна и обычно занимает не более 15 минут, а полученные знания останутся с вами навсегда.</p>
        <div class="fields">
          <div class="inputholder">
            <input type="text" placeholder="Ваше имя"/>
          </div>
          <div class="inputholder">
            <input type="text" placeholder="Телефон" data-phone="data-phone" data-placeholder="+7 (___) ___-__-__"/>
          </div>
        </div>
        <div class="inputholder btns">
          <button class="btn" data-send="data-send">Получить консультацию</button><span class="small">Нажимая на кнопку «Получить консультацию», вы подтверждаете свое согласие на <a href="#" target="_blank">обработку пользовательских данных.        </a></span>
        </div>
      </form>
    </div>
  </div>
</div>
<div class="modal" data-pp="order">
  <div class="modalbody">
    <div class="close">
      <svg>
        <use xlink:href="#icon-closecross"></use>
      </svg>
    </div>
    <div class="holder">
      <form class="form">
        <input type="hidden" data-servicename="data-servicename"/>
        <div class="caption lightyellow">Оставьте заявку</div>
        <p>Наш сотрудник с вами свяжется в ближайшее время.</p>
        <div class="fields">
          <div class="inputholder">
            <input type="text" placeholder="Ваше имя"/>
            <input type="text" placeholder="Номер телефона" data-phone="data-phone" data-placeholder="+7 (___) ___-__-__"/><span class="or">или</span>
            <input type="text" placeholder="E-mail"/>
          </div>
          <div class="inputholder">
            <label for="">Ваш вопрос</label>
            <textarea name="" cols="30" rows="10"></textarea>
          </div>
        </div>
        <div class="inputholder btns">
          <button class="btn" data-send="data-send">Оставить заявку</button><span class="small">Нажимая на кнопку «Оставить заявку», вы подтверждаете свое согласие на <a href="#" target="_blank">обработку пользовательских данных.        </a></span>
        </div>
      </form>
    </div>
  </div>
</div>
<div class="modal" data-pp="thanks">
  <div class="modalbody">
    <div class="close">
      <svg>
        <use xlink:href="#icon-closecross"></use>
      </svg>
    </div>
    <div class="holder">
      <div class="form">
        <div class="caption lightyellow">Спасибо!</div>
        <p>Ваша заявка принята</p>
        <button class="btn" data-close="data-close">Хорошо</button>
      </div>
    </div>
  </div>
</div>
<div style="display:none;"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><symbol viewBox="0 0 16 29" id="icon-arrow" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M.798 14.5L12.048.438l3.904 3.124L7.202 14.5l8.75 10.938-3.904 3.123L.798 14.5z"/></symbol><symbol viewBox="0 0 60 60" id="icon-closecross" xmlns="http://www.w3.org/2000/svg"><path d="M40.714 42.857c-.548 0-1.096-.209-1.515-.628L30 33.03l-9.2 9.2a2.135 2.135 0 01-1.514.628A2.142 2.142 0 0117.77 39.2L26.97 30l-9.2-9.2a2.142 2.142 0 113.03-3.03L30 26.97l9.2-9.2a2.142 2.142 0 113.03 3.03l-9.2 9.2 9.2 9.2a2.142 2.142 0 01-1.516 3.657z"/><path fill-rule="evenodd" clip-rule="evenodd" d="M30 60C13.458 60 0 46.542 0 30S13.458 0 30 0s30 13.458 30 30-13.458 30-30 30zm0-55.714C15.821 4.286 4.286 15.82 4.286 30 4.286 44.179 15.82 55.714 30 55.714c14.179 0 25.714-11.535 25.714-25.714C55.714 15.821 44.18 4.286 30 4.286z"/></symbol><symbol viewBox="0 0 20 20" id="icon-mail" xmlns="http://www.w3.org/2000/svg"><path d="M18.044 3H1.957A1.96 1.96 0 000 4.957v9.565a1.96 1.96 0 001.957 1.956h16.087A1.96 1.96 0 0020 14.522V4.957A1.96 1.96 0 0018.044 3zm-.053 1.304l-7.53 7.53a.652.652 0 01-.922 0l-7.53-7.53h15.982zM1.304 14.47V5.444l4.513 4.513-4.513 4.512zm1.14.705l4.295-4.295 1.877 1.877a1.959 1.959 0 002.767 0l1.878-1.877 4.295 4.295H2.444zm16.252-.705l-4.513-4.512 4.513-4.513v9.025z"/></symbol><symbol viewBox="0 0 60 61" id="icon-menu" xmlns="http://www.w3.org/2000/svg"><rect width="60" height="4" rx="2"/><rect y="19" width="60" height="4" rx="2"/><rect y="38" width="60" height="4" rx="2"/><rect y="57" width="60" height="4" rx="2"/></symbol><symbol viewBox="0 0 20 20" id="icon-phone" xmlns="http://www.w3.org/2000/svg"><path d="M18.395 13.128c-1.224 0-2.427-.192-3.566-.568-.568-.194-1.215-.044-1.585.334l-2.249 1.697C8.387 13.2 6.781 11.593 5.407 9.005l1.648-2.19a1.617 1.617 0 00.398-1.638 11.373 11.373 0 01-.57-3.572C6.883.72 6.163 0 5.278 0H1.605C.72 0 0 .72 0 1.605 0 11.748 8.252 20 18.395 20 19.28 20 20 19.28 20 18.395v-3.662c0-.885-.72-1.605-1.605-1.605zm.494 5.267a.494.494 0 01-.494.494c-9.53 0-17.284-7.753-17.284-17.284 0-.272.222-.494.494-.494h3.673c.272 0 .494.222.494.494 0 1.344.21 2.663.623 3.912.058.185.011.375-.175.57L4.31 8.616a.556.556 0 00-.052.586c1.558 3.064 3.452 4.958 6.538 6.54a.554.554 0 00.588-.052l2.587-1.96a.49.49 0 01.504-.117c1.258.415 2.577.626 3.92.626.273 0 .494.221.494.493v3.663z"/></symbol><symbol viewBox="0 0 65 16" id="icon-texterra-logo" xmlns="http://www.w3.org/2000/svg"><path d="M39.289 0h1.787c-.496 1.248-.86 2.684-1.41 3.81h-1.707c.483-1.234.86-2.576 1.33-3.81zM6.157 14.963H2.909V4.83H0V2.094h9.444L9.066 4.83h-2.91v10.131zM32.35 14.963h-3.236V4.83h-2.909V2.094h9.431l-.38 2.737H32.35v10.131zM47.234 14.963h-3.132V9.179a14.156 14.156 0 00-.285-3.463l2.867-.496c.123.363.186.743.197 1.126a2.261 2.261 0 011.903-1.18c.407.004.81.1 1.176.282l-.718 2.603a1.722 1.722 0 00-.913-.254c-.468-.023-.9.249-1.095.684v6.482zM21.849 13.487zM16.5 10.427v-.161a5.473 5.473 0 00-1.069-3.77 3.557 3.557 0 00-2.961-1.343 4.125 4.125 0 00-3.235 1.342 5.47 5.47 0 00-1.149 3.73v.256a4.923 4.923 0 001.449 3.62 4.48 4.48 0 002.974 1.049h.182a5.662 5.662 0 003.77-1.342l-1.2-1.81a4.116 4.116 0 01-2.361.965h-.078a1.375 1.375 0 01-1.304-.685 2.53 2.53 0 01-.235-1.06H16.5v-.791zM11.284 8.99a2.2 2.2 0 01.456-1.261.915.915 0 01.718-.296.86.86 0 01.886.618c.103.32.148.657.132.992v.096h-2.153l-.039-.149z"/><path d="M23.545 10.265l-.222-.35 2.765-4.48h-3.652l-.417.817a5.182 5.182 0 00-.47 1.57 5.55 5.55 0 00-.56-1.462l-.705-1.261-3.326.67 2.608 4.228-.169.253-3.026 4.712h3.822l.56-.994c.305-.473.517-1 .628-1.558.095.376.236.737.417 1.077l.664 1.475h3.913l-2.83-4.697zM42.694 10.427v-.162a5.472 5.472 0 00-1.071-3.77 3.537 3.537 0 00-2.96-1.342 4.132 4.132 0 00-3.236 1.342 5.487 5.487 0 00-1.148 3.73v.256a4.927 4.927 0 001.45 3.62c.841.7 1.892 1.07 2.974 1.049h.17a5.66 5.66 0 003.769-1.342l-1.2-1.852c-.65.57-1.457.92-2.309 1.006h-.079a1.376 1.376 0 01-1.304-.685 2.515 2.515 0 01-.235-1.06h5.217l-.038-.79zM37.477 8.99a2.21 2.21 0 01.352-1.262.93.93 0 01.718-.295.863.863 0 01.874.617c.102.32.145.657.13.993v.095h-2.086l.012-.148zM53.886 14.963h-3.118V9.179a14.182 14.182 0 00-.288-3.463l2.87-.496c.12.363.186.743.196 1.126a2.262 2.262 0 011.904-1.18c.407.004.81.1 1.173.282l-.728 2.603a1.73 1.73 0 00-.915-.254 1.146 1.146 0 00-1.095.684v6.482zM64.973 13.514a1.9 1.9 0 01-.64-1.719v-3.38a5.714 5.714 0 00-.154-1.477 2.145 2.145 0 00-1.15-1.343 4.788 4.788 0 00-2.191-.442 6.444 6.444 0 00-2.296.43 9.993 9.993 0 00-1.864.925l1.12 2a5.362 5.362 0 011.631-.872c.328-.09.665-.134 1.006-.134.228-.03.458.05.624.214.1.204.14.432.117.658v.591h-.534a5.15 5.15 0 00-2.765.697c-.242.153-.46.336-.653.55a2.82 2.82 0 00-.677 1.96 3.05 3.05 0 00.847 2.226 3.1 3.1 0 002.282.806 3.53 3.53 0 002.39-.793c.24.4.602.71 1.028.887h.182l1.656-1.664.068-.068-.027-.052zm-3.729-.833c-.084.084-.182.151-.288.201a.96.96 0 01-.444.11.815.815 0 01-.717-.365 1.14 1.14 0 01-.144-.55v-.092a.91.91 0 01.43-.728c.273-.148.579-.222.888-.213h.275v1.637zM39.289 0h1.787c-.496 1.248-.86 2.684-1.41 3.81h-1.707c.483-1.234.86-2.576 1.33-3.81zM6.157 14.963H2.909V4.83H0V2.094h9.444L9.066 4.83h-2.91v10.131zM32.35 14.963h-3.236V4.83h-2.909V2.094h9.431l-.38 2.737H32.35v10.131zM47.234 14.963h-3.132V9.179a14.156 14.156 0 00-.285-3.463l2.867-.496c.123.363.186.743.197 1.126a2.261 2.261 0 011.903-1.18c.407.004.81.1 1.176.282l-.718 2.603a1.722 1.722 0 00-.913-.254c-.468-.023-.9.249-1.095.684v6.482zM21.849 13.487z"/><path d="M16.5 10.427v-.161a5.473 5.473 0 00-1.069-3.77 3.557 3.557 0 00-2.961-1.343 4.125 4.125 0 00-3.235 1.342 5.47 5.47 0 00-1.149 3.73v.256a4.923 4.923 0 001.449 3.62 4.48 4.48 0 002.974 1.049h.182a5.662 5.662 0 003.77-1.342l-1.2-1.81a4.116 4.116 0 01-2.361.965h-.078a1.375 1.375 0 01-1.304-.685 2.53 2.53 0 01-.235-1.06H16.5v-.791zM11.284 8.99a2.2 2.2 0 01.456-1.261.915.915 0 01.718-.296.86.86 0 01.886.618c.103.32.148.657.132.992v.096h-2.153l-.039-.149z"/><path d="M23.545 10.265l-.222-.35 2.765-4.48h-3.652l-.417.817a5.182 5.182 0 00-.47 1.57 5.55 5.55 0 00-.56-1.462l-.705-1.261-3.326.67 2.608 4.228-.169.253-3.026 4.712h3.822l.56-.994c.305-.473.517-1 .628-1.558.095.376.236.737.417 1.077l.664 1.475h3.913l-2.83-4.697zM42.694 10.427v-.162a5.472 5.472 0 00-1.071-3.77 3.537 3.537 0 00-2.96-1.342 4.132 4.132 0 00-3.236 1.342 5.487 5.487 0 00-1.148 3.73v.256a4.927 4.927 0 001.45 3.62c.841.7 1.892 1.07 2.974 1.049h.17a5.66 5.66 0 003.769-1.342l-1.2-1.852c-.65.57-1.457.92-2.309 1.006h-.079a1.376 1.376 0 01-1.304-.685 2.515 2.515 0 01-.235-1.06h5.217l-.038-.79zM37.477 8.99a2.21 2.21 0 01.352-1.262.93.93 0 01.718-.295.863.863 0 01.874.617c.102.32.145.657.13.993v.095h-2.086l.012-.148zM53.886 14.963h-3.118V9.179a14.182 14.182 0 00-.288-3.463l2.87-.496c.12.363.186.743.196 1.126a2.262 2.262 0 011.904-1.18c.407.004.81.1 1.173.282l-.728 2.603a1.73 1.73 0 00-.915-.254 1.146 1.146 0 00-1.095.684v6.482zM64.973 13.514a1.9 1.9 0 01-.64-1.719v-3.38a5.714 5.714 0 00-.154-1.477 2.145 2.145 0 00-1.15-1.343 4.788 4.788 0 00-2.191-.442 6.444 6.444 0 00-2.296.43 9.993 9.993 0 00-1.864.925l1.12 2a5.362 5.362 0 011.631-.872c.328-.09.665-.134 1.006-.134.228-.03.458.05.624.214.1.204.14.432.117.658v.591h-.534a5.15 5.15 0 00-2.765.697c-.242.153-.46.336-.653.55a2.82 2.82 0 00-.677 1.96 3.05 3.05 0 00.847 2.226 3.1 3.1 0 002.282.806 3.53 3.53 0 002.39-.793c.24.4.602.71 1.028.887h.182l1.656-1.664.068-.068-.027-.052zm-3.729-.833c-.084.084-.182.151-.288.201a.96.96 0 01-.444.11.815.815 0 01-.717-.365 1.14 1.14 0 01-.144-.55v-.092a.91.91 0 01.43-.728c.273-.148.579-.222.888-.213h.275v1.637z"/></symbol></svg></div>
<script src="//api-maps.yandex.ru/2.1/?lang=ru_RU"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/js/libs.min.js"></script>
<script>
  if(/MSIE \d|Trident.*rv:/.test(navigator.userAgent)){
    document.write('<script src="<?=SITE_TEMPLATE_PATH ?>/js/scripts.es5.js"><\/script><script src="<?=SITE_TEMPLATE_PATH ?>/js/polyfill.min.js"><\/script>');
  } else {
    document.write('<script src="<?=SITE_TEMPLATE_PATH ?>/js/scripts.min.js"><\/script>');
  }
</script>
<script src="<?=SITE_TEMPLATE_PATH?>/js/backend.js"></script>
</body>
</html>