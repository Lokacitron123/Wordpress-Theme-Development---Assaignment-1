<?php
    get_header();
?>

<main>
			<section>
				<div class="container">
					<div class="row">
						<div id="primary" class="col-xs-12 col-md-9">
						<h1><?php wp_title($sep = '');?></h1>
						
						<?php get_template_part('includes/parts/part', 'theloop');?>


						<!-- alternativ 1 -->
						<nav class="navigation pagination">
						<?php previous_posts_link(); ?> 
						<?php next_posts_link(); ?>
						</nav> 



						<!-- alternativ 2 -->
						<nav class="navigation pagination">
							<?php
								global $wp_query;

								$big = 9999999999999;
								echo paginate_links( 
									array(
										'base' => str_replace($big, '%#%', esc_url( get_pagenum_link( $big))),
										'format' => '?paged=%#%',
										'current' => max(1, get_query_var('paged')),
										'total' => $wp_query->max_num_pages
									)
								);
							?>
						</nav> 
							
						<!-- alternativ 3 -->
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
										<h2>Sidor</h2>
										<?php
											wp_nav_menu(
												array(
													'menu' => 'Pages',
													'container' => '',
													'theme_location' => 'Pages',
													'items_wrap' => '<ul id="" class="">%3$s</ul>'
												)
											);
										?>
									</li>
									<li>
										<h2>Arkiv</h2>
										<?php
											wp_nav_menu(
												array(
													'menu' => 'Archive',
													'container' => '',
													'theme_location' => 'Archive',
													'items_wrap' => '<ul id="" class="">%3$s</ul>'
												)
											);
										?>
									</li>
									<li class="categories">
										<h2>Kategorier</h2>
										<?php
											wp_nav_menu(
												array(
													'menu' => 'Categories',
													'container' => '',
													'theme_location' => 'Categories',
													'items_wrap' => '<ul id="" class="">%3$s</ul>'
												)
											);
										?>
									</li>
								</ul>
							</div>
						</aside>
					</div>
				</div>
			</section>
		</main>


<?php
    get_footer();
?>