<!DOCTYPE html>
<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<?php 
	/*
	wp_head() allows WordPress to do some necessary work in the <head> of the theme
	Much of what happens here is determined in functions.php
	Such as the <title> and loading stylesheets.
	Always include this command in every theme.
	*/
	wp_head(); 
?>

</head>

<body <?php body_class(); ?>>
	
	<?php get_template_part( 'inc/top' ); ?>
	
<header id="header">
<div class="row">
		
	<hgroup id="masthead">
		<h1 id="logo" class="title"><a href="<?php echo home_url( "/" ); ?>"><?php bloginfo( "name" ); ?></a></h1>
	</hgroup>
			
	<nav id="menu">
		<input type="checkbox" id="menu-toggle" class="toggle">
		<label for="menu-toggle" class="toggle">Menu</label>
		<?php wp_nav_menu( array( 'theme_location' => 'primary', 'container' => false, 'menu_class' => 'drop menu target' )); ?>
	</nav>
		
</div><!-- row -->	
</header>

<main id="content">