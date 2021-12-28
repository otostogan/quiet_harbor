<section class="info">
        <div class="container">
            <div class="info__title">
                <h2 class="title fz54">
                    <?php the_field('8_1'); ?>
                </hr>
            </div>
            <div class="info__wrapper">
                <?php
                    $infos = get_field('8_2');
                    foreach($infos as $info)
                    {
                        ?>
                            <div class="info__item">
                                <h2 class="info__item-title">
                                    <?php echo $info[1]; ?>
                                </h2>
                                <div class="info__item-text">
                                    <?php echo $info[2]; ?>
                                </div>
                            </div>
                        <?php
                    }
                ?>
            </div>
        </div>
    </section>