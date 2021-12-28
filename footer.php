<?php
    $phone = get_field('1',584);
    $trim = str_replace(" ", '', $phone);
    $no_plus = str_replace("+", '', $trim);

    $phone_2 = get_field('2',584);
    $trim_2 = str_replace(" ", '', $phone_2);
    $no_plus_2 = str_replace("+", '', $trim_2);

    $adress = get_field('3',584);
    $email = get_field('4',584);
?>
<footer class="footer">
        <div class="container">
            <div class="footer__top">
                <a class="footer__logo" href="<?php echo get_home_url();?>">
                    <img src="<?php echo bloginfo('template_url'); ?>/assets/icons/logo/logo.svg" alt="">
                    <div class="footer__logo-title">
                        <?php
                            if(ICL_LANGUAGE_CODE == 'uk'){
                                echo 'тиха гавань';
                            }else {
                                echo 'тихая гавань';
                            }
                        ?>
                    </div>
                </a>
                <div class="footer__wrapper">
                    <div class="footer__item">
                        <?php
                            $category_id = get_cat_ID( 'Услуги' );
                            $category_link = get_category_link( $category_id );
                        ?>
                        <a class="footer__item-title" href="<?php echo $category_link; ?>">
                            <?php
                                 if(ICL_LANGUAGE_CODE == 'uk'){
                                    echo 'Послуги';
                                }else {
                                    echo 'Услуги';
                                }
                            ?>
                            
                        </a>
                        
                            <?php
                                wp_nav_menu( [
                                    'menu'            => 'Меню footer',
                                    'container'       => 'ul',
                                    'menu_class'      => 'footer__item-menu',
                                    'echo'            => true,
                                    'fallback_cb'     => 'wp_page_menu',
                                    'items_wrap'      => '<ul class="%2$s">%3$s</ul>',
                                ] );
                            ?>
                           
                    </div>
                    <div class="footer__item">
                        <div class="footer__item-title">
                            <?php
                                if(ICL_LANGUAGE_CODE == 'uk'){
                                    echo 'НАШУ АДРЕСУ:';
                                }else {
                                    echo 'Наш Адрес:';
                                }
                            ?>
                            
                        </div>
                        <span class="footer__item-adress">
                            <?php echo $adress; ?>
                        </span>
                        <div class="footer__item-title">
                            Email:
                        </div>
                        <a class="footer__item-mail" href="mailto:infozp@gmail.com"><?php echo $email; ?></a>
                    </div>
                    <div class="footer__item">
                        <div class="footer__item-title">
                            <?php
                                if(ICL_LANGUAGE_CODE == 'uk'){
                                    echo 'ЗАТЕЛЕФОНУЙТЕ НАМ:';
                                }else {
                                    echo 'Позвоните нам:';
                                }
                            ?>
                            
                        </div>
                        <div class="footer__item-number">
                            <a href="tel:<?php echo $no_plus; ?>"><?php echo $phone; ?></a>
                            <a href="tel:<?php echo $no_plus_2; ?>"><?php echo $phone_2; ?></a>
                        </div>
                        <div class="btn h55px w247px mainbg mauto">
                            <?php
                                if(ICL_LANGUAGE_CODE == 'uk'){
                                    echo 'Прокласти маршрут';
                                }else {
                                    echo 'Проложить маршрут';
                                }
                            ?>
                           
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer__rights">
                <span>
                    <?php
                        if(ICL_LANGUAGE_CODE == 'uk'){
                            echo '2021 © Всі права захищені';
                        }else {
                            echo '2021 © Все права защищены ';
                        }
                    ?>
                    
                </span>
                <span>
                    
                    <?php
                        if(ICL_LANGUAGE_CODE == 'uk'){
                            echo 'Приєднуйтесь до нас у соціальних мережах';
                        }else {
                            echo 'Присоединяйтесь к нам в социальных сетях';
                        }
                    ?>
                    <a href="<?php the_field('5',584) ?>">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.92885 19.8577C15.4124 19.8577 19.8577 15.4124 19.8577 9.92885C19.8577 4.4453 15.4124 0 9.92885 0C4.4453 0 0 4.4453 0 9.92885C0 15.4124 4.4453 19.8577 9.92885 19.8577Z" fill="#77953B"/>
                            <path d="M12.4249 10.3172H10.6533V16.8078H7.96902V10.3172H6.69238V8.03616H7.96902V6.56006C7.96902 5.50448 8.47044 3.85156 10.6772 3.85156L12.6655 3.85988V6.07404H11.2228C10.9862 6.07404 10.6534 6.19227 10.6534 6.69581V8.03829H12.6595L12.4249 10.3172Z" fill="white"/>
                        </svg>  
                    </a>                      
                </span>
            </div>
        </div>
    </footer>
    <div class="modal modal-contact" data-modal>
        <div class="modal__dialog">
            <div class="modal__content">
               <div class="modal__content-top">
                    <div class="modal__content-title">
                        <?php
                            if(ICL_LANGUAGE_CODE == 'uk'){
                                echo 'Залишіть вашу заявку';
                            }else {
                                echo 'Оставьте вашу заявку';
                            }
                        ?>
                        
                    </div>
                    <div class="modal__content-subtitle">
                        
                        <?php
                            if(ICL_LANGUAGE_CODE == 'uk'){
                                echo "Найближчим часом ми зв'яжемося з Вами та відповімо на всі запитання";
                            }else {
                                echo 'В ближайшее время мы свяжемся с Вами и ответим на все вопросы';
                            }
                        ?>
                    </div>
               </div>
               <div class="modal__content-form">
                   <?php
                     echo do_shortcode('[contact-form-7 id="613" title="Контактная форма из модального окна"]');
                   ?>
               </div>
            </div>
        </div>
    </div>
    <script>
        jQuery(function($) {
            $(document).ready(function(){
                $('.select').change(function(){
                    window.location.href = $(this).val();
                });
            });
        });
        <?php
            if(is_category('otzyvy'))
            {
                if(ICL_LANGUAGE_CODE == 'uk'){
                    ?>
                        const formInfo = {
                            name: "Ім'я",
                            number: 'Телефон',
                            btn: 'Відправити',
                            textArea: 'Ваш відгук'
                        }
                    <?php
                }else {
                    ?>
                        const formInfo = {
                            name: 'Имя',
                            number: 'Телефон',
                            btn: 'Отправить',
                            textArea: 'Ваш отзыв'
                        }
                    <?php
                }
            } else 
            {
                if(ICL_LANGUAGE_CODE == 'uk'){
                    ?>
                        const formInfo = {
                            name: "Ім'я",
                            number: 'Телефон',
                            btn: 'Відправити',
                            textArea: 'Ваше питання'
                        }
                    <?php
                }else {
                    ?>
                        const formInfo = {
                            name: 'Имя',
                            number: 'Телефон',
                            btn: 'Отправить',
                            textArea: 'Ваш вопрос'
                        }
                    <?php
                }
            }
            
        ?>
        const username = document.querySelectorAll('input[name="username"]');
        const number = document.querySelectorAll('input[name="number"]');
        const formBtn = document.querySelectorAll('form .btn');
        const textArea = document.querySelectorAll('[name="textarea"]');
        

        username.forEach(item=>{
            item.setAttribute("placeholder", formInfo.name);
        });
        number.forEach(item=>{
            item.setAttribute("placeholder", formInfo.number);
        });
        formBtn.forEach(item=>{
            item.innerHTML = formInfo.btn;
        });
        textArea.forEach(item=>{
            item.setAttribute("placeholder", formInfo.textArea);
        });
        
    </script>
    <?php
        wp_footer();
    ?>
</body>
</html>