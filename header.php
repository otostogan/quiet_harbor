<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Document</title>
    <?php
        wp_head();
    ?>
</head>
<body>
    <div class="margin"></div>
    <header class="header">
        <div class="container">
            <div class="header__wrapper">
                <div class="header__logo">
                        <img src="<?php echo bloginfo('template_url'); ?>/assets/icons/logo/logo.svg" alt="">
                        <div class="header__logo-title">
                            тихая гавань
                        </div>
                </div>
                <ul class="header__menu">
                    <li>
                        Услуги
                    </li>
                    <li>
                        Филиалы
                    </li>
                    <li>
                        Отзывы
                    </li>
                    <li>
                        Вопрос/Ответ
                    </li>
                    <li>
                        Статьи
                    </li>
                    <li>
                        Персонал
                    </li>
                    <li>
                        О пансионате
                    </li>
                    <li>
                        Контакты
                    </li>
                </ul>
                <div class="header__mobile">
                    <div class="subheader__contact">
                        <a href="tel:380686981255">+380 68 698 12 55</a>
                        <div class="btn">
                            Заказать звонок
                        </div>
                        <select class="subheader__contact-lang">
                            <option>RU</option>
                            <option>UK</option>
                        </select>
                        <div class="header__burger">
                            <div></div>
                            <div></div>
                            <div></div>
                        </div>
                    </div>
                </div>
                <div class="header__mobile-menu">
                    <div class="header__mobile-block">
                        <select class="subheader__location-list">
                            <option>Запорожье</option>
                            <option>Пункт 2</option>
                        </select>
                        <div class="subheader__contact">
                            <div class="btn">
                                Заказать звонок
                            </div>
                            <select class="subheader__contact-lang">
                                <option>RU</option>
                                <option>UK</option>
                            </select>
                        </div>
                        <a href="tel:380686981255" class="header__mobile-number">+380 68 698 12 55</a>
                        <ul class="header__menu">
                            <li>
                                Услуги
                            </li>
                            <li>
                                Филиалы
                            </li>
                            <li>
                                Отзывы
                            </li>
                            <li>
                                Вопрос/Ответ
                            </li>
                            <li>
                                Статьи
                            </li>
                            <li>
                                Персонал
                            </li>
                            <li>
                                О пансионате
                            </li>
                            <li>
                                Контакты
                            </li>
                        </ul>
                    </div>
                    <div class="header__mobile-close">
                        &#10006;
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="subheader">
        <div class="container">
            <div class="subheader__wrapper">
                <div class="subheader__wrapper-wrapper">
                    <div class="subheader__location">
                        <div class="subheader__location-text">
                            Выберите Вашу локацию
                        </div>
                        <select class="subheader__location-list">
                            <option>Запорожье</option>
                            <option>Пункт 2</option>
                        </select>
                    </div>
                    <div class="subheader__contact">
                        <a href="tel:380686981255">+380 68 698 12 55</a>
                        <div class="btn">
                            Заказать звонок
                        </div>
                        <select class="subheader__contact-lang">
                            <option>RU</option>
                            <option>UK</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>