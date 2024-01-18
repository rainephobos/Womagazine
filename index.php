<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Утонченные сочетания и бархатные оттенки - вот то, что вы искали в этом сезоне. Время исследовать.">
	<meta name="keywords" content="бренды, магазин, одежда, мода, женское, бутик, коллекции">
    <!-- Responsive -->
    <!-- OG Tags -->
    <meta property="og:title" content="Womazing — Главная">
	<meta property="og:description" content="Утонченные сочетания и бархатные оттенки - вот то, что вы искали в этом сезоне. Время исследовать.">
	<meta property="og:type" content="article">
	<meta property="og:image" content="https://sitename.ru/img/preview.jpg">
	<meta property="og:site_name" content="Womazing — Главная">
    <meta http-equiv="imagetoolbar" content="no" />

    <!-- Styling -->
    <meta name="theme-color" content="#F1EADC">
	<link rel="apple-touch-icon" href="img/apple-touch-icon.png">
	<link rel="icon" type="image/png" href="img/favicon.png">
    <!-- CSS -->
	<link rel="stylesheet" href="css/home/main.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;500;700&display=swap" rel="stylesheet">
    <!-- SCRIPT -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
/>
    <!-- TITLE -->
	<title>Womazing — Главная</title>
</head>

<!-- HEADER START -->
<div class="wrapper-modal">
<div class="overlay-modal"></div>
<div class="header-modal">
    <div class="header-modal__content">
        <form action="mail.php" method="POST" class="modal-form__form form" id="formHeader">
            <span class="modal-window__close-btn"></span>
            <div class="modal-form__form_user">
                <label for="modal-form__form_user" class="modal-form__form_user-title">Заказать обратный звонок</label>
                <div class="modal-form__form_user-item">
                    <input class="modal-form__form_item" type="text" id="modal-form__form_user-name" name="name" placeholder="Имя" required size="25" />
                </div>
                <div class="modal-form__form_user-item">
                    <input class="modal-form__form_item" type="email" id="modal-form__form_user-email" name="email" placeholder="E-mail" required size="25" />
                </div>
                <div class="modal-form__form_user-item">
                    <input class="modal-form__form_item" type="tel" id="modal-form__form_user-tel" name="tel" placeholder="Телефон" required size="25" />
                </div>
            </div>
            <button class="modal-form__submit" data-submit>Заказать звонок</button>
        </form>
    </div>
    <div class="header-modal__success" id="formSuccess">
        <h3 class="modal-form__form_user-title">
            Отлично! Мы скоро вам перезвоним.
        </h3>
        <div class="header-modal__success-close-wrapper">
            <button class="header-modal__success-close">Закрыть</button>
        </div>
    </div>
</div>
</div>
<header class="header">
    <div class="header-wrapper header-sticky">
        <div class="nav-wrapper">
            <nav class="menu">
                <a href="index.php" class="menu__logo-wrapper">
                    <img src="img/logo.svg" alt="Womazing">
                    <span class="logo-wrapper__text">WOMAZING</span>
                </a>
                <ul class="menu__list">
                    <li class="menu__item menu__item_active">
                        <a href="index.php">
                            Главная
                        </a>
                    </li>
                    <li class="menu__item menu__item_active">
                        <a href="shop.php">
                            Магазин
                        </a>
                    </li>
                    <li class="menu__item menu__item_active">
                        <a href="brand.php">
                            О бренде
                        </a>
                    </li>
                    <li class="menu__item menu__item_active">
                        <a href="contacts.php">
                            Контакты
                        </a>
                    </li>
                </ul>
                <div class="hamburger">
                    <input id="hamburger__toggle" type="checkbox" />
                    <label class="hamburger__btn" for="hamburger__toggle">
                      <span></span>
                    </label>
                
                    <ul class="hamburger__box">
                      <li><a class="hamburger__item" href="index.php">Главная</a></li>
                      <li><a class="hamburger__item" href="shop.php">Магазин</a></li>
                      <li><a class="hamburger__item" href="brand.php">Бренд</a></li>
                      <li><a class="hamburger__item" href="contacts.php">Контакты</a></li>
                    </ul>
                </div>
                <div class="menu__phone-wrapper">
                    <a href="#" class="menu__phone-button">
                        <img class="menu__phone-button_hover" src="img/header-telephone-hover.svg" alt="telephone">
                    </a>
                    <a href="tel:+74958235412" class="menu__number">
                        +7 (495) 823-54-12
                    </a>
                    <a href="cart.php" class="menu__bucket-button">
                        <img src="img/header-bucket.svg" alt="bucket">
                    </a>
                </div>
            </nav>
        </div>
    </div>
</header>
<!-- HEADER END -->

