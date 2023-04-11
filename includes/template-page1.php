<?php
/*
Template Name: undersida
*/
?>

<?php 
get_header();
?>



<main>
			<section>
				<div class="container">
					<div class="row">
					
						
						
                            <div id="primary" class="col-xs-12 col-md-9">
								<?php get_template_part('includes/template', 'content');?>			
                            </div>
							<aside id="secondary" class="col-xs-12 col-md-3">
							<?php get_template_part('/includes/parts/part', 'sidemenu');?> 
							</aside>
							

						
					</div>
					
				</div>
			</section>
		</main>



<?php
get_footer();
?>