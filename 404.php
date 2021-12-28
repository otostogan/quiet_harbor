<?php

get_header();
?>
<style>
    .error-page{
        padding-top: 200px;
        padding-bottom: 200px;
        text-align: center;
        font-size: 35px;
    }
</style>
<div class="error-page">
    <div class="container">
        Произошла ошибка.
        Скорее всего данной страницы не существует <br>
        <a href="<?php echo get_home_url(); ?>">Вернутся на главную</a>
    </div>
</div>

<?php
get_footer();
?>