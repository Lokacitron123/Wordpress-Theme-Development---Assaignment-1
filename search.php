<?php
    get_header();
?>



        <main>
            <section>
                    <div class="container">
                        <div class="row">
                            <div id="primary" class="col-xs-12 col-md-9">

                            <h1><?php echo 'Sökresultat för: '; the_search_query();?></h1>
                            <?php if( have_posts() ): while(have_posts() ): the_post();?>

                            <article>
                                <img src="<?php the_post_thumbnail_url('small'); ?>" />
                                <h2><a href=<?php the_permalink();?>><?php the_title();?></a></h2>
                                <?php get_template_part('includes/parts/part', 'articlecategoryitems');?>
                                <?php the_excerpt();?>
                            </article>


                        <?php endwhile; else: endif;?>

                        <nav class="navigation pagination">
							<?php echo paginate_links(); ?>
						</nav>
                            
                        </div>  
                    </div>
            </section>
		</main>

		




<?php
    get_footer();
?>