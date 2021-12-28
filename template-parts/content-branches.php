<?php
    $page_template_slug = get_page_template_slug( get_the_ID() );
?>
<section class="branches" <?php if($page_template_slug === "page-filialy.php"){echo 'style="background: none"';} ?>>
    <div class="container">
        <div class="branches__title">
            <div class="title fz54">
                <?php
                    if(ICL_LANGUAGE_CODE == 'uk'){
                        echo 'Наші філії';
                    }else {
                        echo 'Наши филиалы';
                    }
                ?>
            </div>
        </div>
        <div class="branches__wrapper">
            <?php

                $branches = get_tags( [
                    'order'        => 'ASC',
                    'fields'       => 'all',
                    'hide_empty'   => false,
                ]);
                

                
                
                foreach ($branches as $branche)
                {

                    $term = get_term( $branche->term_id);
                    
                    $link = get_field('page', $term);
                    $image_id = get_term_meta( $branche->term_id, '_thumbnail_id', 1 );
                    $image_url = wp_get_attachment_image_url( $image_id, 'full' );

                    $img_link = $image_url;
                    $img_webp = str_replace('uploads/','uploads-webpc/uploads/',$img_link);
                    if(webItemExists($img_webp.'.webp')){
                        $image = $img_webp.'.webp';
                    } else {
                        $image = $img_link;
                        
                    }
                    ?>
                        <a class="branches__item" href="<?php the_field('page', $term);?>">
                            <div class="branches__item-img">
                                <img src="<?php echo $image; ?>" alt="">
                            </div>
                            <div class="branches__item-text">
                                <?php echo $branche->name ?>
                            </div>
                        </a>
                    <?php
                }
            ?>
        </div>
        <?php            
            if($page_template_slug != "page-filialy.php")
            {
                ?>
                     <a class="btn h55px w247px mainbg mauto" href="<?php echo get_permalink(428); ?>">
                            <?php
                                if(ICL_LANGUAGE_CODE == 'uk'){
                                    echo 'Усі філії';
                                }else {
                                    echo 'Все филиалы';
                                }
                            ?>
                    </a>
                <?php
            }
        ?>
       
    </div>
</section>