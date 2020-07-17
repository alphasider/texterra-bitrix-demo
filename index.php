<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
  $APPLICATION->SetTitle("Новости банка");
?>
  <section id="first">
    <div class="sliderholder">
      <div class="swiper-container">
        <div class="swiper-wrapper">
          <div class="swiper-slide" style="background-image: url(<?= SITE_TEMPLATE_PATH ?>/assets/img/bg-first.jpg);"
               id="slide-first">
            <div class="container">
              <div class="content">
                <h1><span class="lightyellow">Не отвлекайтесь от бизнеса, </span>бухгалтерия - наша забота</h1>
                <ul>
                  <li>Поможем малому бизнесу привести в порядок бухгалтерию и выбрать систему налогообложения.</li>
                  <li>Предельно честно расскажем и покажем, как и за что вы платите.</li>
                  <li>Возьмем на себя бухгалтерский и кадровый учет.</li>
                </ul>
                <div class="btnline"><a class="toankor btn" href="#wehelp">Наши услуги</a>
                  <button class="btn white" data-call="callback">Получить <span>бесплатную  </span>консультацию</button>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide" style="background-image: url(<?= SITE_TEMPLATE_PATH ?>/assets/img/bg-first.jpg);"
               id="slide-second">
            <div class="container">
              <div class="content">
                <div class="h1"><span class="lightyellow">Не отвлекайтесь от бизнеса, </span></div>
                <ul>
                  <li>Поможем малому бизнесу привести в порядок бухгалтерию и выбрать систему налогообложения.</li>
                  <li>Предельно честно расскажем и покажем, как и за что вы платите.</li>
                  <li>Возьмем на себя бухгалтерский и кадровый учет.</li>
                </ul>
                <div class="btnline"><a class="toankor btn" href="#wehelp">Наши услуги</a>
                  <button class="btn white" data-call="callback">Получить <span>бесплатную  </span>консультацию</button>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide" style="background-image: url(<?= SITE_TEMPLATE_PATH ?>/assets/img/bg-first.jpg);"
               id="slide-third">
            <div class="container">
              <div class="content">
                <div class="h1"><span class="lightyellow">Не отвлекайтесь от бизнеса, </span>бухгалтерия - наша забота
                </div>
                <ul>
                  <li>Поможем малому бизнесу привести в порядок бухгалтерию и выбрать систему налогообложения.</li>
                  <li>Предельно честно расскажем и покажем, как и за что вы платите.</li>
                  <li>Возьмем на себя бухгалтерский и кадровый учет.</li>
                </ul>
                <div class="btnline"><a class="toankor btn" href="#wehelp">Наши услуги</a>
                  <button class="btn white" data-call="callback">Получить <span>бесплатную  </span>консультацию</button>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide" style="background-image: url(<?= SITE_TEMPLATE_PATH ?>/assets/img/bg-first.jpg);"
               id="slide-fourth">
            <div class="container">
              <div class="content">
                <div class="h1"><span class="lightyellow">Не отвлекайтесь от бизнеса, </span>бухгалтерия - наша забота
                </div>
                <ul>
                  <li>Поможем малому бизнесу привести в порядок бухгалтерию и выбрать систему налогообложения.</li>
                  <li>Предельно честно расскажем и покажем, как и за что вы платите.</li>
                  <li>Возьмем на себя бухгалтерский и кадровый учет.</li>
                </ul>
                <div class="btnline"><a class="toankor btn" href="#wehelp">Наши услуги</a>
                  <button class="btn white" data-call="callback">Получить <span>бесплатную  </span>консультацию</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-pagination"></div>
      </div>
    </div>
  </section>
  <section id="whywe">
    <div class="container">
      <div class="headline">
        <h2>Почему стоит выбрать нас?</h2>
      </div>
      <div class="whytabs">
        <dl class="tabholder">
          <dt class="tabitem">Большой опыт работы</dt>
          <dd class="tabdesc">Все наши работники имеют специализацию и прекрасно разбираются в ее тонкостях. С каждым
            клиентом сотрудничает команда специалистов, поэтому мы заменяем целый штат бухгалтеров.
          </dd>
          <dt class="tabitem">Безлимитные консультации</dt>
          <dd class="tabdesc">Описание преимущества2</dd>
          <dt class="tabitem">Команда специалистов</dt>
          <dd class="tabdesc">Описание преимущества3</dd>
          <dt class="tabitem">Оптимизация ваших расходов</dt>
          <dd class="tabdesc">Описание преимущества4</dd>
          <dt class="tabitem">Справедливые цены</dt>
          <dd class="tabdesc">Описание преимущества5</dd>
          <dt class="tabitem">Прозрачность всех операций</dt>
          <dd class="tabdesc">Описание преимущества6</dd>
        </dl>
        <div class="tabcontent">
          <div class="text"></div>
        </div>
      </div>
    </div>
  </section>
  <div class="contentline" id="centerform">
    <div class="container">
      <div class="info">
        <div class="h3"><span class="lightyellow">Проконсультируем </span>по&nbsp;любому вопросу</div>
      </div>
      <form action="#">
        <div class="fields">
          <div class="inputholder">
            <input type="text" placeholder="Ваше имя"/>
          </div>
          <div class="inputholder">
            <input type="text" placeholder="Номер телефона" data-phone="data-phone"
                   data-placeholder="+7 (___) ___-__-__"/>
          </div>
          <span class="or">или</span>
          <div class="inputholder">
            <input type="text" placeholder="E-mail"/>
          </div>
        </div>
        <div class="sendblock">
          <div class="small">Нажимая на кнопку “Заказать консультацию”, вы подтверждаете свое согласие на <a href="#"
                                                                                                             target="_blank">обработку
              пользовательских данных</a></div>
          <button class="btn">Заказать консультацию</button>
        </div>
      </form>
    </div>
  </div>
  <div class="contentline" id="wehelp">
    <div class="container">
      <div class="headline">
        <div class="h2">Поможем вам в ведении</div>
      </div>
      <div class="services">
        <div class="service">
          <div class="caption">Бухгалтерского налогового учета</div>
          <ul>
            <li>Первичная постановка учета</li>
            <li>Восстановление запущенного бухучета</li>
            <li>Помощь в выборе системы налогообложения</li>
            <li>Оптимизация налогообложения</li>
            <li>Недопущение налоговых штрафов</li>
            <li>Составление и сдача отчетности</li>
            <li>Помощь в организации электронного документооборота</li>
          </ul>
          <div class="btn" data-call="order" data-service="data-service">Оставить заявку</div>
        </div>
        <div class="service">
          <div class="caption">Управленческого учета</div>
          <ul>
            <li>Консультирование по вопросам организации управленческого учета</li>
            <li>Анализ существующей системы управленческого учета</li>
            <li>Составление текущих бюджетов и бюджетов развития</li>
            <li>Разработка управленческих отчетов</li>
            <li>Помощь при автоматизации деятельности</li>
          </ul>
          <div class="btn" data-call="order" data-service="data-service">Оставить заявку</div>
        </div>
        <div class="service">
          <div class="caption">Кадрового учета</div>
          <ul>
            <li>Ведение электронных трудовых книжек</li>
            <li>Оформление приема работников, кадровых переводов, увольнений</li>
            <li>Расчет и выплата заработной платы</li>
            <li>Отчетность в ПФР и ФСС</li>
          </ul>
          <div class="btn" data-call="order" data-service="data-service">Оставить заявку</div>
        </div>
      </div>
    </div>
  </div>
  <section id="tariffs">
    <div class="container">
      <div class="headline">
        <h2>Тарифы</h2>
      </div>
      <div class="tarifftabs">
        <div class="tabholder">
          <div class="tabitem active">Стоимость услуг для юридических лиц</div>
          <div class="tabitem">Стоимость услуг для ИП</div>
        </div>
        <div class="tabcontent">
          <div class="tabcontentitem" style="display: block">
            <table>
              <tbody>
              <tr>
                <th>Базовый тариф*</th>
                <th>УСН</th>
                <th>ОСН</th>
              </tr>
              <tr>
                <td>Нулевая отчетность</td>
                <td colspan="2">3 000 р./квартал</td>
              </tr>
              <tr>
                <td>С деятельностью без выплаты зарплаты</td>
                <td>От 4 500 р./квартал</td>
                <td>От 6 000 р./квартал</td>
              </tr>
              <tr>
                <td>С деятельностью с выплатой зарплаты</td>
                <td>От 6 500 р./месяц</td>
                <td>От 8 000 р./месяц</td>
              </tr>
              </tbody>
            </table>
          </div>
          <div class="tabcontentitem">
            <table>
              <tbody>
              <tr>
                <th>Базовый тариф*</th>
                <th>УСН</th>
                <th>ОСН</th>
              </tr>
              <tr>
                <td>content</td>
                <td>content</td>
                <td>content</td>
              </tr>
              <tr>
                <td>content</td>
                <td>content</td>
                <td>content</td>
              </tr>
              <tr>
                <td>content</td>
                <td>content</td>
                <td>content</td>
              </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="reviews">
    <div class="container">
      <div class="headline">
        <h2>Отзывы</h2>
      </div>
      <div class="sliderholder">
        <div class="swiper-container">
          <div class="swiper-wrapper"><a class="swiper-slide" data-fancybox="docs"
                                         href="<?= SITE_TEMPLATE_PATH ?>/assets/img/samplerev.jpg">
              <div class="img" style="background-image: url(<?= SITE_TEMPLATE_PATH ?>/assets/img/samplerev.jpg"></div>
            </a><a class="swiper-slide" data-fancybox="docs" href="<?= SITE_TEMPLATE_PATH ?>/assets/img/samplerev.jpg">
              <div class="img" style="background-image: url(<?= SITE_TEMPLATE_PATH ?>/assets/img/samplerev.jpg"></div>
            </a><a class="swiper-slide" data-fancybox="docs" href="<?= SITE_TEMPLATE_PATH ?>/assets/img/samplerev.jpg">
              <div class="img" style="background-image: url(<?= SITE_TEMPLATE_PATH ?>/assets/img/samplerev.jpg"></div>
            </a><a class="swiper-slide" data-fancybox="docs" href="<?= SITE_TEMPLATE_PATH ?>/assets/img/samplerev.jpg">
              <div class="img" style="background-image: url(<?= SITE_TEMPLATE_PATH ?>/assets/img/samplerev.jpg"></div>
            </a><a class="swiper-slide" data-fancybox="docs" href="<?= SITE_TEMPLATE_PATH ?>/assets/img/samplerev.jpg">
              <div class="img" style="background-image: url(<?= SITE_TEMPLATE_PATH ?>/assets/img/samplerev.jpg"></div>
            </a><a class="swiper-slide" data-fancybox="docs" href="<?= SITE_TEMPLATE_PATH ?>/assets/img/samplerev.jpg">
              <div class="img" style="background-image: url(<?= SITE_TEMPLATE_PATH ?>/assets/img/samplerev.jpg"></div>
            </a><a class="swiper-slide" data-fancybox="docs" href="<?= SITE_TEMPLATE_PATH ?>/assets/img/samplerev.jpg">
              <div class="img" style="background-image: url(<?= SITE_TEMPLATE_PATH ?>/assets/img/samplerev.jpg"></div>
            </a><a class="swiper-slide" data-fancybox="docs" href="<?= SITE_TEMPLATE_PATH ?>/assets/img/samplerev.jpg">
              <div class="img" style="background-image: url(<?= SITE_TEMPLATE_PATH ?>/assets/img/samplerev.jpg"></div>
            </a></div>
        </div>
        <div class="swiper-button-next">
          <svg width="16" height="29">
            <use xlink:href="#icon-arrow"></use>
          </svg>
        </div>
        <div class="swiper-button-prev">
          <svg width="16" height="29">
            <use xlink:href="#icon-arrow"></use>
          </svg>
        </div>
      </div>
    </div>
  </section>
  <section id="partners">
    <div class="container">
      <div class="headline">
        <h2>Наши партнеры</h2>
      </div>
      <div class="sliderholder">
        <div class="swiper-container">
          <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/samplelogo.png" alt="Company"/>
            </div>
            <div class="swiper-slide"><img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/samplelogo.png" alt="Company"/>
            </div>
            <div class="swiper-slide"><img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/samplelogo.png" alt="Company"/>
            </div>
            <div class="swiper-slide"><img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/samplelogo.png" alt="Company"/>
            </div>
            <div class="swiper-slide"><img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/samplelogo.png" alt="Company"/>
            </div>
            <div class="swiper-slide"><img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/samplelogo.png" alt="Company"/>
            </div>
            <div class="swiper-slide"><img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/samplelogo.png" alt="Company"/>
            </div>
            <div class="swiper-slide"><img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/samplelogo.png" alt="Company"/>
            </div>
          </div>
        </div>
        <div class="swiper-button-next">
          <svg width="16" height="29">
            <use xlink:href="#icon-arrow"></use>
          </svg>
        </div>
        <div class="swiper-button-prev">
          <svg width="16" height="29">
            <use xlink:href="#icon-arrow"></use>
          </svg>
        </div>
      </div>
    </div>
  </section>
  <div class="contentline" id="contacts">
    <div class="holder">
      <div class="container">
        <div class="info">
          <div class="h3">Как с нами связаться?</div>
          <div class="contacts"><a href="tel:+78000000000">
              <svg width="20" height="20">
                <use xlink:href="#icon-phone"></use>
              </svg>
              <span>8 (000) 000-00-00</span></a><a href="mailto:info@info">
              <svg width="20" height="20">
                <use xlink:href="#icon-mail"></use>
              </svg>
              <span>info@info.ru</span></a></div>
          <p>Адрес:</p>
          <p><strong>12751, г.&nbsp;Москва, 17-ый&nbsp;проезд Марьиной&nbsp;рощи, д.&nbsp;4, корп.&nbsp;1</strong></p>
        </div>
      </div>
      <div id="map"></div>
    </div>
  </div>
  <div class="contentline" id="lineform">
    <div class="container">
      <div class="info">
        <div class="h3">Остались вопросы?</div>
        <div class="subtitle">Оставьте заявку, и мы ответим в ближайшее время</div>
      </div>
      <form action="#">
        <div class="fields">
          <div class="inputholder">
            <input type="text" placeholder="Ваше имя"/>
          </div>
          <div class="inputholder">
            <input type="text" placeholder="Номер телефона" data-phone="data-phone"
                   data-placeholder="+7 (___) ___-__-__"/>
          </div>
        </div>
        <div class="sendblock">
          <button class="btn">Отправить</button>
          <div class="small">Нажимая на кнопку “Отправить”, вы подтверждаете свое согласие на <a href="#"
                                                                                                 target="_blank">обработку
              пользовательских данных</a></div>
        </div>
      </form>
    </div>
  </div>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>