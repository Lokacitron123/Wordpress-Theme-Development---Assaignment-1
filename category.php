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
						<nav class="navigation pagination">
							<?php the_posts_pagination();?>
						</nav>
							<!-- <nav class="navigation pagination">
								<h2 class="screen-reader-text">Inläggsnavigering</h2>
								<a class="prev page-numbers" href="">Föregående</a>
								<span class="page-numbers current">1</span>
								<a class="page-numbers" href="">2</a>
								<a class="next page-numbers" href="">Nästa</a>
							</nav> -->
						</div>
						<aside id="secondary" class="col-xs-12 col-md-3">
							<div id="sidebar">
								<ul>
									<li>
										<form id="searchform" class="searchform">
											<div>
												<label class="screen-reader-text">Sök efter:</label>
												<input type="text" />
												<input type="submit" value="Sök" />
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
										<!-- <ul>
											<li class="cat-item">
												<a href="">Natur</a> (1)
											</li>
											<li class="cat-item">
												<a href="">Okategoriserade</a> (3)
											</li>
										</ul> -->
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

	