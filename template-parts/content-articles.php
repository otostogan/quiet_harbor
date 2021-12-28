<?php

    $term = get_queried_object();

?>
<section class="articles">
    <div class="container">
        <div class="articles__title">
            <div class="title fz54">
                <?php
                    if(ICL_LANGUAGE_CODE == 'uk'){
                        echo 'Статті';
                    }else {
                        echo 'Статьи';
                    }
                ?>
            </div>
            <div class="subtitle">
                
                <?php
                    if(ICL_LANGUAGE_CODE == 'uk'){
                        echo 'У цих статтях ми ділимося своїм багаторічним досвідом та даємо корисні поради';
                    }else {
                        echo 'В этих статьях мы делимся своим многолетним опытом и даем полезные советы';
                    }
                ?>
            </div>
        </div>
        <div class="articles__posts">
            <?php
                $args = array(
                    'category_name' => 'stati',
                    'posts_per_page' => 3,
                    'orderby' => 'data',
                    'order' => 'ASC'
                );
                $articles = get_posts($args);
                $category_id = get_cat_ID( 'Статья' );
                foreach ($articles as $article)
                {
                    ?>
                    <a class="articles__post" href="<?php echo get_permalink($article->ID); ?>">
                        <img class="articles__post-img" src="<?php echo get_the_post_thumbnail_url($article->ID);?>" alt="">
                        <div class="articles__post-body">
                            <div class="articles__post-title">
                                <?php echo get_the_title($article->ID); ?>
                            </div>
                            <div class="articles__post-text">
                                <?php the_field('10', $article->ID) ?>
                            </div>
                            <div class="articles__post-author">
                                <img src="<?php the_field('2', $article->ID); ?>" alt="">
                                <div class="articles__post-data">
                                    <div class="articles__post-name">
                                        <?php the_field('3', $article->ID) ?>
                                    </div>
                                    <div class="articles__post-time">
                                        <?php echo get_the_date( 'd/m/Y', $article->ID ) . ',   ' . get_the_date('H:i', $article->ID ); ?>
                                    </div>
                                </div>
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
                    <a class="btn h55px w247px mainbg mauto" href="<?php echo get_category_link($category_id) ?>">
                            <?php
                                 if(ICL_LANGUAGE_CODE == 'uk'){
                                    echo 'Статті';
                                }else {
                                    echo 'Все статьи';
                                }
                            ?>
                        
                    </a>
                <?php
            }
        ?>
    </div>
</section>