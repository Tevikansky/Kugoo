<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="./favicon.ico" type="image/x-icon">
  <link rel="icon" href="./favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="css/swiper-bundle.min.css">
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
  <!-- <?php include_once ('./template-parts/favicon.php')?> -->
  <title>Kugo</title>
</head>





<body>
  <div class="header">
    <div class="container">
      <div class="header-nav-wrapper">
        <ul class="header-nav-left">
          <li class="header-nav-left-item">
            <a href="#" class="header-nav-left-link">Сервис</a>
          </li>
          <li class="header-nav-left-item">
            <a href="#" class="header-nav-left-link">Сотрудничество</a>
          </li>
          <li class="header-nav-left-item">
            <a href="#" class="header-nav-left-link">Заказать звонок</a>
          </li>
          <li class="header-nav-left-social">
            <a href="#" class="header-nav-left-social-link">
              <svg width="12" height="13" class="header-nav-left-link-social-svg">
                <use href="img/sprite.svg#Viber"></use>
              </svg>
            </a>
            <a href="#" class="header-nav-left-social-link">
              <svg width="13" height="13" class="header-nav-left-link-social-svg">
                <use href="img/sprite.svg#WhatsApp"></use>
              </svg>
            </a>
            <a href="#" class="header-nav-left-social-link">
              <svg width="12" height="13" class="header-nav-left-link-social-svg">
                <use href="img/sprite.svg#Telegram"></use>
              </svg>
            </a>
          </li>
        </ul>
        <div class="header-nav-right">
          <a href="tel:+78005055461" class="hedear-nav-phone">+7 (800) 505-54-61</a>
        </div>
      </div>
    </div>
  </div>
  <nav class="header-main">
    <div class="container">
      <div class="header-main-wrapper">
        <div class="header-main-left">
          <div class="header-main-left-logo">
            <a href="#" class="main-logo">Kugoo</a>
          </div>
          <a href="#" class="header-main-left-catalog">
            <div class="catalog-menu">
              <div class="catalog-menu-burger">
                <div class="catalog-menu-line"></div>
                <div class="catalog-menu-line"></div>
                <div class="catalog-menu-line"></div>
              </div>
            </div>
            <p class="catalog">
              Каталог</p>
          </a>
          <div class="header-main-left-search">
            <form action="#" class="form-search">
              <input type="text" class="input-search" placeholder="Искать самокат KUGO" maxlength="100">
              <button type="submit" class="button-search">
                <svg width="16" height="16" class="button-search-svg">
                  <use href="img/sprite.svg#search"></use>
                </svg>
              </button>
            </form>

          </div>
        </div>
        <div class="header-main-right">
          <a href="#" class="header-main-right-item">
            <img src="img/balance.svg" alt="balance">
          </a>
          <a href="#" class="header-main-right-item">
            <svg width="20" height="20" class="header-main-right-item-svg">
              <use href="img/sprite.svg#favorites"></use>
            </svg>
          </a>
          <a href="#" class="header-main-right-item">
            <svg width="20" height="20" class="header-main-right-item-svg">
              <use href="img/sprite.svg#shopping-cart"></use>
            </svg>
            <span class="shopping-cart-text">Корзина</span>
          </a>
        </div>
      </div>
    </div>
  </nav>

  <section class="test-drive">
    <div class="container-second">
      <div class="test-drive-wrapper-main">
        <div class="test-drive-wrapper-first">
          <svg width="15" height="15" class="test-drive-wrapper-first-svg">
            <use href="img/sprite.svg#location"></use>
          </svg>
          <p class="test-drive-street">
            Восточно-Кругликовская улица, 86
          </p>
          <p class="test-drive-time">
            Вт - Сб 10:00 - 20:00
          </p>
        </div>
        <h2 class="test-drive-title">
          Запишитесь на бесплатный тест-драйв электросамокатов
        </h2>
        <p class="test-drive-text">
          в Москве без ограничения по времени
        </p>
        <div class="test-drive-wrapper-second">
          <div class="test-drive-item">
            <div class="test-drive-item-icon">
              <svg width="40" height="40" class="test-drive-item-icon-svg">
                <use href="img/sprite.svg#scooter"></use>
              </svg>
            </div>
            <p class="test-drive-item-text">
              Поймете, какая модель вам подходит
            </p>
          </div>
          <div class="test-drive-item">
            <div class="test-drive-item-icon">
              <svg width="40" height="40" class="test-drive-item-icon-svg">
                <use href="img/sprite.svg#lightning"></use>
              </svg>
            </div>
            <p class="test-drive-item-text">
              Проверите лучшие самокаты в деле
            </p>
          </div>
        </div>
        <button class="record" data-toggle="modal">
          Записаться
        </button>
      </div>
    </div>
  </section>


  <section class="first-advantages container-second">
    <picture class="advantages-img">
  <source type="image/webp" srcset="img/Scooters.webp">
  <source type="image/jpeg" srcset="img/Scooters.png">
  <img src="img/Scooters.png" class="advantages-img" alt="Scooters">
