<?php 
	
	// Template Name: Widget Page
	
	get_header();
	
?>

<div class="gallery-columns-3">

	<?php 
			
		// if there are widgets in the sidebar (Appearance > Widgets), display them
		// the widget area is defined in functions.php
	
		if ( is_active_sidebar( 'widget-page' ) ) 
			
			dynamic_sidebar( 'widget-page' );
	
	
	?>


</div><!-- row -->	


<?php
	
	get_footer();
	
?>