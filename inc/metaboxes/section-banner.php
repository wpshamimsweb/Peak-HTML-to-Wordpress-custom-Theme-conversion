<?php

function peak_banner_section_metabox($metaboxes){
    $section_id = 0;

    if ( isset( $_REQUEST['post'] ) || isset( $_REQUEST['post_ID'] ) ) {
        $section_id = empty( $_REQUEST['post_ID'] ) ? $_REQUEST['post'] : $_REQUEST['post_ID'];
    }

    if('section'!=get_post_type($section_id)){
        return $metaboxes;
    }

    $section_meta = get_post_meta($section_id,'peak-section-type',true);
    $section_type = $section_meta['type'];
    if('banner'!=$section_type){
        return $metaboxes;
    }

    $metaboxes[] = array(
        'id'        => 'peak-section-banner',
        'title'     => __( 'Banner Settings', 'peak' ),
        'post_type' => 'section',
        'context'   => 'normal',
        'priority'  => 'default',
        'sections'  => array(
            array(
                'name'     => 'peak-banner-section-one',
                'icon'   => 'fa fa-image',
                'fields' => array(
                    array(
                        'id'              => 'banner',
                        'type'            => 'group',
                        'title'           => __( 'Chefs', 'peak' ),
                        'button_title'    => __( 'New banner', 'peak' ),
                        'accordion_title' => __( 'Add New banner', 'peak' ),
                        'fields' =>array(
                    array(
                        'id'    => 'banner_image',
                        'title'   => __( 'Banner Image', 'peak' ),
                        'type'    => 'image',
                    ),

                     array(
                                'id'    => 'title',
                                'title' => __( 'title', 'peak' ),
                                'type'  => 'text',
                            ),
                            array(
                                'id'    => 'subheading',
                                'title' => __( 'subheading', 'peak' ),
                                'type'  => 'text',
                            ),
                    array(
                        'id'    => 'button_title',
                        'title'   => __( 'Button Title', 'peak' ),
                        'type'    => 'text',
                    ),array(
                        'id'    => 'button_target',
                        'title'   => __( 'Button Target', 'peak' ),
                        'type'    => 'text',
                    ),
                )
                    ),
                )
            ),

        )
    );

    return $metaboxes;
}
add_filter('cs_metabox_options','peak_banner_section_metabox');

 