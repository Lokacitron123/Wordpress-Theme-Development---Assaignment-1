<?php if( have_posts() ): while(have_posts() ): the_post();?>

    <article>
        <img src="<?php the_post_thumbnail_url('small'); ?>" />
        <h2><a href=<?php the_permalink();?>><?php the_title();?></a></h2>
        <?php get_template_part('includes/parts/part', 'articlecategoryitems');?>
        <?php the_content();?>
    </article>


<?php endwhile; else: endif;?>
