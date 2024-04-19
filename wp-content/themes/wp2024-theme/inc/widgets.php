
<?php
global $theme_dir;
include_once $theme_dir.'/inc/widgets/WP2024_Recent_News.php';
add_action( 'widgets_init', 'wp2024_register_widgets' );
function wp2024_register_widgets() {
	/* Register the 'primary' sidebar. */
	register_sidebar(
		array(
			'id'            => 'primary',
			'name'          => __( 'Primary Sidebar','wp2024-theme' ),
			'description'   => __( 'A short description of the sidebar.','wp2024-theme' ),
			'before_widget' => '<div id="%1$s" class="blog__sidebar__item %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4 class="widget-title">',
			'after_title'   => '</h4>',
            
		)
	);
    register_widget('WP2024_Recent_News');
    //register_widget('WP2024_Tags');
}
?>