
<?php

$page_template_slug = get_page_template_slug( get_the_ID() );

?>
<section class="benefits" <?php if($page_template_slug === 'page-about.php'){echo 'style="background: unset;  padding-bottom: 50px;"';}?>>
    <div class="container">
        <div class="benefits__title">
            <h2 class="title fz54"><?php the_field('3_1');?></h2>
            <div class="subtitle"><?php the_field('3_2');?></div>
        </div>
        <div class="benefits__items">
        <?php
            $benefits = get_field('3_3');
            if($benefits)
            {
                foreach($benefits as $benefit)
                {
                    ?>
                        <div class="benefits__item">
                            <div class="benefits__item-title">
                                <?php echo $benefit[1]?>
                            </div>
                            <div class="benefits__item-text">
                                <?php echo $benefit[2]?>
                            </div>
                        </div>
                    <?php
                }
            }
            ?>
        </div>
    </div>
</section>