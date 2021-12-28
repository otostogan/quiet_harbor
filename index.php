<?php
    get_header();
    $region = get_field('region');
    ?>
    <?php
    
        get_template_part('template-parts/content', 'banner');
        get_template_part('template-parts/content', 'services');
        get_template_part('template-parts/content', 'bennefits');
    ?>
    <section class="personal" style="background: url('<?php the_field('4_3'); ?>') no-repeat 50%/cover">
        <div class="container">
            <div class="title fz72">
                <?php the_field('4_1'); ?>
            </div>
            <div class="personal__text">
                <?php the_field('4_2'); ?>
            </div>
            <div class="btn mauto" data-modal-contact>
                <?php
                    if(ICL_LANGUAGE_CODE == 'uk'){
                        echo 'Замовити дзвінок';
                    }else {
                        echo 'Заказать звонок';
                    }
                ?>
            </div>
        </div>
    </section>
    <?php
        get_template_part('template-parts/content', 'conditions');
        get_template_part('template-parts/content', 'specialist');
    ?>
    <section class="price">
        <div class="container">
            <div class="price__title">
                <div class="title fz54"><?php the_field('6_1') ?></div>
                <div class="subtitle"><?php the_field('6_2') ?></div>
            </div>
            <div class="price__table">
                <div class="price__table-titles">
                    <?php
                    $table_price = get_field('6_3');
                    foreach ($table_price as $item)
                    {
                        ?>
                            <div class="price__table-title">
                                <?php echo $item[1]; ?>
                            </div>
                        <?php
                    }
                    ?>
                </div>
                <div class="price__table-columns">
                    <?php
                        $table = get_field('6_4');
                        foreach ($table as $item)
                        {
                            ?>
                                <div class="price__table-column">
                                    <?php
                                        $spans = $item[1];
                                        foreach($spans as $span){
                                            echo "<span>" . $span[1] . "</span>";
                                        }
                                    ?>
                                    
                                </div>
                            <?php
                        }
                    ?>
                </div>
            </div>
        </div>
    </section>
    <?php
        get_template_part('template-parts/content', 'getprice');
        get_template_part('template-parts/content', 'review');
        get_template_part('template-parts/content', 'articles');
        get_template_part('template-parts/content', 'info');
        get_template_part('template-parts/content', 'branches');
        get_template_part('template-parts/content', 'consultations');
    ?>
<?php

    get_footer();
?>