<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<title>Labb 1</title>
	
	
	<?php
		wp_head();
	?>

	
</head>
<body>

	<div id="wrap">

		<header id="header">
			<div class="container">
				<div class="row">
					<div class="col-xs-8 col-sm-6">
						<a class="logo" href="<?php echo home_url();?>">Labb 1</a>
					</div>
					<div class="col-sm-6 hidden-xs">
						
						

						<form role="search" action="<?php echo home_url('/'); ?>" id="searchform" class="searchform">

                            <div>
								<label class="screen-reader-text">Sök efter:</label>

								<input type="search" value="<?php echo get_search_query();?>" name="s" title="<?php echo esc_attr_x('sök efter:', 'h3');?>" placeholder="<?php echo esc_attr_x('sök efter...', 'placeholder'); ?>"/>

								<input type="submit" value="<?php echo esc_attr_x('sök', 'submit button');?>" />
							</div>

                          </form>


					</div>
					<div class="col-xs-4 text-right visible-xs">
						<div class="mobile-menu-wrap">
							<i class="fa fa-search"></i>
							<i class="fa fa-bars menu-icon"></i>
						</div>
					</div>
				</div>
			</div>
		</header>

        <div class="mobile-search">
			<form id="searchform" class="searchform">
				<div>
					<label class="screen-reader-text">Sök efter:</label>
					<input type="text" />
					<input type="submit" value="Sök" />
				</div>
			</form>
		</div>


		<nav id="nav">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">

                        <?php
                            wp_nav_menu(
                                array(
                                    'menu' => 'primary',
                                    'container' => '',
                                    'theme_location' => 'primary',
                                    'items_wrap' => '<ul id="" class="menu">%3$s</ul>'
                                )
                            );
                        ?>

						
					</div>
				</div>
			</div>
		</nav>
    
    