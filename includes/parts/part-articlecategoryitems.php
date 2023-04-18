<?php
/*
Template Name: Arkiv
*/
?>
<ul class="meta">
	 <li>
		<!-- varför funkar det inte bara med the_date?-->
		<i class="fa fa-calendar"></i> <?php echo get_the_date(); ?>
	</li>
	<li>
		<i class="fa fa-user"></i> <a href=""><?php the_author_posts_link(); ?></a>
	</li>
	<li>
		<i class="fa fa-tag">
			<?php
				the_category(', ');
			?>
		</i>
	</li>
</ul>

