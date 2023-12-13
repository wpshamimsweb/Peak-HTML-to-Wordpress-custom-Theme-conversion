<?php
require_once get_theme_file_path( "/lib/csf/cs-framework.php" );
require_once get_theme_file_path( "/lib/kirki/class-my-theme-kirki.php" );
require_once get_theme_file_path( "/inc/metaboxes/section.php" );
require_once get_theme_file_path( "/inc/metaboxes/page.php" );
require_once get_theme_file_path( "/inc/metaboxes/section-banner.php" );
require_once get_theme_file_path( "/inc/metaboxes/section-feature.php" );
require_once get_theme_file_path( "/inc/metaboxes/section-services.php" );
require_once get_theme_file_path( "/inc/metaboxes/section-gallery.php" );
require_once get_theme_file_path( "/inc/customizer/section-services.php" );
require_once get_theme_file_path( "/inc/metaboxes/section-team.php" );
require_once get_theme_file_path( "/inc/metaboxes/section-pp.php" );
require_once get_theme_file_path( "/inc/metaboxes/section-testmonials.php" );

//require_once get_theme_file_path( "/inc/customizer/section-services2.php" );
require_once get_theme_file_path( "/inc/include-kirki.php" );
require_once get_theme_file_path( "/inc/kirki.php" );


define( 'CS_ACTIVE_FRAMEWORK', false ); // default true
define( 'CS_ACTIVE_METABOX', true ); // default true
define( 'CS_ACTIVE_TAXONOMY', true ); // default true
define( 'CS_ACTIVE_SHORTCODE', false ); // default true
define( 'CS_ACTIVE_CUSTOMIZE', true ); // default true

if ( site_url() == "http://localhost/peak/" ) {
	define( "VERSION", time() );
} else {
	define( "VERSION", wp_get_theme()->get( "Version" ) );
}
function peak_theme_setup() {
	load_theme_textdomain( 'peak', get_template_directory() . "/languages" );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'title-tags' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'gallery',
		'caption',
		'comment-list'
	) );
	add_theme_support( 'custom-logo' );

	register_nav_menu( 'primary', __( 'Main Menu', 'peak' ) );
}

add_action( 'after_setup_theme', 'peak_theme_setup' );

function peak_customizer_assets() {
	wp_enqueue_script( "peak-customizer-js", get_theme_file_uri( "/assets/js/customizer.js" ), array(
		'jquery',
		'customize-preview'
	), time(), true );
}

add_action( "customize_preview_init", 'peak_customizer_assets' );

