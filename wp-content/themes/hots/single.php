<?php get_header()?>
<?php the_post()?>
        <div class="col-md-9">
                <div class="post">
                    <h1><?php the_title()?></h1>
                    <?php if (comments_open()): ?>
                            <?php comments_number('Нет коментариев', 'Один коментарий', 'Коментарии(%)') ?>
                    <?php endif ?>
                    <div class="post-thumbnail">
                        <?php if (has_post_thumbnail()) : ?>
                            <?php the_post_thumbnail('medium') ?>
                        <?php endif ?>
                    </div>
                    <?php the_content()?>
                </div>
<?php if (comments_open()): ?>
    <?php comments_template() ?>
<?php endif ?>
        </div>

<?php get_template_part('sidebar') ?>


<?php get_footer()?>