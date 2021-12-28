<?php
/*
Template Name: Шаблон для Услуг
Template Post Type: post, uslugi
*/

get_header();

get_template_part('template-parts/content', 'banner');

?>
    <style>
        .author__wrapper{ 
            display: flex;
            align-items: center;
            padding-top: 15px;
            padding-bottom: 15px;
            border-top: 1px solid;
            border-bottom: 1px solid;
            color: #77953b;
        }
        .author__wrapper:hover{
            color: #77953b;
        }
        .author__img img{ 
            width: 100px;
            border-radius: 100%;
        }
        .author__wrapper-content{
            margin-left: 15px;
        }
        .author{
            padding: 30px;
        }
        .author__name{
            color: #77953b;
        }
    </style>
    <section class="seotext">
        <div class="container">
            <div class="seotext__content">
                <?php the_field('2', get_the_ID()); ?>
            </div>
        </div>
    </section>
<?php

get_template_part('template-parts/content', 'consultations');

?>

<section class="seotext">
    <div class="container">
        <div class="seotext__content">
            <?php the_field('3', get_the_ID()); ?>
        </div>
    </div>
</section>

<?php

get_template_part('template-parts/content', 'getprice');


$post_object = get_field('avtor');
?>
    <div class="author">
        <div class="container">
            <h3 class="author__name">
                Автор статьи: <?php echo get_the_author(); ?>
            </h3>
            <a class="author__wrapper" href="<?php echo get_permalink($post_object->ID); ?>">
                <div class="author__img">
                    <img src="<?php the_field('1_1', $post_object->ID)?>" alt="">
                </div>
                <div class="author__wrapper-content">
                    
                    <div class="div">
                        <?php echo the_author_meta( 'description'); ?>
                    </div>
                </div>
            </a>
        </div>
    </div>
<?php

get_footer();
?>