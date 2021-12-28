<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title><?php  wp_title(); ?></title>
    <?php
        wp_head();
        ?>
            <style>
                @media (max-width: 992px){
                    <?php
                        $photos = get_field('5_3');
                        if($photos and count($photos) > 6)
                        {
                            $row_count = 0;
                            foreach($photos as $photo)
                            {
                                $style_count++;
                                
                                if($style_count > 6){
                                    $selector = '.conditions__gallery-'.$style_count;
                                    ?>
                                        <?php echo $selector ?>{
                                            <?php
                                               if($row_count === 0)
                                               {
                                                    echo 'grid-column-start: 1;
                                                          grid-column-end: 3;';
                                                          $row_count++;
                                               }elseif($row_count === 1)
                                               {
                                                    echo 'grid-column-start: 3;
                                                          grid-column-end: 5;';
                                                    $row_count = 0;
                                               }
                                            ?>
                                        }
                                    <?php                                    
                                }
                            }
                        }
                    ?>
                }
            </style>
        <?php
        $phone = get_field('1',584);
        $trim = str_replace(" ", '', $phone);
        $no_plus = str_replace("+", '', $trim);
    ?>
</head>
<body>
    <div id="page-preloader" class="preloader">
        <div class="loader"></div>
    </div>
    <header class="header">
        <div class="container">
            <div class="header__wrapper">
                <a href="<?php echo get_home_url(); ?>" class="header__logo">
                    <img src="<?php echo bloginfo('template_url'); ?>/assets/icons/logo/logo.svg" alt="">
                    <div class="header__logo-title">
                        
                        <?php
                        
                        if(ICL_LANGUAGE_CODE == 'uk'){
                            echo 'тиха гавань';
                        }else {
                            echo 'тихая гавань';
                        }
                        
                        ?>
                    </div>
                </a>
                            <?php
                                wp_nav_menu( [
                                    'menu'            => 'Главное меню',
                                    'container'       => 'ul',
                                    'menu_class'      => 'header__menu',
                                    'echo'            => true,
                                    'fallback_cb'     => 'wp_page_menu',
                                    'items_wrap'      => '<ul class="%2$s">%3$s</ul>',
                                ] );
                            ?>
                <div class="header__mobile">
                    <div class="subheader__contact">
                        <a href="tel:<?php  echo $no_plus;?>"><?php echo $phone; ?></a>
                        <div class="btn">
                            
                            <?php
                        
                            if(ICL_LANGUAGE_CODE == 'uk'){
                                echo 'Замовити дзвінок';
                            }else {
                                echo 'Заказать звонок';
                            }
                            
                            ?>
                        </div>
                        <div class="subheader__contact-lang">
                            <?php do_action( 'wpml_add_language_selector' ); ?>
                        </div>
                        <div class="header__burger">
                            <div></div>
                            <div></div>
                            <div></div>
                        </div>
                    </div>
                </div>
                <div class="header__mobile-menu">
                    <div class="header__mobile-block">
                        <select class="subheader__location-list select">
                            <?php
                            
                                $branches = get_tags( [
                                    'order'        => 'ASC',
                                    'fields'       => 'all',
                                    'hide_empty'   => false,
                                ]);
                                
                                $reg = get_field('region');
                                
                                
                                foreach ($branches as $branche)
                                {
                                    if($reg === "cerkovi")
                                    {
                                        $reg = 'belaya-cerkovi';
                                    }
                                    $term = get_term( $branche->term_id);
                                    $slug = $branche->slug;
                                    ?>
                                        <?php
                                            if($reg === $slug)
                                            {
                                                ?>
                                                    <option selected value="<?php the_field('page', $term);?>"><?php echo $branche->name ?></option>
                                                <?php
                                            }else{
                                                ?>
                                                    <option  value="<?php the_field('page', $term);?>"><?php echo $branche->name ?></option>
                                                <?php
                                            }
                                        ?>
                                        
                                    <?php
                                }

                            ?>
                        </select>
                        <div class="subheader__contact">
                            <div class="btn">
                                Заказать звонок
                            </div>
                            <div class="subheader__contact-lang">
                                <?php do_action( 'wpml_add_language_selector' ); ?>
                            </div>
                        </div>
                        <a href="tel:<?php  echo $no_plus;?>" class="header__mobile-number"><?php echo $phone; ?></a>
                            <?php
                                wp_nav_menu( [
                                    'menu'            => 'Главное меню',
                                    'container'       => 'ul',
                                    'menu_class'      => 'header__menu',
                                    'echo'            => true,
                                    'fallback_cb'     => 'wp_page_menu',
                                    'items_wrap'      => '<ul class="%2$s">%3$s</ul>',
                                ] );
                            ?>
                        </ul>
                    </div>
                    <div class="header__mobile-close">
                        &#10006;
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="subheader">
        <div class="container">
            <div class="subheader__wrapper">
                <div class="subheader__wrapper-wrapper">
                    <div class="subheader__location">
                        <div class="subheader__location-text">
                            <?php
                                 if(ICL_LANGUAGE_CODE == 'uk'){
                                    echo 'Виберіть Вашу локацію';
                                }else {
                                    echo 'Выберите Вашу локацию';
                                }
                            ?>
                        </div>
                        <select class="subheader__location-list select">
                            <?php
                            
                            $branches = get_tags( [
                                'order'        => 'ASC',
                                'fields'       => 'all',
                                'hide_empty'   => false,
                            ]);
                            
                            $reg = get_field('region');
                                                        
                            foreach ($branches as $branche)
                            {
                                if($reg === "cerkovi")
                                {
                                    $reg = 'belaya-cerkovi';
                                }
                                $term = get_term( $branche->term_id);
                                $slug = $branche->slug;
                                ?>
                                    <?php
                                        if($reg === $slug)
                                        {
                                            ?>
                                                <option selected value="<?php the_field('page', $term);?>"><?php echo $branche->name ?></option>
                                            <?php
                                        }else{
                                            ?>
                                                <option  value="<?php the_field('page', $term);?>"><?php echo $branche->name ?></option>
                                            <?php
                                        }
                                    ?>
                                    
                                <?php
                            }

                            ?>
                        </select>
                    </div>
                    <div class="subheader__contact">
                        <a href="tel:<?php  echo $no_plus;?>"><?php echo $phone; ?></a>
                        <div class="btn">
                            <?php
                                 if(ICL_LANGUAGE_CODE == 'uk'){
                                    echo 'Замовити дзвінок';
                                }else {
                                    echo 'Заказать звонок';
                                }
                            ?>
                        </div>
                        <div class="subheader__contact-lang">
                            <?php do_action( 'wpml_add_language_selector' ); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>