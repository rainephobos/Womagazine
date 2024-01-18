<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Утонченные сочетания и бархатные оттенки - вот то, что вы искали в этом сезоне. Время исследовать.">
	<meta name="keywords" content="бренды, магазин, одежда, мода, женское, бутик, коллекции">
    <!-- Responsive -->
    <!-- OG Tags -->
    <meta property="og:title" content="Womazing — Оформление заказа">
	<meta property="og:description" content="Утонченные сочетания и бархатные оттенки - вот то, что вы искали в этом сезоне. Время исследовать.">
	<meta property="og:type" content="article">
	<meta property="og:image" content="https://sitename.ru/img/preview.jpg">
	<meta property="og:site_name" content="Womazing — Оформление заказа">
    <meta http-equiv="imagetoolbar" content="no" />

    <!-- Styling -->
    <meta name="theme-color" content="#F1EADC">
	<link rel="apple-touch-icon" href="img/apple-touch-icon.png">
	<link rel="icon" type="image/png" href="img/favicon.png">
    <!-- CSS -->
	<link rel="stylesheet" href="css/checkout/main.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;500;700&display=swap" rel="stylesheet">
    <!-- TITLE -->
	<title>Womazing — Оформление заказа</title>
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
<section class="offer-main">
    <div class="container">
        <div class="offer-wrapper">
            <div class="offer">
                <h1 class="offer__title">
                    Оформление заказа
                </h1>
                <div class="offer__breadcrumbs-wrapper">
                    <a href="index.php" class="offer__breadcrumb">Главная</a>
                    <span class="offer__breadcrumb">—</span>
                    <a href="#" class="offer__breadcrumb">Оформление заказа</a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="checkout" id="checkout">
    <div class="container">
        <form action="" method="get" class="checkout__wrapper">
            <div class="checkout__data-wrapper">
                <div class="checkout__form_user">
                    <label for="checkout__form_user" class="checkout__form_user-title">Данные покупателя</label>
                    <div class="checkout__form_user-item">
                        <input class="checkout__form_item" type="text" id="checkout__form_user-name" name="checkout__form_user-name" autocomplete="name" placeholder="Имя" required size="25" />
                    </div>
                    <div class="checkout__form_user-item">
                        <input class="checkout__form_item" type="email" id="checkout__form_user-email" name="checkout__form_user-email" autocomplete="email" placeholder="E-mail" required size="25" />
                    </div>
                    <div class="checkout__form_user-item">
                        <input class="checkout__form_item" type="tel" id="checkout__form_user-tel" name="checkout__form_user-tel" autocomplete="tel" placeholder="Телефон" required size="25" />
                    </div>
                </div>
                <div class="checkout__form_adress">
                    <label for="checkout__form_adress" class="checkout__form_adress-title">Адрес получателя</label>
                    <div class="checkout__form_adress-item">
                        <input class="checkout__form_item" type="text" id="checkout__form_adress-country" name="checkout__form_adress-country" autocomplete="country" placeholder="Страна" required size="25" />
                    </div>
                    <div class="checkout__form_adress-item">
                        <input class="checkout__form_item" type="text" id="checkout__form_adress-city" name="checkout__form_adress-city" placeholder="Город" required size="25" />
                    </div>
                    <div class="checkout__form_adress-item">
                        <input class="checkout__form_item" type="text" id="checkout__form_adress-street" name="checkout__form_adress-street" placeholder="Улица" required size="25" />
                    </div>
                    <div class="checkout__form_adress-item">
                        <input class="checkout__form_item" type="text" id="checkout__form_adress-house" name="checkout__form_adress-house" placeholder="Дом" required size="25" />
                    </div>
                    <div class="checkout__form_adress-item">
                        <input class="checkout__form_item" type="text" id="checkout__form_adress-flat" name="checkout__form_adress-flat" placeholder="Квартира" required size="25" />
                    </div>
                </div>
                <div class="checkout__form_comments">
                    <label for="checkout__form_comments" class="checkout__form_comments-title">Комментарии</label>
                    <textarea for="checkout__form_comments" class="checkout__form_comments-item" type="text" placeholder="Введите текст" rows="5" cols="33"></textarea>

                </div>
            </div>
            <div class="checkout__order-wrapper">
                <div class="checkout__total">
                    <h3 class="total__title">
                        Ваш заказ
                    </h3>
                    <div class="total__content">
                        <div class="total__content-wrapper total__content-wrapper_left">
                            <p class="total__content-text">Товар</p>
                            <p class="total__content-text">Футболка USA</p>
                            <p class="total__content-text">Подытог</p>
                        </div>
                        <div class="total__content-wrapper total__content-wrapper_right">
                            <p class="total__content-text">Всего</p>
                            <p class="total__content-text">$129</p>
                            <p class="total__content-text">$129</p>
                        </div>
                    </div>
                    <div class="total__price-wrapper">
                        <p class="total__price-text">Итого</p>
                        <p class="total__price-text">$129</p>
                    </div>
                </div>
                <div class="checkout__payment">
                    <h3 class="payment__title">Способ оплаты</h3>
                    <div class="payment__method-wrapper">
                        <input type="radio" class="payment__method" id="payment__method" name="payment__method" value="Оплата наличными" checked />
                        <label for="payment__method">Оплата наличными</label>
                    </div>
                    <div class="payment__submit-wrapper">
                        <input class="payment__submit" type="submit" value="Разместить заказ">
                    </div>
                </div>
            </div>
        </form>
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
<script src="js/checkout/main.js"></script>
<!-- SCRIPTS END -->

</body>
</html>