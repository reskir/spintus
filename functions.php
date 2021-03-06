<?php
// Add scripts and stylesheets
function css_scripts() {
	wp_enqueue_style( 'app-css', get_template_directory_uri() . '/css/app.css', array(), '0.0.1' );
	wp_enqueue_style( 'grid', get_template_directory_uri() . '/css/flexboxgrid.min.css', array(), '0.0.1' );
	wp_enqueue_style( 'demo-stack-nav', get_template_directory_uri() . '/css/stack-nav/demo.css', array(), '0.0.1' );

}

function js_scripts() {
	// wp_enqueue_script( 'classie', get_template_directory_uri() . '/js/classie.js', array(), '0.0.1', $in_footer=true );
	// wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/js/modernizr-custom.js', array(), '0.0.1', $in_footer=true );
	// wp_enqueue_script( 'app', get_template_directory_uri() . '/js/main.js', array(), '0.0.1', $in_footer=true );
  	wp_enqueue_script( 'emergence', get_template_directory_uri() . '/js/emergence.min.js', array(), '0.0.1', $in_footer=true );
  	wp_enqueue_script( 'emergence_script', get_template_directory_uri() . '/js/show.js', array(), '0.0.1', $in_footer=true );
}


add_action('wp_enqueue_scripts', 'js_scripts');
add_action('wp_enqueue_scripts', 'css_scripts' );

//change class on <a> element
add_filter('wp_list_pages', create_function('$p', 'return str_replace("<a ", "<a class=\"item\" ", $p);'));



// WordPress Titles
function startwordpress_wp_title( $title, $sep ) {
	global $paged, $page;
	if ( is_feed() ) {
		return $title;
	}
	// Add the site name.
	$title .= get_bloginfo( 'name' );
	// Add the site description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) ) {
		$title = "$title $sep $site_description";
	}
	return $title;
}
add_filter( 'wp_title', 'startwordpress_wp_title', 10, 2 );

// Custom settings
function custom_settings_add_menu() {
  add_menu_page( 'Custom Settings', 'Custom Settings', 'manage_options', 'custom-settings', 'custom_settings_page', null, 99);
}
add_action( 'admin_menu', 'custom_settings_add_menu' );

// Create Custom Global Settings
function custom_settings_page() { ?>
	<div class="wrap">
		<h1>Custom Settings</h1>
		<form method="post" action="options.php">
			<?php
           settings_fields('section');
           do_settings_sections('theme-options');
           submit_button();
       ?>
		</form>
	</div>
	<?php }

// Twitter
function setting_twitter() { ?>
		<input type="text" name="twitter" id="twitter" value="<?php echo get_option('twitter'); ?>" />
		<?php }

function setting_github() { ?>
			<input type="text" name="github" id="github" value="<?php echo get_option('github'); ?>" />
			<?php }

function custom_settings_page_setup() {
  add_settings_section('section', 'All Settings', null, 'theme-options');
  add_settings_field('twitter', 'Twitter URL', 'setting_twitter', 'theme-options', 'section');
  add_settings_field('github', 'GitHub URL', 'setting_github', 'theme-options', 'section');

	register_setting('section', 'twitter');
  register_setting('section', 'github');
}
add_action( 'admin_init', 'custom_settings_page_setup' );

// Support Featured Images
add_theme_support( 'post-thumbnails' );

// Custom Post Type
function create_my_custom_post() {
	register_post_type('my-projects',
			array(
			'labels' => array(
					'name' => __('My Project'),
					'singular_name' => __('My Project'),
			),
			'public' => true,
			'has_archive' => true,
			'supports' => array(
					'title',
					'editor',
					'thumbnail',
				  'custom-fields'
			)
	));
}
