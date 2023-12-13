	<?php

	function peak_customizer_settings( $wp_customizer ) {
		$wp_customizer->add_section( 'peak_services', array(
			'title'           => __( 'Services', 'customizer' ),
			'priority'        => '30',
						
		) );

		$wp_customizer->add_setting( 'peak_services_heading', array(
			'default'   => "Mission Statement",
			'transport' => 'postMessage', //postMessage
	//		'type'=>'option' //theme_mod or option
		) );

		$wp_customizer->add_control( 'peak_services_heading_ctrl', array(
			'label'    => __( 'Services Heading', 'customizer' ),
			'section'  => 'peak_services',
			'settings' => 'peak_services_heading',
			'type'     => 'text'
		) );

		$wp_customizer->add_setting( 'peak_services_subheading', array(
			'transport' => 'postMessage', //postMessage
	//		'type'=>'option' //theme_mod or option
		) );

		$wp_customizer->add_control( 'peak_services_subheading_ctrl', array(
			'label'           => __( 'Services Description', 'customizer' ),
			'section'         => 'peak_services',
			'settings'        => 'peak_services_subheading',
			'type'            => 'textarea',
	//		'active_callback' => 'service_display_subheading'
		//	'active_callback' => function () {
				//if ( get_theme_mod( 'cust_services_display_subheading' ) == 1 ) {
				//	return true;
				//}

				//return false;
			//}
		) );

		}

	add_action( 'customize_register', 'peak_customizer_settings' );