<?php
Kirki::add_config( 'peak', array(
	'capability'    => 'edit_theme_options',
	'option_type'   => 'theme_mod',
) );

Kirki::add_panel( 'peak_panel_id', array(
	'priority'    => 40,
	'title'       => esc_attr__( 'Services skill', 'peak' ),
	'description' => esc_attr__( 'My panel description', 'peak' ),
) );

Kirki::add_section( 'peak_section_one', array(
	'title'          => esc_attr__( 'My Section', 'peak' ),
	'description'    => esc_attr__( 'My section description.', 'peak' ),
	'priority'       => 160,
	'panel'=>'peak_panel_id'
) );



Kirki::add_field( 'peak', array(
	'type'        => 'repeater',
	'label'       => esc_attr__( 'Services skill', 'peak' ),
	'section'     => 'peak_section_one',
	'priority'    => 160,
	'row_label' => array(
		'type' => 'text',
		'value' => esc_attr__('your custom value', 'peak' ),
	),
	'button_label' => esc_attr__('"Add new" button label (optional) ', 'peak' ),
	'settings'     => 'services_skill',
	'default'      => array(
		array(
			'skill_text' => esc_html__( 'Design', 'peak' ),
			'skill_range'  => esc_html__('80%','peak'),
		),
		array(
			'skill_text' => esc_html__( 'Development', 'peak' ),
			'skill_range'  => '50%',
		),
	),
	'fields' => array(
		'skill_text' => array(
			'type'        => 'text',
			'label'       => esc_html__( 'Skill Text', 'peak' ),
			'description' => esc_html__( 'This will be the label for your Skill', 'peak' ),
			'default'     => '',
		),
		'skill_range' => array(
			'type'        => 'text',
			'label'       => esc_html__( 'Skill Range', 'peak' ),
			'description' => esc_html__( 'This will be the number of range', 'peak' ),
			'default'     => '',
		),
	)
) );

