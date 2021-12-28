<?php
    $page_template_slug = get_page_template_slug( get_the_ID() );
?>
<section class="conditions">
    <div class="container">
        <div class="conditions__title">
            <div class="title fz54"><?php the_field('5_1'); ?></div>
            <div class="subtitle"><?php the_field('5_2'); ?></div>
        </div>
        <?php
            ?>
                <div class="conditions__gallery">
                    <?php
                    $counter = 1;
                    $photos = get_field('5_3');
                    
                    foreach($photos as $photo)
                    {
                        $images = $photo[1];
                        if (!empty($images)){
                            ?>  
                            <?php
                                 $img_link = $images['url'];
                                 $img_webp = str_replace('uploads/','uploads-webpc/uploads/',$img_link);
                                 if(webItemExists($img_webp.'.webp')){
                                     $image = $img_webp.'.webp';
                                 } else {
                                     $image = $img_link;
                                 }
                            ?>
                                <img class="conditions__gallery-<?php echo $counter++; ?>" src="<?php echo $image;?>" alt="">
                            <?php
                        }
                    }
                    ?>
                </div>
            <?php
        ?>
        <?php
            if($page_template_slug != 'page-about.php')
            {
                ?>
                    <a class="btn mauto w247px h55px grey" href="<?php echo get_permalink(280); ?>">
                        <?php
                            if(ICL_LANGUAGE_CODE == 'uk'){
                                echo 'Детальніше';
                            }else {
                                echo 'Подробнее';
                            }
                        ?>
                            
                    </a>
                <?php
            }
        ?>
        
    </div>
</section>