</picture>
    <div class="advanteges-wrapper">
      <h2 class="advanteges-wrapper-main-tittle">Определите максимально подходящую вам модель <br> не теоретически, а
        на практике</h2>
      <h3 class="advanteges-wrapper-tittle">Тест-драйв поможет:</h3>
      <ul class="advanteges-wrapper-list">
        <li class="advanteges-wrapper-item">
          <svg width="22" height="22" class="advanteges-wrapper-item-svg">
            <use href="img/sprite.svg#check"></use>
          </svg>
          Понять подходит ли вам конкретная модель;
        </li>
        <li class="advanteges-wrapper-item">
          <svg width="22" height="22" class="advanteges-wrapper-item-svg">
            <use href="img/sprite.svg#check"></use>
          </svg>
          Испытать самокат в «реальной жизни»;
        </li>
        <li class="advanteges-wrapper-item">
          <svg width="22" height="22" class="advanteges-wrapper-item-svg">
            <use href="img/sprite.svg#check"></use>
          </svg>
          Оценить удобство хранения и эксплуатации;
        </li>
        <li class="advanteges-wrapper-item">
          <svg width="22" height="22" class="advanteges-wrapper-item-svg">
            <use href="img/sprite.svg#check"></use>
          </svg>
          Узнать реальные характеристики и возможности модели.
        </li>
      </ul>
    </div>
  </section>


  <section class="second-advantages container-second">
  <picture class="woman-on-scooter-img">
  <source type="image/webp" srcset="img/woman-on-scooter.webp">
  <source type="image/jpeg" srcset="img/woman-on-scooter.png">
  <img src="img/woman-on-scooter.png" class="woman-on-scooter-img" alt="woman-on-scooter">
