<?php

function peak_section_type_metabox( $metaboxes ) {
    $metaboxes[] = array(
        'id'        => 'peak-section-type',
        'title'     => __( 'section type', 'peak' ),
        'post_type' => 'section',
        'context'   => 'normal',
        'priority'  => 'default',
        'sections'  => array(
            array(
                'name'     => 'peak-section-type-section-one',
                'icon'   => 'fa fa-image',
                'fields' => array(
                    array(
                        'id'    => 'type',
                        'title'   => __( 'Select section type', 'peak' ),
                        'type'    => 'select',
                        'options' => array(
                            'banner'       => __( 'Banner', 'peak' ),
                            'feature'     => __( 'Key featured', 'peak' ),
                            'services'     => __( 'Service', 'peak' ),
                            'gallery'      => __( 'Gallery', 'peak' ),
                            'team'         => __( 'team', 'peak' ),
                            'menu'         => __( 'Menu', 'peak' ),
                            'pricing'     => __( 'Pricing Plane', 'peak' ),
                            'blog'  => __( 'latest posts', 'peak' ),
                            'testimonials' => __( 'Testimonials', 'peak' ),
                            'contact'      => __( 'Contact', 'peak' ),
                        )
                    ),
                )
            ),

        )
    );

    return $metaboxes;
}

add_filter( 'cs_metabox_options', 'peak_section_type_metabox' );