<!-- MAIN START -->
    <section class="offer-main" id="offer-main">
        <div class="container">
            <div class="offer-wrapper">
                <div class="offer swiper" >
                    <div class="swiper-wrapper swiper-wrapper_header">
                        <div class="swiper-slide swiper-slide_header">
                            <div>
                                <h1 class="offer__title">
                                    Новые поступления в этом сезоне
                                </h1>
                                <p class="offer__text">
                                    Утонченные сочетания и бархатные оттенки - вот то, что вы искали в этом сезоне. Время исследовать.
                                </p>
                                <div class="offer__btn">
                                    <a href="#collection" class="offer__btn_left"></a>
                                    <a href="shop.php" class="btn offer__btn_right">
                                        Открыть магазин
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide swiper-slide_header">
                            <h1 class="offer__title offer__title_long">
                                Что-то новенькое. Мы заждались тебя.
                            </h1>
                            <p class="offer__text">
                                Надоело искать себя в сером городе? Настало время новых идей, свежих красок и вдохновения с Womazing!
                            </p>
                            <div class="offer__btn">
                                <a href="#collection" class="offer__btn_left"></a>
                                <a href="shop.php" class="btn offer__btn_right">
                                    Открыть магазин
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide swiper-slide_header">
                            <h1 class="offer__title">
                                Включай новый сезон с WOMAZING
                            </h1>
                            <p class="offer__text">
                                Мы обновили ассортимент - легендарные коллекции и новинки от отечественных дизайнеров.
                            </p>
                            <div class="offer__btn">
                                <a href="#collection" class="offer__btn_left"></a>
                                <a href="shop.php" class="btn offer__btn_right">
                                    Открыть магазин
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="offer__slider-nav swiper-pagination">
                        <span class="slider-nav__item slider-nav__item_active"></span>
                        <span class="slider-nav__item slider-nav__item_active"></span>
                        <span class="slider-nav__item slider-nav__item_active"></span>
                    </div>
                </div>
                
                <div class="offer-images-wrapper">
                    <img class="offer-image offer-image_main" src="img/home/header-image-main.png" alt="girl in jacket">
                    <img class="offer-image offer-image_left" src="img/home/header-image-left.png" alt="girl in hat">
                    <img class="offer-image offer-image_right" src="img/home/header-image-right.png" alt="girl in hat">
                </div>
                <div class="offer__background"></div>
            </div>
        </div>
    </section>
    <section class="collection" id="collection">
        <div class="container">
            
            <h2 class="collection__title">
                Новая коллекция
            </h2>
            <div class="collection__content-wrapper">
                <div class="collection__items-wrapper">
                    <div class="collection__item">
                        <div class="collection__item-image-wrapper">
                            <a href="one-item.php" class="collection__item-overlay"></a>
                            <img src="img/home/collection-arrow-right.svg" class="collection__next" alt="Перейти">
                            <img src="img/home/collection-image-one.png" class="collection__item-image collection__item-image-one">
                        </div>
                        <h4 class="collection__item-title">Футболка USA</h4>
                        <div class="collection__price-wrapper">
                            <span class="collection__item-price collection__item-price_crossed">$229</span>
                            <span class="collection__item-price">$129</span>
                        </div>
                    </div>
                    <div class="collection__item">
                        <div class="collection__item-image-wrapper">
                            <a href="one-item.php" class="collection__item-overlay"></a>
                            <img src="img/home/collection-arrow-right.svg" class="collection__next" alt="Перейти">
                            <img src="img/home/collection-image-two.png" class="collection__item-image collection__item-image-two">
                        </div>
                        <h4 class="collection__item-title">Купальник Glow</h4>
                        <span class="collection__item-price">$129</span>
                    </div>
                    <div class="collection__item">
                        <div class="collection__item-image-wrapper">
                            <a href="one-item.php" class="collection__item-overlay"></a>
                            <img src="img/home/collection-arrow-right.svg" class="collection__next" alt="Перейти">
                            <img src="img/home/collection-image-three.png" class="collection__item-image collection__item-image-three">
                        </div>
                        <h4 class="collection__item-title">Свитшот Sweet Shot</h4>
                        <span class="collection__item-price">$129</span>
                    </div>
                </div>
                <a href="shop.php" class="btn collection__button">
                    Открыть магазин
                </a>
            </div>
        </div>
    </section>
    <section class="advantages" id="advantages">
        <div class="container">
            <h2 class="advantages__title">Что для нас важно</h2>
            <div class="advantages__items-wrapper">
                <div class="advantages__item">
                    <div class="advantages__image-wrapper">
                        <img src="/img/home/advantages-quality.svg" alt="check" class="advantages__image advantages__image_one">
                    </div>
                    <h3 class="advantages__item-title">
                        Качество
                    </h3>
                    <p class="advantages__item-text">
                        Наши профессионалы работают на лучшем оборудовании для пошива одежды беспрецедентного<br>качества
                    </p>
                </div>
                <div class="advantages__item">
                    <div class="advantages__image-wrapper">
                        <img src="/img/home/advantages-speed.svg" alt="check" class="advantages__image advantages__image_two">
                    </div>
                    <h3 class="advantages__item-title">
                        Скорость
                    </h3>
                    <p class="advantages__item-text">
                        Благодаря отлаженной системе в Womazing мы можем отшивать до 20-ти единиц продукции в наших собственных цехах
                </div>
                <div class="advantages__item">
                    <div class="advantages__image-wrapper">
                        <img src="/img/home/advantages-responsibility.svg" alt="check" class="advantages__image advantages__image_three">
                    </div>
                    <h3 class="advantages__item-title">
                        Ответственность
                    </h3>
                    <p class="advantages__item-text">
                        Мы заботимся о людях и планете. Безотходное производство и комфортные условия труда - все<br>это Womazing
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="dreamteam" id="dreamteam">
        <div class="container">
            <h2 class="dreamteam__title">
                Команда мечты Womazing
            </h2>
            <div class="dreamteam__wrapper">
                <div class="dreamteam__slider swiper2">
                    <div class="dreamteam__image-wrapper swiper-wrapper">
                        <div class="swiper-slide">
                            <img class="swiper2-img" src="img/home/dreamteam-image-three.png" alt="#">
                        </div>
                        <div class="swiper-slide">
                            <img class="swiper2-img" src="img/home/dreamteam-image-two.png" alt="#">
                        </div>
                        <div class="swiper-slide">
                            <img class="swiper2-img" src="img/home/dreamteam-image-one.png" alt="#">
                        </div>
                    </div>
                    <div class="dreamteam__slider-button-wrapper swiper-pagination">
                            <span class="dreamteam__slider-button"></span>
                            <span class="dreamteam__slider-button "></span>
                            <span class="dreamteam__slider-button"></span>
                        </div>
                </div>
                <span class="dreamteam__slider-arrow dreamteam__slider-arrow-right swiper-button-next"></span>
                <span class="dreamteam__slider-arrow dreamteam__slider-arrow-left swiper-button-prev"></span>
                <div class="dreamteam__content-wrapper">
                    <h3 class="dreamteam__content-title">
                        Для каждой
                    </h3>
                    <p class="dreamteam__content-text dreamteam__content-text_top">
                        Каждая девушка уникальна. Однако, мы схожи в миллионе мелочей.
                    </p>
                    <p class="dreamteam__content-text dreamteam__content-text_bottom">
                        Womazing ищет эти мелочи и создает прекрасные вещи, которые выгодно подчеркивают достоинства каждой девушки.
                    </p>
                    <a href="brand.php" class="dreamteam__content-link">
                        Подробнее о бренде
                        <span class="dreamteam__link-underline"></span>
                    </a>
                    
                </div>
            </div>
        </div>
    </section>
