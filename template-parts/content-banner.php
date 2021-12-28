<?php

    $page_template_slug = get_page_template_slug( get_the_ID() );
    $term = get_queried_object();

?>

<section class="main">
        <?php
            if(is_category()){
                ?>
                     <div class="main__slider">
                        <?php
                            $slides = get_field('1_3',$term);
                            if($slides)
                            {
                                foreach($slides as $slide)
                                {
                                    $image = $slide[1];
                                    if (!empty($image)){
                                        ?>  
                                        <div>
                                            <?php
                                                $img_link = $image['url'];;
                                                $img_webp = str_replace('uploads/','uploads-webpc/uploads/',$img_link);
                                                if(webItemExists($img_webp.'.webp')){
                                                    $image = kama_thumb_src(array('src' => $img_webp . '.webp','w' => 1850,'h' => 670));
                                                } else {
                                                    $image = kama_thumb_src(array('src' => $img_link ,'w' => 1850,'h' => 670));
                                                }
                                            ?>
                                            <img class="promo-onlymobil" src="<?php echo $image;?>">
                                        </div>
                                        <?php
                                    }
                                    
                                }
                            }
                        ?>
                    </div>
                    <div class="container">
                        <div class="main__content">
                            <?php 
                                ?>  
                                    <h1 class="main__title">
                                        <?php the_field('1_1', $term); ?>
                                    </h1>
                                <?php
                            ?>
                            <div class="main__desc">
                                <?php the_field('1_2',$term); ?>
                            </div>
                            <div class="btn btn-main" data-modal-contact>
                                <?php
                                    if(ICL_LANGUAGE_CODE == 'uk'){
                                        echo 'Залишити заявку';
                                    }else {
                                        echo 'Оставить заявку';
                                    }
                                ?>
                            </div>
                        </div>
                        <div class="main__blur"></div>
                    </div> 
                    <div class="main__back"></div>
                    <?php
                    if(!is_front_page())
                        {
                            ?>
                                <div class="breadcrumbs">
                                    <div class="container">
                                        <?php if( function_exists('kama_breadcrumbs')) kama_breadcrumbs(' » '); ?>
                                    </div>
                                </div>
                            <?php
                        }
                    ?>
                <?php
            }else {
                ?>
                 <div class="main__slider">
                    <?php
                        $slides = get_field('1_3');
                        if($slides)
                        {
                            foreach($slides as $slide)
                            {
                                $image = $slide[1];
                                if (!empty($image)){
                                    ?>  
                                    <div>
                                            <?php
                                                $img_link = $image['url'];;
                                                $img_webp = str_replace('uploads/','uploads-webpc/uploads/',$img_link);
                                                if(webItemExists($img_webp.'.webp')){
                                                    $image = kama_thumb_src(array('src' => $img_webp . '.webp','w' => 1850,'h' => 670));
                                                } else {
                                                    $image = kama_thumb_src(array('src' => $img_link ,'w' => 1850,'h' => 670));
                                                }
                                            ?>
                                        <img class="promo-onlymobil" src="<?php echo $image;?>">
                                    </div>
                                    <?php
                                }
                                
                            }
                        }
                    ?>
                </div>
                <div class="container">
                    <div class="main__content">
                        <?php 
                            if($page_template_slug === 'single-uslugi.php')
                            {
                                ?>

                                    <div class="main__title">
                                        <?php the_field('1_1'); ?>
                                    </div>

                                <?php
                            } else {
                                ?>  
                                    <h1 class="main__title">
                                        <?php the_field('1_1'); ?>
                                    </h1>
                                <?php
                            }
                        ?>
                        
                        <div class="main__desc">
                            <?php the_field('1_2'); ?>
                        </div>
                        <div class="btn btn-main" data-modal-contact>
                            <?php
                                if(ICL_LANGUAGE_CODE == 'uk'){
                                    echo 'Залишити заявку';
                                }else {
                                    echo 'Оставить заявку';
                                }
                            ?>
                        </div>
                    </div>
                    <div class="main__blur"></div>
                </div> 
                <div class="main__back"></div>
                <?php
                    if(!is_front_page())
                    {
                        ?>
                            <div class="breadcrumbs">
                                <div class="container">
                                    <?php if( function_exists('kama_breadcrumbs')) kama_breadcrumbs(' » '); ?>
                                </div>
                            </div>
                        <?php
                    }
                ?>
                <?php
            }
        ?>
       
</section>

