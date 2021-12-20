<footer class="footer">
        <div class="container">
            <div class="footer__top">
                <div class="footer__logo">
                    <img src="<?php echo bloginfo('template_url'); ?>/assets/icons/logo/logo.svg" alt="">
                    <div class="footer__logo-title">
                        тихая гавань
                    </div>
                </div>
                <div class="footer__wrapper">
                    <div class="footer__item">
                        <div class="footer__item-title">
                            Услуги
                        </div>
                        <nav>
                            <ul class="footer__item-menu">
                                <li>Уход за пожилыми людьми</li>
                                <li>Уход за лежачими больными</li>
                                <li>Уход за пожилыми с инвалидностью</li>
                                <li>Сиделка для пожилого человека</li>
                                <li>Реабилитация после инсульта</li>
                                <li>Реабилитация после инфаркта</li>
                            </ul>
                        </nav>
                    </div>
                    <div class="footer__item">
                        <div class="footer__item-title">
                            Наш Адрес:
                        </div>
                        <span class="footer__item-adress">
                            г. Запорожье, <br>
                            ул. Автозаводская, д. 30
                        </span>
                        <div class="footer__item-title">
                            Email:
                        </div>
                        <a class="footer__item-mail" href="mailto:infozp@gmail.com">infozp@gmail.com</a>
                    </div>
                    <div class="footer__item">
                        <div class="footer__item-title">
                            Позвоните нам:
                        </div>
                        <div class="footer__item-number">
                            <a href="tel:380686981255">+380 68 698 12 55</a>
                            <a href="tel:380971238877">+380 97 123 88 77</a>
                        </div>
                        <div class="btn h55px w247px mainbg mauto">
                            Проложить маршрут
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer__rights">
                <span>
                    2021 © Все права защищены 
                </span>
                <span>
                    Присоединяйтесь к нам в социальных сетях
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.92885 19.8577C15.4124 19.8577 19.8577 15.4124 19.8577 9.92885C19.8577 4.4453 15.4124 0 9.92885 0C4.4453 0 0 4.4453 0 9.92885C0 15.4124 4.4453 19.8577 9.92885 19.8577Z" fill="#77953B"/>
                        <path d="M12.4249 10.3172H10.6533V16.8078H7.96902V10.3172H6.69238V8.03616H7.96902V6.56006C7.96902 5.50448 8.47044 3.85156 10.6772 3.85156L12.6655 3.85988V6.07404H11.2228C10.9862 6.07404 10.6534 6.19227 10.6534 6.69581V8.03829H12.6595L12.4249 10.3172Z" fill="white"/>
                        </svg>                        
                </span>
            </div>
        </div>
    </footer>
    <div class="modal modal-contact" data-modal>
        <div class="modal__dialog">
            <div class="modal__content">
               <div class="modal__content-top">
                    <div class="modal__content-title">
                        Оставьте вашу заявку
                    </div>
                    <div class="modal__content-subtitle">
                        В ближайшее время мы свяжемся с Вами и ответим на все вопросы
                    </div>
               </div>
               <form class="modal__content-form">
                   <input type="text" placeholder="Имя" data-text>
                   <input type="text" placeholder="Телефон" data-number>
                   <button class="btn h55px w247px mainbg mauto">Отправить</button>
               </form>
            </div>
        </div>
    </div>
    <?php
        wp_footer();
    ?>
</body>
</html>