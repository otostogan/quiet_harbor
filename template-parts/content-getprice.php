<section class="getprice" style="background: url('<?php the_field('7_1'); ?>') no-repeat 50%/cover">
    <div class="container">
        <div class="getprice__title">
            <div class="title fz54 fff">
            <?php the_field('7_2'); ?>
            </div>
        </div>
        <div class="btn h55px w247px mainbg mauto" data-modal-contact>
            <?php
                if(ICL_LANGUAGE_CODE == 'uk'){
                    echo 'Отримати розрахунок';
                }else {
                    echo 'Получить расчет';
                }
            ?>
        </div>
    </div>
</section>