<!-- MAIN END -->

<!-- FOOTER START -->
    <footer class="footer">
        <div class="container">
            <div class="footer-wrapper">
                <div class="footer__privacy-wrapper">
                    <div class="footer__logo-wrapper">
                        <img src="img/logo.svg" alt="Womazing">
                        <span class="logo-wrapper__text">WOMAZING</span>
                    </div>
                    <div class="footer__privacy-links">
                        <a href="#">© Все права защищены</a>
                        <a href="#">Политика конфиденциальности</a>
                        <a href="#">Публичная оферта</a>
                    </div>
                </div>
                <div class="footer__nav-wrapper">
                    <nav class="footer__nav">
                        <ul class="footer__nav-list">
                            <li class="nav-list__item">
                                <a href="index.php">
                                    Главная
                                </a>
                            </li>
                            <li class="nav-list__item">
                                <a href="shop.php">
                                    Магазин
                                </a>
                            </li>
                            <li class="nav-list__item">
                                <a href="brand.php">
                                    О бренде
                                </a>
                            </li>
                            <li class="nav-list__item">
                                <a href="contacts.php">
                                    Контакты
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <div class="footer__assortment-wrapper">
                        <div class="footer__assortment-list">
                            <a href="#" class="footer__assortiment-item">Пальто</a>
                            <a href="#" class="footer__assortiment-item">Свитшоты</a>
                            <a href="#" class="footer__assortiment-item">Кардиганы</a>
                            <a href="#" class="footer__assortiment-item">Толстовки</a>
                        </div>
                    </div>
                </div>
                <div class="footer__contacts-wrapper">
                    <a href="tel:+380448235412" class="footer__contacts-number">
                        +38 (044) 823-54-12
                    </a>
                    <a href="email:hello@womazing.com" class="footer__contacts-email">
                        hello@womazing.com
                    </a>
                    <div class="footer__social">
                        <a href="#" class="footer__social-item footer__social-item_instagram"></a>
                        <a href="#" class="footer__social-item footer__social-item_facebook"></a>
                        <a href="#" class="footer__social-item footer__social-item_twitter"></a>
                    </div>
                    <span class="footer__cards"></span>
                </div>
            </div>
        </div>
    </footer>
<!-- FOOTER END -->

<!-- SCRIPTS START -->
<script src="js/jquery-3.7.1.min.js"></script>
<script src="js/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="js/home/main.js"></script>
<!-- SCRIPTS END -->

</body>
</html>
