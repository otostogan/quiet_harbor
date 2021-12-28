<?php
/*
Template Name: Шаблон для Персонала
Template Post Type: post, personal
*/

get_header();

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
    <div class="breadcrumbs">
        <div class="container">
            <?php if( function_exists('kama_breadcrumbs')) kama_breadcrumbs(' » '); ?>
        </div>
    </div>
    <section class="seotext">
        <div class="container">
            <div class="seotext__content">
                <?php the_field('seotext', get_the_ID()); ?>
            </div>
        </div>
    </section>
<?php
        get_template_part('template-parts/content', 'consultations');

get_footer();
?>