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
                                            <img class="promo-onlymobil" src="<?php echo $image['url'];?>" alt="<?php echo $image['alt'];?>">
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
                                        <img class="promo-onlymobil" src="<?php echo $image['url'];?>" alt="<?php echo $image['alt'];?>">
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
            }
        ?>
       
</section>
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