function peak_assets() {
	wp_enqueue_style( 'peak-fonts', '//fonts.googleapis.com/css?family=Playfair+Display:300,400,700,800|Open+Sans:300,400,700"' );
	wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap.min.css', null, VERSION );
	
	wp_enqueue_style( 'owl.carousel-css', get_template_directory_uri() . '/assets/css/owl.carousel.css', null, VERSION );
	wp_enqueue_style( 'magnific-popup-css', get_template_directory_uri() . '/assets/css/magnific-popup.css', null, VERSION );
	wp_enqueue_style( 'fontawesome-css', get_template_directory_uri() . '/assets/css/font-awesome.min.css', null, VERSION );
	wp_enqueue_style( 'peak-portfolio-css', get_template_directory_uri() . '/assets/css/portfolio.css', null, VERSION );
	wp_enqueue_style( 'peak-style-css', get_template_directory_uri() . '/assets/css/style.css', null, VERSION );
	wp_enqueue_style( 'peak-style', get_stylesheet_uri() );

	
	
	
	
	
	wp_enqueue_script( 'imagesloaded-js', get_template_directory_uri() . '/assets/js/imagesloaded.js', array( 'jquery' ), VERSION, true );
	wp_enqueue_script( 'typed-js', get_template_directory_uri() . '/assets/js/typed.js', array( 'jquery' ), VERSION, true );
	
	
	
	wp_enqueue_script( 'isotope-js', get_template_directory_uri() . '/assets/js/isotope.pkgd.min.js', array( 'jquery' ), VERSION, true );
	wp_enqueue_script( 'peak-portfolio-js', get_template_directory_uri() . '/assets/js/portfolio.js', array(
		'jquery',
		'jquery-magnific-popup-js',
		'imagesloaded-js',
		'isotope-js'
	), VERSION, true );
	wp_enqueue_script( 'peak_typer-js', get_template_directory_uri() . '/assets/js/peak_typer.js', array( 'jquery' ), VERSION, true );
	wp_enqueue_script( 'scrollreveal-js', get_template_directory_uri() . '/assets/js/scrollreveal.min.js', array( 'jquery' ), VERSION, true );
	wp_enqueue_script( 'jquery-2.2.4-js', get_template_directory_uri() . '/assets/js/jquery-2.2.4.min.js', array( 'jquery' ), VERSION, true );
	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array( 'jquery' ), VERSION, true );
	wp_enqueue_script( 'owl.carousel-js', get_template_directory_uri() . '/assets/js/owl.carousel.js', array( 'jquery' ), VERSION, true );
	wp_enqueue_script( 'jquery-appear-js', get_template_directory_uri() . '/assets/js/jquery.appear.js', array( 'jquery' ), VERSION, true );
	wp_enqueue_script( 'jquery-nav-js', get_template_directory_uri() . '/assets/js/jquery.nav.js', array( 'jquery' ), VERSION, true );
	
	wp_enqueue_script( 'jquery-magnific-popup-js', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.min.js', array( 'jquery' ), VERSION, true );
	wp_enqueue_script( 'numscroller-js', get_template_directory_uri() . '/assets/js/numscroller-1.0.js', array( 'jquery' ), VERSION, true );
	wp_enqueue_script( 'isotope-js', get_template_directory_uri() . '/assets/js/isotope.pkgd.min.js', array( 'jquery' ), VERSION, true );

	wp_enqueue_script( 'peak-main-js', get_template_directory_uri() . '/assets/js/peak.js', array( 'jquery' ), VERSION, true );

	
		if(is_page_template('page-template/landing.php') ) {
			
		wp_enqueue_script( 'peak-contact-js', get_template_directory_uri() . '/assets/js/contact.js', array( 'jquery' ), VERSION, true );
		$ajaxurl = admin_url( 'admin-ajax.php' );
		wp_localize_script( 'peak-contact-js', 'peakurl', array( 'ajaxurl' => $ajaxurl ) );
	
	}
}


add_action( 'wp_enqueue_scripts', 'peak_assets' );




function peak_codestar_init() {
	CSFramework_Metabox::instance( array() );
	CSFramework_Taxonomy::instance( array() );
}

add_action( 'init', 'peak_codestar_init' );

function peak_change_nav_menu( $menus ) {
	$string_to_replace = home_url( "index.php/" ) . "section/";
	if ( is_front_page() ) {
		foreach ( $menus as $menu ) {
			$new_url = str_replace( $string_to_replace, "#", $menu->url );

			if ( $new_url != $menu->url ) {
				$new_url = rtrim( $new_url, "/" );
			}

			$menu->url = $new_url;
		}
	}

	return $menus;
}

add_filter( 'wp_nav_menu_objects', 'peak_change_nav_menu' );


function peak_contact_email(){
	if(check_ajax_referer('contact','cn')) {
		$name    = isset( $_POST['name'] ) ? $_POST['name'] : '';
		$email   = isset( $_POST['email'] ) ? $_POST['email'] : '';
		$phone   = isset( $_POST['phone'] ) ? $_POST['phone'] : '';
		$message = isset( $_POST['message'] ) ? $_POST['message'] : '';

		$_message    = sprintf( "%s \nFrom: %s\nEmail: %s\nPhone: %s", $message, $name, $email, $phone );
		$admin_email = get_option( 'admin_email' );

		//postfix

		wp_mail( 'imirja87@gmail.com', __( 'Someone tried to contact you', 'peak' ), $_message, "From: alaminshamim450@gmail.com\r\n" );
		die( 'successful' );
	}
	die('error');
	
}
	
add_action('wp_ajax_contact','peak_contact_email');
add_action('wp_ajax_nopriv_contact','peak_contact_email');



?>