</picture>
  
    <div class="second-advanteges-wrapper">
      <h2 class="advanteges-wrapper-main-tittle">Научим правильной<br>и безопасной езде в городе вас или вашего
        ребенка</h2>
      <h3 class="advanteges-wrapper-tittle">На обучении специалист расскажет:</h3>
      <ul class="advanteges-wrapper-list">
        <li class="advanteges-wrapper-item">
          <svg width="22" height="22" class="advanteges-wrapper-item-svg">
            <use href="img/sprite.svg#check"></use>
          </svg>
          Как подготовить самокат к поездке;
        </li>
        <li class="advanteges-wrapper-item">
          <svg width="22" height="22" class="advanteges-wrapper-item-svg">
            <use href="img/sprite.svg#check"></use>
          </svg>
          Как «завести» самокат;
        </li>
        <li class="advanteges-wrapper-item">
          <svg width="22" height="22" class="advanteges-wrapper-item-svg">
            <use href="img/sprite.svg#check"></use>
          </svg>
          Как вести себя во время поездки и обезопасить себя и окружающих;
        </li>
        <li class="advanteges-wrapper-item">
          <svg width="22" height="22" class="advanteges-wrapper-item-svg">
            <use href="img/sprite.svg#check"></use>
          </svg>
          Как складывать и раскладывать электросамокат;
        </li>
        <li class="advanteges-wrapper-item">
          <svg width="22" height="22" class="advanteges-wrapper-item-svg">
            <use href="img/sprite.svg#check"></use>
          </svg>
          Как ухаживать за своим девайсом.
        </li>
      </ul>
    </div>

  </section>


  <section class="available-models">
    <div class="container">
      <h2 class="available-models-title">Сейчас для тест-драйва и обучения доступны следующие модели</h2>

      <!-- Slider main container -->
      <div class="swiper">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
          <!-- Slides -->
          <div class="swiper-slide">
            <div class="swiper-slide-scooter">
              <div class="swiper-slide-header">
                <div class="swiper-slide-header-label">ХИТ
                </div>

                <a href="#" class="swiper-slide-header-comparison">
                  <img src="img/balance.svg" alt="balance">
                </a>
              </div>
              <div class="swiper-slide-footer">
                <h2 class="swiper-slide-footer-title"> Kugoo Kirin M4</h2>
                <div class="swiper-slide-footer-features">
                  <div class="swiper-slide-footer-features-item-first">
                    <svg width="18" height="18" class="swiper-slide-footer-features-item-svg">
                      <use href="img/sprite.svg#accum"></use>
                    </svg>
                    <div class="swiper-slide-footer-features-item-title">2000 mAh</div>
                  </div>
                  <div class="swiper-slide-footer-features-item-second">
                    <svg width="18" height="18" class="swiper-slide-footer-features-item-svg">
                      <use href="img/sprite.svg#power"></use>
                    </svg>
                    <div class="swiper-slide-footer-features-item-title">1,2 л.с.</div>
                  </div>
                  <div class="swiper-slide-footer-features-item-third">
                    <svg width="18" height="18" class="swiper-slide-footer-features-item-svg">
                      <use href="img/sprite.svg#speedometer"></use>
                    </svg>
                    <div class="swiper-slide-footer-features-item-title">60 км/ч</div>
                  </div>
                  <div class="swiper-slide-footer-features-item-fourth">
                    <svg width="18" height="18" class="swiper-slide-footer-features-item-svg">
                      <use href="img/sprite.svg#timer"></use>
                    </svg>
                    <div class="swiper-slide-footer-features-item-title">5 часов</div>
                  </div>
                </div>
                <div class="swiper-slide-footer-cost">
                  <div class="swiper-slide-footer-cost-price">
                    <p class="swiper-slide-footer-cost-price-old">39 900 ₽</p>
                    <p class="swiper-slide-footer-cost-price-current">29 900 ₽</p>
                  </div>
                  <div class="swiper-slide-footer-cost-buttons">
                    <a href="#" class="swiper-slide-footer-cost-item">
                      <div class="swiper-slide-footer-cost-item-button">
                        <svg width="20" height="20" class="swiper-slide-footer-cost-item-svg">
                          <use href="img/sprite.svg#cart2"></use>
                        </svg>
                      </div>
                    </a>
                    <a href="#" class="swiper-slide-footer-cost-item">
                      <div class="swiper-slide-footer-cost-item-button">
                        <svg width="20" height="20" class="swiper-slide-footer-cost-item-svg">
                          <use href="img/sprite.svg#favorite"></use>
                        </svg>
                      </div>
                    </a>
                  </div>
                </div>
                <button class="record-test" data-toggle="modal">Записаться на тест-драйв</button>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="swiper-slide-scooter">
              <div class="swiper-slide-header">
                <div class="swiper-slide-header-new">Новинка
                </div>
                <a href="#" class="swiper-slide-header-comparison">
                  <img src="img/balance.svg" alt="balance">
                </a>
              </div>
              <div class="swiper-slide-footer">
                <h2 class="swiper-slide-footer-title"> Kugoo Kirin M4</h2>
                <div class="swiper-slide-footer-features">
                  <div class="swiper-slide-footer-features-item-first">
                    <svg width="18" height="18" class="swiper-slide-footer-features-item-svg">
                      <use href="img/sprite.svg#accum"></use>
                    </svg>
                    <div class="swiper-slide-footer-features-item-title">2000 mAh</div>
                  </div>
                  <div class="swiper-slide-footer-features-item-second">
                    <svg width="18" height="18" class="swiper-slide-footer-features-item-svg">
                      <use href="img/sprite.svg#power"></use>
                    </svg>
                    <div class="swiper-slide-footer-features-item-title">1,2 л.с.</div>
                  </div>
                  <div class="swiper-slide-footer-features-item-third">
                    <svg width="18" height="18" class="swiper-slide-footer-features-item-svg">
                      <use href="img/sprite.svg#speedometer"></use>
                    </svg>
                    <div class="swiper-slide-footer-features-item-title">60 км/ч</div>
                  </div>
                  <div class="swiper-slide-footer-features-item-fourth">
                    <svg width="18" height="18" class="swiper-slide-footer-features-item-svg">
                      <use href="img/sprite.svg#timer"></use>
                    </svg>
                    <div class="swiper-slide-footer-features-item-title">5 часов</div>
                  </div>
                </div>
                <div class="swiper-slide-footer-cost">
                  <div class="swiper-slide-footer-cost-price">
                    <p class="swiper-slide-footer-cost-price-old">39 900 ₽</p>
                    <p class="swiper-slide-footer-cost-price-current">29 900 ₽</p>
                  </div>
                  <div class="swiper-slide-footer-cost-buttons">
                    <a href="#" class="swiper-slide-footer-cost-item">
                      <div class="swiper-slide-footer-cost-item-button">
                        <svg width="20" height="20" class="swiper-slide-footer-cost-item-svg">
                          <use href="img/sprite.svg#cart2"></use>
                        </svg>
                      </div>
                    </a>
                    <a href="#" class="swiper-slide-footer-cost-item">
                      <div class="swiper-slide-footer-cost-item-button">
                        <svg width="20" height="20" class="swiper-slide-footer-cost-item-svg">
                          <use href="img/sprite.svg#favorite"></use>
                        </svg>
                      </div>
                    </a>
                  </div>
                </div>
                <button class="record-test" data-toggle="modal">Записаться на тест-драйв</button>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="swiper-slide-scooter">
              <div class="swiper-slide-header">
                <div class="swiper-slide-header-label">ХИТ
                </div>

                <a href="#" class="swiper-slide-header-comparison">
                  <img src="img/balance.svg" alt="balance">
                </a>
              </div>
              <div class="swiper-slide-footer">
                <h2 class="swiper-slide-footer-title"> Kugoo Kirin M4</h2>
                <div class="swiper-slide-footer-features">
                  <div class="swiper-slide-footer-features-item-first">
                    <svg width="18" height="18" class="swiper-slide-footer-features-item-svg">
                      <use href="img/sprite.svg#accum"></use>
                    </svg>
                    <div class="swiper-slide-footer-features-item-title">2000 mAh</div>
                  </div>
                  <div class="swiper-slide-footer-features-item-second">
                    <svg width="18" height="18" class="swiper-slide-footer-features-item-svg">
                      <use href="img/sprite.svg#power"></use>
                    </svg>
                    <div class="swiper-slide-footer-features-item-title">1,2 л.с.</div>
                  </div>
                  <div class="swiper-slide-footer-features-item-third">
                    <svg width="18" height="18" class="swiper-slide-footer-features-item-svg">
                      <use href="img/sprite.svg#speedometer"></use>
                    </svg>
                    <div class="swiper-slide-footer-features-item-title">60 км/ч</div>
                  </div>
                  <div class="swiper-slide-footer-features-item-fourth">
                    <svg width="18" height="18" class="swiper-slide-footer-features-item-svg">
                      <use href="img/sprite.svg#timer"></use>
                    </svg>
                    <div class="swiper-slide-footer-features-item-title">5 часов</div>
                  </div>
                </div>
                <div class="swiper-slide-footer-cost">
                  <div class="swiper-slide-footer-cost-price">
                    <p class="swiper-slide-footer-cost-price-old">39 900 ₽</p>
                    <p class="swiper-slide-footer-cost-price-current">29 900 ₽</p>
                  </div>
                  <div class="swiper-slide-footer-cost-buttons">
                    <a href="#" class="swiper-slide-footer-cost-item">
                      <div class="swiper-slide-footer-cost-item-button">
                        <svg width="20" height="20" class="swiper-slide-footer-cost-item-svg">
                          <use href="img/sprite.svg#cart2"></use>
                        </svg>
                      </div>
                    </a>
                    <a href="#" class="swiper-slide-footer-cost-item">
                      <div class="swiper-slide-footer-cost-item-button">
                        <svg width="20" height="20" class="swiper-slide-footer-cost-item-svg">
                          <use href="img/sprite.svg#favorite"></use>
                        </svg>
                      </div>
                    </a>
                  </div>
                </div>
                <button class="record-test" data-toggle="modal">Записаться на тест-драйв</button>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="swiper-slide-scooter">
              <div class="swiper-slide-header">
                <div class="swiper-slide-header-new">Новинка
                </div>

                <a href="#" class="swiper-slide-header-comparison">
                  <img src="img/balance.svg" alt="balance">
                </a>
              </div>
              <div class="swiper-slide-footer">
                <h2 class="swiper-slide-footer-title"> Kugoo Kirin M4</h2>
                <div class="swiper-slide-footer-features">
                  <div class="swiper-slide-footer-features-item-first">
                    <svg width="18" height="18" class="swiper-slide-footer-features-item-svg">
                      <use href="img/sprite.svg#accum"></use>
                    </svg>
                    <div class="swiper-slide-footer-features-item-title">2000 mAh</div>
                  </div>
                  <div class="swiper-slide-footer-features-item-second">
                    <svg width="18" height="18" class="swiper-slide-footer-features-item-svg">
                      <use href="img/sprite.svg#power"></use>
                    </svg>
                    <div class="swiper-slide-footer-features-item-title">1,2 л.с.</div>
                  </div>
                  <div class="swiper-slide-footer-features-item-third">
                    <svg width="18" height="18" class="swiper-slide-footer-features-item-svg">
                      <use href="img/sprite.svg#speedometer"></use>
                    </svg>
                    <div class="swiper-slide-footer-features-item-title">60 км/ч</div>
                  </div>
                  <div class="swiper-slide-footer-features-item-fourth">
                    <svg width="18" height="18" class="swiper-slide-footer-features-item-svg">
                      <use href="img/sprite.svg#timer"></use>
                    </svg>
                    <div class="swiper-slide-footer-features-item-title">5 часов</div>
                  </div>
                </div>
                <div class="swiper-slide-footer-cost">
                  <div class="swiper-slide-footer-cost-price">
                    <p class="swiper-slide-footer-cost-price-old">39 900 ₽</p>
                    <p class="swiper-slide-footer-cost-price-current">29 900 ₽</p>
                  </div>
                  <div class="swiper-slide-footer-cost-buttons">
                    <a href="#" class="swiper-slide-footer-cost-item">
                      <div class="swiper-slide-footer-cost-item-button">
                        <svg width="20" height="20" class="swiper-slide-footer-cost-item-svg">
                          <use href="img/sprite.svg#cart2"></use>
                        </svg>
                      </div>
                    </a>
                    <a href="#" class="swiper-slide-footer-cost-item">
                      <div class="swiper-slide-footer-cost-item-button">
                        <svg width="20" height="20" class="swiper-slide-footer-cost-item-svg">
                          <use href="img/sprite.svg#favorite"></use>
                        </svg>
                      </div>
                    </a>
                  </div>
                </div>
                <button class="record-test" data-toggle="modal">Записаться на тест-драйв</button>
              </div>
            </div>
          </div>
        </div>


        <!-- If we need navigation buttons -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>

      </div>
    </div>
  </section>




  <section class="test-drive-bottom">
    <div class="container-second">
      <div class="test-drive-bottom-wrapper-main">
        <h2 class="test-drive-bottom-title">Нет нужной модели, которую хотите протестировать?</h2>
        <p class="test-drive-bottom-text">Оставьте заявку, и менеджер подберет нужный самокат</p>
        <div class="test-drive-bottom-wrapper">

          <form action="./handler.php" method="POST" class="test-drive-bottom-form">
            <div class="test-drive-bottom-form-wrapper">
              <input type="tel" name="userphone" class="input-test-drive-bottom phone-mask"
                placeholder="+7 (___) __ - __ - __" maxlength="18" required>
              <button type="submit" class="test-drive-bottom-button">Оставить заявку на тест-драйв</button>
            </div>
            <div class="test-drive-bottom-checkbox">
              <input type="checkbox" id="input" class="input-checkbox" name="checkbox">
              <label for="input" class="label"></label>
              <p class="test-drive-bottom-checkbox-text">Нажимая на кнопку, вы соглашаетесь на обработку персональных
                данных
                и <a href="#" class="policy">политикой конфиденциальности</a> </p>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

  <div class="footer-email">
    <div class="container">
      <div class="footer-email-wrapper">
        <div class="footer-email-wrapper-text">Оставьте свою почту и станьте первым, кто получит скидку на новые самокаты
        </div>
        <div class="footer-email-wrapper-form">
          <form action="./handler.php" method="POST" class="footer-email-wrapper-form">
            <input id="user-mail" type="email" class="footer-email-wrapper-form-input" name="usermail"
              placeholder="Введите Ваш email">
            <button type="submit" class="footer-email-wrapper-form-button">Подписаться</button>
          </form>

        </div>
      </div>
    </div>
  </div>

  <div class="bg-footer">
    <div class="container">
      <div class="footer-upper">

        <div class="footer-upper-wrapper">
          <p class="footer-upper-title">Каталог товаров</p>
          <ul class="footer-upper-list">
            <li class="footer-upper-item"><a href="#" class="footer-upper-link">Электросамокаты</a></li>
            <li class="footer-upper-item"><a href="#" class="footer-upper-link">Электроскутеры</a></li>
            <li class="footer-upper-item"><a href="#" class="footer-upper-link">Электровелосипеды</a></li>
            <li class="footer-upper-item"><a href="#" class="footer-upper-link">Электровелосипеды</a></li>
          </ul>
        </div>

        <div class="footer-upper-wrapper">
          <p class="footer-upper-title">Покупателям</p>
          <ul class="footer-upper-list second">
            <li class="footer-upper-item"><a href="#" class="footer-upper-link">Сервисный центр</a></li>
            <li class="footer-upper-item"><a href="#" class="footer-upper-link">Доставка и оплата</a></li>
            <li class="footer-upper-item"><a href="#" class="footer-upper-link">Рассрочка</a></li>
            <li class="footer-upper-item"><a href="#" class="footer-upper-link">Тест-драйв</a></li>
            <li class="footer-upper-item"><a href="#" class="footer-upper-link">Блог</a></li>
            <li class="footer-upper-item"><a href="#" class="footer-upper-link">Сотрудничество</a></li>
            <li class="footer-upper-item"><a href="#" class="footer-upper-link">Контакты</a></li>
            <li class="footer-upper-item"><a href="#" class="footer-upper-link">Акции</a></li>
          </ul>
        </div>

        <div class="footer-upper-wrapper contacts">
          <p class="footer-upper-title">Контакты</p>
          <ul class="footer-upper-list contacts-columns">
            <li class="footer-upper-item contacts-phone">
              <p class="call">Call-центр</p>
            </li>
            <li class="footer-upper-item contacts-phone"><a href="tel:+78005055461" class="footer-upper-tel">+7 (800)
                505-54-61</a></li>
            <li class="footer-upper-item">
              <p class="time">Пн-Вс 10:00 - 20:00</p>
            </li>
            <li class="footer-upper-item">
              <p class="call">Сервисный центр</p>
            </li>
            <li class="footer-upper-item contacts-phone"><a href="tel:+74993507692" class="footer-upper-tel">+7 (499)
                350-76-92</a></li>
            <li class="footer-upper-item">
              <p class="time">Пн-Вс 10:00 - 20:00</p>
            </li>
          </ul>
        </div>
        <div class="order-phone">
          <a href="#" class="order-phone link" data-toggle="modal">Заказать звонок</a>
        </div>

      </div>
      <div class="footer-middle">
        <div class="footer-middle-wrapper-first">
          <div class="footer-middle-wrapper-first-logo">
            <a href="#" class="main-logo">Kugoo</a>
          </div>
          <div class="footer-middle-wrapper-first-downloads">
            <a href="#" class="footer-middle-wrapper-first-downloads-links">
            <picture class="google-play">
  <source type="image/webp" srcset="img/GPlay.webp">
  <source type="image/jpeg" srcset="img/GPlay.png">
  <img src="img/GPlay.png" class="google-play" alt="google-play">
