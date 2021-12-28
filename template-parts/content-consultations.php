<?php

    $term = get_queried_object();
    if(is_category('otzyvy')){
        ?>
            <section class="consultation" style="background: url('<?php the_field('9_3', $term); ?>') no-repeat 50%/cover">
                <div class="container">
                    <div class="consultation__title">
                        <div class="title fz54">
                            <?php the_field('9_1', $term); ?>
                        </div>
                        <div class="subtitle fcolor">
                            <?php the_field('9_2', $term); ?>
                        </div>
                    </div>
                    <div class="consultation__wrapper">
                        <div class="consultation__form">
                            <?php
                                echo do_shortcode('[contact-form-7 id="615" title="Получите бесплатную консультацию"]')
                            ?>
                        </div>
                    </div>
                </div>
            </section>
        <?php
    }elseif(is_category())
    {
        ?>
            <section class="consultation" style="background: url('<?php the_field('9_3', $term); ?>') no-repeat 50%/cover">
                <div class="container">
                    <div class="consultation__title">
                        <div class="title fz54">
                            <?php the_field('9_1', $term); ?>
                        </div>
                        <div class="subtitle fcolor">
                            <?php the_field('9_2', $term); ?>
                        </div>
                    </div>
                    <div class="consultation__wrapper">
                        <div class="consultation__form">
                            <?php
                                echo do_shortcode('[contact-form-7 id="615" title="Получите бесплатную консультацию"]')
                            ?>
                        </div>
                    </div>
                </div>
            </section>
        <?php
    }else{
        ?>
            <section class="consultation" style="background: url('<?php the_field('9_3'); ?>') no-repeat 50%/cover">
                <div class="container">
                    <div class="consultation__title">
                        <div class="title fz54">
                            <?php the_field('9_1'); ?>
                        </div>
                        <div class="subtitle fcolor">
                            <?php the_field('9_2'); ?>
                        </div>
                    </div>
                    <div class="consultation__wrapper">
                        <div class="consultation__form">
                            <?php
                                echo do_shortcode('[contact-form-7 id="615" title="Получите бесплатную консультацию"]')
                            ?>
                        </div>
            
                    </div>
                </div>
            </section>
        <?php
    }

?>
