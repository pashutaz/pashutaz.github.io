    <div class="col-md-12">
        <div id="footer">
            <?php wp_nav_menu([
                'container' => 'div',
                'container_class' => 'collapse navbar-collapse',
                'menu_class' => 'nav navbar-nav',
                'theme_location' => 'footer_menu'
            ])?>
            2015-2017 © Pashutaz <br>
            Тел: <?= ot_get_option('phone') ?><br>
            Адрес: <?= ot_get_option('address') ?>
        </div>
    </div>
        </div>
    </div>
<?php wp_footer() ?>


</body>
</html>
