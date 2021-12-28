<section class="services">
    <div class="container">
        <div class="services__wrapper">
            <?php
                $region = get_field('region');

                if($region === "cerkovi"){
                    $region = 'belaya-cerkovi';
                }
                if(!is_category())
                {
                    $services = new WP_Query(array('category_name' => 'uslugi', 'tag'=> $region, 'posts_per_page' => 6,));
                } else {
                    $services = new WP_Query(array('category_name' => 'uslugi', 'tag'=> $region, ));
                }
                
                    
                if ($services->have_posts())
                {
                    while ($services->have_posts()){
                        $services->the_post();
                      
                        ?>
                            <a class="services__item" style="text-decoration: none;" href="<?php echo get_permalink($post->ID); ?>">
                                <div class="services__item-img">
                                    <img src="<?php the_field('4_1'); ?>" alt="">
                                </div>
                                <div class="services__item-text">

                                    <?php the_field('4_2'); ?>
                                </div>
                            </a>
                        <?php
                    }
                        
                }
                wp_reset_postdata();
            ?>
        </div>
    </div>
</section>
