<?php
if ( ! function_exists( 'enterprisio_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress
 * features.
 *
 * It is important to set up these functions before the init hook so
 * that none of these features are lost.
 *
 * @since enterprisio 1.0
 */

function enterprisio_setup() {
  // Add support for HTML5 tags
  add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );

  // Add support for title tag
  add_theme_support( 'title-tag' );

  // Add support for post thumbnails
  add_theme_support( 'post-thumbnails' );

  // Add support for post formats
  add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link' ) );

  // Add support for block styles
  add_theme_support( 'wp-block-styles' );

  // Make theme available for translation.
  load_theme_textdomain( 'enterprisio' );
}
endif;  
add_action( 'after_setup_theme', 'enterprisio_setup' );

function enterprisio_enqueue_styles_and_scripts() {
	// Enqueue normalize.css
	wp_enqueue_style( 'normalize-css', get_template_directory_uri() . '/assets/css/normalize.css', array(), '1.0' );

  // Enqueue block.css
	wp_enqueue_style( 'enterprisio-blocks-style', get_template_directory_uri() . '/assets/css/block.css', array(), '1.0' );

	// Enqueue main stylesheet
	wp_enqueue_style( 'style-css', get_stylesheet_uri() );

	// Enqueue custom JavaScript
	wp_enqueue_script( 'custom-script', get_template_directory_uri() . '/assets/js/script.js', array(), '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'enterprisio_enqueue_styles_and_scripts' );

// Enqueue core
require_once get_template_directory() . '/inc/core/init.php';

// Add Customizer
require get_template_directory() . '/inc/customizer.php';

// Upsell in the customizer
if ( class_exists( 'WP_Customize_Section' ) ) {
	class Enterprisio_Upsell_Section extends WP_Customize_Section {
		public $type = 'enterprisio-upsell';
		public $button_text = '';
		public $url = '';
		public $background = '';
		public $text_color = '';
		protected function render() {
			$background = ! empty( $this->background ) ? esc_attr( $this->background ) : '#08142C';
			$text_color       = ! empty( $this->text_color ) ? esc_attr( $this->text_color ) : '#fff';
			?>
			<li id="accordion-section-<?php echo esc_attr( $this->id ); ?>" class="enterprisio_upsell_section accordion-section control-section control-section-<?php echo esc_attr( $this->id ); ?> cannot-expand">
				<h3 class="accordion-section-title" style="border: 0; color:#fff; background:<?php echo esc_attr( $background ); ?>;">
					<?php echo esc_html( $this->title ); ?>
					<a href="<?php echo esc_url( $this->url ); ?>" class="button button-secondary alignright" target="_blank" style="margin-top: -4px;"><?php echo esc_html( $this->button_text ); ?></a>
				</h3>
			</li>
			<?php
		}
	}
}

// Add Get Started
require get_template_directory() . '/inc/get-started/get-started.php';

// Add Getstart admin notice
function enterprisio_admin_notice() { 
	global $pagenow;
	$theme_args      = wp_get_theme();
	$meta            = get_option( 'enterprisio_admin_notice' );
	$name            = $theme_args->__get( 'Name' );
	$current_screen  = get_current_screen();

	if( !$meta ){
		if( is_network_admin() ){
				return;
		}

		if( ! current_user_can( 'manage_options' ) ){
				return;
		} if($current_screen->base != 'appearance_page_enterprisio-guide-page' ) { ?>

			<div class="notice notice-success is-dismissible">
				<p>⭐⭐⭐⭐⭐</p>
				<h1><?php esc_html_e('Thanks for choosing Enterprisio!', 'enterprisio'); ?></h1>
				<p>Unlock exclusive features, advanced customization options, and premium support to take your site to the next level. Get started today and experience the full potential of the <b>Enterprisio PRO</b>!</p>
				<p>
					<a class="button button-primary customize load-customize hide-if-no-customize" href="<?php echo esc_url( admin_url( 'themes.php?page=enterprisio-guide-page' ) ); ?>"><?php esc_html_e('Get Started', 'enterprisio'); ?></a>
				</p>
		</div>
		<?php }?>
		<?php
	}
}

add_action( 'admin_notices', 'enterprisio_admin_notice' );

if( ! function_exists( 'enterprisio_update_admin_notice' ) ) :
/**
* Updating admin notice on dismiss
*/
function enterprisio_update_admin_notice(){
	if ( isset( $_GET['enterprisio_admin_notice'] ) && $_GET['enterprisio_admin_notice'] = '1' ) {
			update_option( 'enterprisio_admin_notice', true );
	}
}
endif;
add_action( 'admin_init', 'enterprisio_update_admin_notice' );

// After switch theme function
add_action('after_switch_theme', 'enterprisio_getstart_setup_options');
function enterprisio_getstart_setup_options () {
	update_option('enterprisio_admin_notice', FALSE );
}

// Theme credit link
define('ENTERPRISIO_BUY_NOW',__('https://effethemes.com/themes/enterprisio-wordpress-theme/','enterprisio'));
define('ENTERPRISIO_PRO_DEMO',__('https://preview.effethemes.site/enterprisio-wordpress-theme/','enterprisio'));
define('ENTERPRISIO_REVIEW',__('https://wordpress.org/support/theme/enterprisio/reviews/#new-post','enterprisio'));
define('ENTERPRISIO_SUPPORT',__('https://wordpress.org/support/theme/enterprisio','enterprisio'));