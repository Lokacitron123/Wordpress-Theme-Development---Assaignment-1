<?php
/*
Template Name: Arkiv
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
                            <h1><?php wp_title($sep = '');?></h1>
                            <?php get_template_part('includes/parts/part', 'theloop');?>  
                        </div>  
                    </div>
            </section>
		</main>

		

<?php
    get_footer();
?>