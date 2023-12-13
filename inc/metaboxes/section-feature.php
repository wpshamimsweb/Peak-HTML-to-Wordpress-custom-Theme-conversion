<?php

function peak_feature_section_metabox( $metaboxes ) {
    $section_id = 0;

    if ( isset( $_REQUEST['post'] ) || isset( $_REQUEST['post_ID'] ) ) {
        $section_id = empty( $_REQUEST['post_ID'] ) ? $_REQUEST['post'] : $_REQUEST['post_ID'];
    }

    if ( 'section' != get_post_type( $section_id ) ) {
        return $metaboxes;
    }

    $section_meta = get_post_meta( $section_id, 'peak-section-type', true );
    $section_type = $section_meta['type'];
    if ( 'feature' != $section_type ) {
        return $metaboxes;
    }

    $metaboxes[] = array(
        'id'        => 'peak-section-feature',
        'title'     => __( 'feature Settings', 'peak' ),
        'post_type' => 'section',
        'context'   => 'normal',
        'priority'  => 'default',
        'sections'  => array(
            array(
                'name'   => 'peak-feature-section-one',
                'icon'   => 'fa fa-image',
                'fields' => array(
                    array(
                        'id'              => 'feature',
                        'type'            => 'group',
                        'title'           => __( 'feature', 'peak' ),
                        'button_title'    => __( 'New Service', 'peak' ),
                        'accordion_title' => __( 'Add New Service', 'peak' ),
                        'fields'          => array(
                            array(
                                'id'    => 'name',
                                'title' => __( 'Name', 'peak' ),
                                'type'  => 'text',
                            ),
                            array(
                                'id'    => 'icon',
                                'title' => __( 'Icon', 'peak' ),
                                'type'  => 'text',
                                
                                
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

add_filter( 'cs_metabox_options', 'peak_feature_section_metabox' );