<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Утонченные сочетания и бархатные оттенки - вот то, что вы искали в этом сезоне. Время исследовать.">
    <meta name="keywords" content="бренды, магазин, одежда, мода, женское, бутик, коллекции">
    <!-- Responsive -->
    <!-- OG Tags -->
    <meta property="og:title" content="Womazing — Корзина">
    <meta property="og:description" content="Утонченные сочетания и бархатные оттенки - вот то, что вы искали в этом сезоне. Время исследовать.">
    <meta property="og:type" content="article">
    <meta property="og:image" content="https://sitename.ru/img/preview.jpg">
    <meta property="og:site_name" content="Womazing — Корзина">
    <meta http-equiv="imagetoolbar" content="no" />

    <!-- Styling -->
    <meta name="theme-color" content="#F1EADC">
    <link rel="apple-touch-icon" href="img/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="img/favicon.png">
    <!-- CSS -->
    <link rel="stylesheet" href="css/cart/main.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;500;700&display=swap" rel="stylesheet">
    <!-- TITLE -->
    <title>Womazing — Корзина</title>
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
<section class="offer-main">
    <div class="container">
        <div class="offer-wrapper">
            <div class="offer">
                <h1 class="offer__title">
                    Корзина
                </h1>
                <div class="offer__breadcrumbs-wrapper">
                    <a href="index.php" class="offer__breadcrumb">Главная</a>
                    <span class="offer__breadcrumb">—</span>
                    <a href="#" class="offer__breadcrumb">Корзина</a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="cart" id="cart">
    <div class="container">
        <div class="cart__content-wrapper">
            <div class="cart__titles-wrapper">
                <h4 class="cart__title">Товар</h4>
                <h4 class="cart__title">Цена</h4>
                <h4 class="cart__title">Количество</h4>
                <h4 class="cart__title">Всего</h4>
            </div>
            <div class="cart__product-wrapper">
                <a href="#" class="cart__product-cancel"></a>
                <div class="cart__image-wrapper">
                    <img src="img/home/collection-image-one.png" alt="Usa T-shirt" class="cart__image">
                </div>
                <p class="cart__product-text">
                    Футболка USA
                </p>
                <p class="cart__product-price">
                    $129
                </p>
                <div class="cart__count">
                    1
                </div>
                <p class="cart__total">
                    $129
                </p>
            </div>
            <div class="cart__btn-wrapper">
                <div class="cart__input-wrapper">
                    <input type="text" id="coupon" name="coupon" autocomplete="name" placeholder="Введите купон" required minlength="4" maxlength="8" size="25" />
                </div>
                <a href="#" class="cart__btn">Применить купон</a>
                <a href="#" class="cart__btn">Обновить корзину</a>
            </div>
            <div class="cart__summary-wrapper">
                <div class="cart__total-wrapper">
                    <p class="cart__summary-text">
                        Подытог:
                    </p>
                    <p class="cart__summary-value">
                        $129
                    </p>
                </div>
                <div class="cart__amount-wrapper">
                    <div class="cart__result-wrapper">
                        <div class="cart__result">
                            <h3 class="cart__result-text">
                                Итого:
                            </h3>
                            <h3 class="cart__result-value">
                                $129
                            </h3>
                        </div>
                        <a href="checkout.php" class="cart__result-btn">Оформить заказ</a>
                    </div>
                </div>
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
<script src="js/cart/main.js"></script>
<!-- SCRIPTS END -->
</body>

</html>