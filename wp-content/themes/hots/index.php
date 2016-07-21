<?php get_header()?>
        <div class="col-md-9">
            <div class="post">
            <?php while (have_posts()) : the_post() ?>
                <div class="post-preview">
                    <h2><a href="<?php the_permalink()?>"><?php the_title()?></a></h2>
                    <?php if (has_post_thumbnail()) : ?>
                        <div class="post-thumbnail">
                            <a href="<?php the_permalink() ?>" title="<?php the_title_attribute() ?>">
                                <?php the_post_thumbnail('thumbnail') ?>
                            </a>
                        </div>
                    <?php endif ?>
                    <?php the_content("READ")?>
                    <?php if (comments_open()): ?>
                    <a href="<?php the_permalink() ?>#comments" title="<?php the_title_attribute() ?>">
                        <?php comments_number('Нет коментариев', 'Один коментарий', 'Коментарии(%)') ?>
                    </a>
                    <?php endif ?>
                </div>

            <?php endwhile ?>
            </div>
            <?php pagination() ?>
        </div>

        <?php get_template_part('sidebar') ?>

<?php get_footer()?>