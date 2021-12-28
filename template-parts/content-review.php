<section class="review">
    <div class="container">
        <div class="review__title">
            <div class="title fz54">
                
                <?php
                    if(ICL_LANGUAGE_CODE == 'uk'){
                        echo 'Відгуки про наш пансіонат';
                    }else {
                        echo 'Отзывы о нашем пансионате';
                    }
                ?>
            </div>
        </div>
        <div class="review__slider" data-arrow="<?php echo bloginfo('template_url'); ?>/assets/icons/">
            <?php
            
            $args = array(
                'category_name' => 'otzyvy',
                'orderby' => 'data',
                'order' => 'ASC'
            );
            $reviews = get_posts($args);
            foreach($reviews as $review)
            {
                ?>
                    <div class="review__slide">
                        <div class="review__slide-text">
                            <?php the_field('1', $review->ID)?>
                        </div>
                        <div class="review__slide-author">
                            <img src=" <?php the_field('3', $review->ID)?>" alt="">
                            <span>
                                <?php the_field('2', $review->ID)?>
                            </span>
                        </div>
                    </div>
                <?php
            }
            
            ?>
        </div>
    </div>
</section>