<?php
/*
Template Name: undersida4
*/
?>

<?php 
get_header();
?>



        <main>
			<section>
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-8 col-md-6">
						<?php get_template_part('includes/template', 'content');?>
						</div>
                        <div class="col-xs-12 col-sm-4 col-md-6">
						<img src="<?php the_post_thumbnail_url('full'); ?>" />
						</div>
					</div>
				</div>
			</section>
		</main>



<?php
get_footer();
?>