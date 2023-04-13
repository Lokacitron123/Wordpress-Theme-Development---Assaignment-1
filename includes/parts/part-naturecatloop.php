<?php
$loop = new WP_Query('cat=13');

while ($loop->have_posts()) : $loop->the_post();
    ?>
    <article>
        <img src="<?= the_post_thumbnail_url('small'); ?>" />
        <h2><a href="<?= the_permalink(); ?>"><?= the_title(); ?></a></h2>
        <?php get_template_part('includes/parts/part', 'articlecategoryitems'); ?>
        <?php the_excerpt(); ?>
    </article>
    <?php
endwhile;

wp_reset_postdata();
?>