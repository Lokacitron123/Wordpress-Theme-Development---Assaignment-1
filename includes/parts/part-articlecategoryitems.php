<ul class="meta">
	 <li>
		<i class="fa fa-calendar"></i> <?php the_date(); ?>
	</li>
	<li>
		<i class="fa fa-user"></i> <a href="forfattare.html"><?php the_author(); ?></a>
	</li>
	<li>
		<i class="fa fa-tag">
			<?php 
				$categories = get_the_category();
				foreach($categories as $category):?>
				
				
					<a href="<php echo get_category_link();?>">
						<?php echo $category->name;?>
					</a>
				
				<?php endforeach;?>	
		</i>				
	</li> 
</ul>