</picture>
              
            </a>
            <a href="#" class="footer-middle-wrapper-first-downloads-links">
            <picture class="appstore">
  <source type="image/webp" srcset="img/AppStore.webp">
  <source type="image/jpeg" srcset="img/AppStore.png">
  <img src="img/AppStore.png" class="appstore" alt="AppStore">
</picture>
              
            </a>
          </div>
        </div>
        <div class="footer-middle-wrapper-second">
          <a href="#" class="footer-middle-wrapper-second-link">
            <div class="footer-middle-wrapper-second-social">
              <div class="footer-middle-wrapper-second-social-item">
                <svg width="20" height="20" class="footer-middle-wrapper-second-social-svg">
                  <use href="img/sprite.svg#vk"></use>
                </svg>
              </div>
              <div class="footer-middle-wrapper-second-social-item">
                <h2 class="footer-middle-wrapper-second-social-title">Вконтакте</h2>
                <p class="members vk">3300</p>
              </div>
            </div>
          </a>
          <a href="#" class="footer-middle-wrapper-second-link">
            <div class="footer-middle-wrapper-second-social">
              <div class="footer-middle-wrapper-second-social-item">
                <svg width="20" height="20" class="footer-middle-wrapper-second-social-svg">
                  <use href="img/sprite.svg#YT"></use>
                </svg>
              </div>
              <div class="footer-middle-wrapper-second-social-item">
                <h2 class="footer-middle-wrapper-second-social-title">YouTube</h2>
                <p class="members YT">3603</p>
              </div>
            </div>
          </a>
          <a href="#" class="footer-middle-wrapper-second-link">
            <div class="footer-middle-wrapper-second-social">
              <div class="footer-middle-wrapper-second-social-item">
                <svg width="20" height="20" class="footer-middle-wrapper-second-social-svg">
                  <use href="img/sprite.svg#TG"></use>
                </svg>
              </div>
              <div class="footer-middle-wrapper-second-social-item">
                <h2 class="footer-middle-wrapper-second-social-title">Telegram</h2>
                <p class="members TG">432</p>
              </div>
            </div>
          </a>
        </div>
      </div>
      <div class="footer-lower">
        <div class="left-links">
          <a href="#" class="requisites">Реквизиты</a>
          <a href="#" class="link-policy">Политика конфиденциальности</a>
        </div>
        <div class="right-info">
          <div class="payments">
            <div class="payments-img">
              <svg width="35" height="24" class="payments-svg">
                <use href="img/sprite.svg#GPay"></use>
              </svg>
            </div>
            <div class="payments-img">
              <svg width="36" height="24" class="payments-svg">
                <use href="img/sprite.svg#APay"></use>
              </svg>
            </div>
            <div class="payments-img">
              <svg width="35" height="24" class="payments-svg">
                <use href="img/sprite.svg#VISA"></use>
              </svg>
            </div>
            <div class="payments-img">
              <svg width="35" height="24" class="payments-svg">
                <use href="img/sprite.svg#MC"></use>
              </svg>
            </div>
            <div class="payments-img">
              <svg width="35" height="24" class="payments-svg">
                <use href="img/sprite.svg#Maestro"></use>
              </svg>
            </div>
            <div class="payments-img">
              <svg width="35" height="24" class="payments-svg">
                <use href="img/sprite.svg#WB"></use>
              </svg>
            </div>
            <div class="payments-img">
              <svg width="35" height="24" class="payments-svg">
                <use href="img/sprite.svg#Qiwi"></use>
              </svg>
            </div>
          </div>
          <div class="online-chat">
            <p class="online-chat-title">Online чат:</p>
          </div>
          <a href="#" class="online-chat-link">
            <svg width="18" height="18" class="payments-svg">
              <use href="img/sprite.svg#Viber"></use>
            </svg>
          </a>
          <a href="#" class="online-chat-link">
            <svg width="18" height="18" class="payments-svg">
              <use href="img/sprite.svg#WhatsApp"></use>
            </svg>
          </a>
          <a href="#" class="online-chat-link">
            <svg width="18" height="18" class="payments-svg">
              <use href="img/sprite.svg#Telegram"></use>
            </svg>
          </a>


        </div>

      </div>
    </div>
  </div>

  <div class="modal">
    <div class="modal-dialog">
      <div class="modal-dialog-wrapper">
        <h2 class="modal-dialog-title">Запишитесь <br> на тест-драйв электросамоката</h2>
        <h3 class="modal-dialog-extra-title">и подберите модель для себя</h3>
        <p class="modal-dialog-text">Менеджер свяжется с вами в течение 5 минут, чтобы согласовать время.</p>
        <p class="modal-dialog-extra-text">Как с вами удобнее связаться?</p>
        <form action="#" method="POST" class="test-drive-bottom-form modal-dialog-form">
          <div class="test-drive-bottom-form-wrapper modal-dialog-form-wrapper">
            <input type="tel" name="userphone"
              class="input-test-drive-bottom modal-dialog-form-input phone-mask" placeholder="+7 (___) __ - __ - __"
              required maxlength="18">
            <button type="submit" class="test-drive-bottom-button modal-dialog-form-button">Оформить предзаказ</button>
          </div>
          <div class="test-drive-bottom-checkbox modal-dialog-checkbox">
            <input type="checkbox" id="modal-input" class="input-checkbox modal-checkbox" name="checkbox">
            <label for="modal-input" class="label"></label>
            <p class="test-drive-bottom-checkbox-text">Нажимая на кнопку, вы соглашаетесь на обработку персональных
              данных
              и <a href="#" class="policy">политикой конфиденциальности</a> </p>
          </div>
        </form>
      </div>
      <picture class="modal-dialog-img">
  <source type="image/webp" srcset="img/woman-on-scooter2.webp">
  <source type="image/jpeg" srcset="img/woman-on-scooter2.png">
  <img src="img/woman-on-scooter2.png" class="modal-dialog-img" alt="woman-on-scooter2">
</picture>
      <a href="#" class="modal-close" data-toggle="modal">
        <svg width="29" height="29" class="modal-close-svg">
          <use href="img/sprite.svg#close"></use>
        </svg>
      </a>
    </div>
  </div>




  <script src="./js/swiper-bundle.min.js"></script>
  <script src="./js/just-validate.production.min.js"></script>
  <script src="./js/main.js"></script>
</body>


</html>