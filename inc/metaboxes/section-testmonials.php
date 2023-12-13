<?php

function peak_testimonials_section_metabox( $metaboxes ) {
    $section_id = 0;

    if ( isset( $_REQUEST['post'] ) || isset( $_REQUEST['post_ID'] ) ) {
        $section_id = empty( $_REQUEST['post_ID'] ) ? $_REQUEST['post'] : $_REQUEST['post_ID'];
    }

    if ( 'section' != get_post_type( $section_id ) ) {
        return $metaboxes;
    }

    $section_meta = get_post_meta( $section_id, 'peak-section-type', true );
    $section_type = $section_meta['type'];
    if ( 'testimonials' != $section_type ) {
        return $metaboxes;
    }

    $metaboxes[] = array(
        'id'        => 'peak-section-testimonials',
        'title'     => __( 'feature Settings', 'peak' ),
        'post_type' => 'section',
        'context'   => 'normal',
        'priority'  => 'default',
        'sections'  => array(
            array(
                'name'   => 'peak-testimonials-section',
                'icon'   => 'fa fa-image',
                'fields' => array(
                    array(
                        'id'              => 'testimonials',
                        'type'            => 'group',
                        'title'           => __( 'testimonials', 'peak' ),
                        'button_title'    => __( 'New testimonials', 'peak' ),
                        'accordion_title' => __( 'Add New testimonials', 'peak' ),
                        'fields'          => array(
                            array(
                                'id'    => 'name',
                                'title' => __( 'Name', 'peak' ),
                                'type'  => 'text',
                            ),
                            array(
                                'id'    => 'designation',
                                'title' => __( 'Designation', 'peak' ),
                                'type'  => 'text',
                            ),
                            array(
                                'id'    => 'image',
                                'title' => __( 'Avatar', 'peak' ),
                                'type'  => 'image',
                                
                                
                            ),
                            array(
                                'id'    => 'description',
                                'title' => __( 'Description', 'peak' ),
                                'type'  => 'textarea',
                            ),

                        )
                    ),

                )
            ),

        )
    );

    return $metaboxes;
}

add_filter( 'cs_metabox_options', 'peak_testimonials_section_metabox' );