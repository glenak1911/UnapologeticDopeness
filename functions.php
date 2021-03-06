<?php
// Add scripts and stylesheets
function startwordpress_scripts() {
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '3.3.6' );
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array( 'jquery' ), '3.3.6', true );
	wp_enqueue_style( 'blog', get_template_directory_uri() . '/css/blog.css' );
  wp_enqueue_style( 'custom', get_template_directory_uri() . '/css/custom.css' );
}

add_action( 'wp_enqueue_scripts', 'startwordpress_scripts' );

add_theme_support( 'title-tag' );

if( !defined(THEME_IMG_PATH)){
	define( 'THEME_IMG_PATH', get_template_directory_uri() . '/img' );
 }

function search_with_image_submit() {
?>
<form method="get" class="search_form_image_button" action="<?php bloginfo('home'); ?>/"><p><input class="text_input" type="text" value="Enter Text &amp; Click to Search" name="s" id="s" onfocus="if (this.value == 'Enter Text &amp; Click to Search') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Enter Text &amp; Click to Search';}" /><button type="submit" id="searchsubmit" /><i class="fa fa-search"></i></button></p></form>
<?php
}
add_action('thesis_hook_before_content', 'search_with_image_submit');

// Custom settings
function custom_settings_add_menu() {
  add_menu_page( 'Custom Settings', 'Custom Settings', 'manage_options', 'custom-settings', 'custom_settings_page', null, 99 );
}
add_action( 'admin_menu', 'custom_settings_add_menu' );

// Create Custom Global Settings
function custom_settings_page() { ?>
  <div class="wrap">
    <h1>Custom Settings</h1>
    <form method="post" action="options.php">
       <?php
           settings_fields( 'section' );
           do_settings_sections( 'theme-options' );
           submit_button();
       ?>
    </form>
  </div>
<?php }

// Twitter
function setting_twitter() { ?>
  <input type="text" name="twitter" id="twitter" value="<?php echo get_option( 'twitter' ); ?>" />
<?php }

// Facebook
function setting_facebook() { ?>
  <input type="text" name="facebook" id="facebook" value="<?php echo get_option( 'facebook' ); ?>" />
<?php }

// Instagram
function setting_instagram() { ?>
  <input type="text" name="instagram" id="instagram" value="<?php echo get_option( 'instagram' ); ?>" />
<?php }

function custom_settings_page_setup() {
  add_settings_section( 'section', 'All Settings', null, 'theme-options' );
  add_settings_field( 'twitter', 'Twitter URL', 'setting_twitter', 'theme-options', 'section' );
	add_settings_field( 'facebook', 'Facebook URL', 'setting_facebook', 'theme-options', 'section' );
	add_settings_field( 'instagram', 'Instagram URL', 'setting_instagram', 'theme-options', 'section' );

  register_setting('section', 'twitter');
	register_setting('section', 'facebook');
	register_setting('section', 'instagram');

}
add_action( 'admin_init', 'custom_settings_page_setup' );

add_theme_support( 'post-thumbnails' );
 ?>
