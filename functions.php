<?php
	
// add salary option



// front end submission	
function frontend_add_salary_field( $fields ) {
	
	$fields['job']['job_salary'] = array(
		'label' => __( 'Salary', 'job_manager' ),
		'type' => 'text',
		'required' => false,
		'placeholder' => 'Indicate yearly or hourly',
		'priority' => 7
	);
	return $fields;
	
}
add_filter( 'submit_job_form_fields', 'frontend_add_salary_field' );



// admin edit screen
function admin_add_salary_field( $fields ) {
	
	$fields['_job_salary'] = array(
		'label' => __( 'Salary', 'job_manager' ),
		'type' => 'text',
		'placeholder' => 'Indicate yearly or hourly',
		'description' => ''
	);
	return $fields;
	
}
add_filter( 'job_manager_job_listing_data_fields', 'admin_add_salary_field' );



// job posting
function display_job_salary_data() {
	
	global $post;
	
	$salary = get_post_meta( $post->ID, '_job_salary', true );
	
	if ( $salary ) echo '<li class="salary">' . __( 'Salary:' ) . ' ' . $salary . '</li>';
  
}
add_action( 'single_job_listing_meta_end', 'display_job_salary_data' );



/* Register widget areas
-------------------------------------------------------------- */
function custom_theme_widgets() {


	register_sidebar( array(
		'name'			=> 'Special Widget Template',
		'id'			=> 'widget-page',
		'description'	=> 'These widgets will only appear on the special page template: "Widget Page"',
		'before_widget'	=> '<div id="%1$s" class="widget %2$s">',
		'after_widget'	=> '</div><!-- widget -->',
		'before_title'	=> '<h3 class="title">',
		'after_title'	=> '</h3>'
	));


}
add_action( 'widgets_init', 'custom_theme_widgets' );