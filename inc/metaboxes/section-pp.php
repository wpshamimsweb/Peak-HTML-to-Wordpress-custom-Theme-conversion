<?php

function peak_pricing_section_metabox( $metaboxes ) {
    $section_id = 0;

    if ( isset( $_REQUEST['post'] ) || isset( $_REQUEST['post_ID'] ) ) {
        $section_id = empty( $_REQUEST['post_ID'] ) ? $_REQUEST['post'] : $_REQUEST['post_ID'];
    }

    if ( 'section' != get_post_type( $section_id ) ) {
        return $metaboxes;
    }

    $section_meta = get_post_meta( $section_id, 'peak-section-type', true );
    $section_type = $section_meta['type'];
    if ( 'pricing' != $section_type ) {
        return $metaboxes;
    }

    $metaboxes[] = array(
        'id'        => 'peak-section-pricing',
        'title'     => __( 'pricing Settings', 'peak' ),
        'post_type' => 'section',
        'context'   => 'normal',
        'priority'  => 'default',
        'sections'  => array(
            array(
                'name'   => 'peak-pricing-section',
                'icon'   => 'fa fa-image',
                'fields' => array(
                    array(
                        'id'              => 'pricing',
                        'type'            => 'group',
                        'title'           => __( 'price', 'peak' ),
                        'button_title'    => __( 'New Service', 'peak' ),
                        'accordion_title' => __( 'Add New Service', 'peak' ),
                        'fields'          => array(
                            array(
                                'id'    => 'sign',
                                'title' => __( 'Money Sign', 'peak' ),
                                'type'  => 'text',
                            ),
                            array(
                                'id'    => 'price',
                                'title' => __( 'Price', 'peak' ),
                                'type'  => 'number',
                                
                                
                            ),
                           

                            
                            array(
                                'id'    => 'range',
                                'title' => __( 'how many?', 'peak' ),
                                'type'  => 'text',
                                
                                
                            ),
                            array(
                               'id'    => 'option1',
                                'title' => __( 'Option1', 'peak' ),
                                'type'  => 'text', 

                            ),
                             array(
                               'id'    => 'option2',
                                'title' => __( 'Option2', 'peak' ),
                                'type'  => 'text', 

                            ),
                             array(
                               'id'    => 'option3',
                                'title' => __( 'Option3', 'peak' ),
                                'type'  => 'text', 

                            ),
                              array(
                               'id'    => 'option4',
                                'title' => __( 'Option4', 'peak' ),
                                'type'  => 'text', 

                            ),
                               array(
                               'id'    => 'button',
                                'title' => __( 'Button Title', 'peak' ),
                                'type'  => 'text', 

                            ),






                        ),
                    ),

                )
            ),

        )
    );

    return $metaboxes;
}

add_filter( 'cs_metabox_options', 'peak_pricing_section_metabox' );