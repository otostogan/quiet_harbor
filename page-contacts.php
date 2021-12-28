<?php
/*
Template Name: Контакты 
*/

get_header();


get_template_part('template-parts/content', 'banner');

?>

    <div class="contact">
        <div class="container">
            <div class="contact__wrapper">
                <div class="contact__wrapper-info">
                    <div class="contact__item">
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
                    <div class="contact__item">
                        <div class="footer__item-title">
                            Позвоните нам:
                        </div>
                        <div class="footer__item-number">
                            <a href="tel:380686981255">+380 68 698 12 55</a>
                            <a href="tel:380971238877">+380 97 123 88 77</a>
                        </div>
                    </div>
               </div>
               <div class="contact__map">
                   <!-- <?php echo do_shortcode('[wpgmza id="1"]'); ?> -->
                   <div style="width: 100%">
                        <iframe width="100%" height="600" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=%D0%B3.%20%D0%97%D0%B0%D0%BF%D0%BE%D1%80%D0%BE%D0%B6%D1%8C%D0%B5,%20%D1%83%D0%BB.%20%D0%90%D0%B2%D1%82%D0%BE%D0%B7%D0%B0%D0%B2%D0%BE%D0%B4%D1%81%D0%BA%D0%B0%D1%8F,%20%D0%B4.%2030+(My%20Business%20Name)&amp;t=&amp;z=16&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a href="https://www.gps.ie/sport-gps/">bike gps</a>
                        </iframe>
                    </div>
               </div>
            </div>
        </div>
    </div>

<?php
get_template_part('template-parts/content', 'consultations');

get_footer();
?>