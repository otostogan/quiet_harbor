<section class="specialist">
    <div class="container">
        <div class="specialist__title">
            <div class="title fz54">
                <?php
                    if(ICL_LANGUAGE_CODE == 'uk'){
                        echo 'Наші спеціалісти';
                    }else {
                        echo 'Наши специалисты';
                    }
                ?>
            </div>
        </div>
        <div class="specialist__items">
            <?php
                if($region === "cerkovi"){
                    $region = 'belaya-cerkovi';
                }
                if(is_category())
                {
                    $args = array(
                        'category_name' => 'nash-personal',
                        'tag' => $region,
                        'orderby' => 'data',
                        'order' => 'ASC'
                    );
                }else {
                    $args = array(
                        'category_name' => 'nash-personal',
                        'tag' => $region,
                        'posts_per_page' => 6,
                        'orderby' => 'data',
                        'order' => 'ASC'
                    );
                }
               
                $category_id = get_cat_ID( 'Специалисты' );
                $personal = get_posts($args);
                foreach($personal as $item)
                {
                    ?>
                        <a class="specialist__item" href="<?php echo get_permalink($item->ID); ?>">
                            <div class="specialist__item-img">
                                <?php
                                    $img_link = get_field('1_1', $item->ID);
                                    $img_webp = str_replace('uploads/','uploads-webpc/uploads/',$img_link);
                                    if(webItemExists($img_webp.'.webp')){
                                        $image = $img_webp.'.webp';
                                    } else {
                                        $image = $img_link;
                                        
                                    }
                                ?>
                                <img src="<?php echo $image; ?>" alt="">
                            </div>
                            <div class="specialist__item-body">
                                <div class="specialist__item-title">
                                    <?php the_field('1_2', $item->ID) ?>
                                </div>
                                <div class="specialist__item-text">
                                    <?php the_field('1_3', $item->ID) ?>
                                </div>
                            </div>
                        </a>
                    <?php
                }
            ?>
        </div>
        <?php
            if(!is_category())
            {
                ?>
                    <a href="<?php echo get_category_link($category_id); ?>" class="btn mauto w247px h55px mainbg">
                        <?php
                            if(ICL_LANGUAGE_CODE == 'uk'){
                                echo 'Весь персонал';
                            }else {
                                echo 'Весь персонал';
                            }
                        ?>
                    </a>
                <?php
            }
        ?>
        
    </div>
</section>