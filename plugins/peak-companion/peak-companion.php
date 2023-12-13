<?php
/*
Plugin Name: Peak Companion Plugin
Plugin URI:
Description: Companion Plugin for Peak Theme
Version: 1.0
Author: AL-Amin
Author URI:
License: GPLv2 or later
Text Domain: peak-companion
Domain Path: /languages/
*/

function peakc_load_text_domain() {
	load_plugin_textdomain( 'peak-companion', false, dirname( __FILE__ ) . "/languages" );
}

add_action( 'plugins_loaded', 'peakc_load_text_domain' );

function peakc_register_my_cpts_section() {

	/**
	 * Post Type: Section.
	 */

	$labels = array(
		"name"          => __( "Section", "peak-companion" ),
		"singular_name" => __( "Sections", "peak-companion" ),
	);

	$args = array(
		"label"               => __( "Section", "peak-companion" ),
		"labels"              => $labels,
		"description"         => "",
		"public"              => false,
		"publicly_queryable"  => false,
		"show_ui"             => true,
		"show_in_rest"        => false,
		"rest_base"           => "",
		"has_archive"         => false,
		"show_in_menu"        => true,
		"show_in_nav_menus"   => false,
		"exclude_from_search" => true,
		"capability_type"     => "post",
		"map_meta_cap"        => true,
		"hierarchical"        => false,
		"rewrite"             => array( "slug" => "section", "with_front" => true ),
		"query_var"           => true,
		"menu_position"       => 5,
		"menu_icon"           => "dashicons-media-document",
		"supports"            => array( "title", "editor", "thumbnail" ),
	);

	register_post_type( "section", $args );


	
}

add_action( 'init', 'peakc_register_my_cpts_section' );


