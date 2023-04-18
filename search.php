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
                        <aside id="secondary" class="col-xs-12 col-md-3">
						<div id="sidebar">
								<ul>
									<li>
									<form role="search" action="<?php echo home_url('/'); ?>" id="searchform" class="searchform">

									<div>
										<label class="screen-reader-text">Sök efter:</label>

										<input type="search" value="<?php echo get_search_query();?>" name="s" title="<?php echo esc_attr_x('sök efter:', 'h3');?>" placeholder="<?php echo esc_attr_x('sök efter...', 'placeholder'); ?>"/>

										<input type="submit" value="<?php echo esc_attr_x('sök', 'submit button');?>" />
									</div>

									</form>
									</li>
								</ul>
								<ul role="navigation">
									<li class="pagenav">						
										<?php  dynamic_sidebar('pages-area');?>
									</li>
									<li>
										
										<ul><?php  dynamic_sidebar('archive-area');?> 
									</li>
									<li class="categories">
										
										<?php  dynamic_sidebar('category-area');?> 
									</li>
								</ul>
							</div>
						</aside>
                    </div>
                    
            </section>
		</main>

		




<?php
    get_footer();
?>