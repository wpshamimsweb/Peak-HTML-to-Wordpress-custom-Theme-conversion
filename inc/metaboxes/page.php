<?php

function peak_section_picker_metabox($metaboxes){
    $page_id = 0;
    if ( isset( $_REQUEST['post'] ) || isset( $_REQUEST['post_ID'] ) ) {
        $page_id = empty( $_REQUEST['post_ID'] ) ? $_REQUEST['post'] : $_REQUEST['post_ID'];
    }

    $current_page_template = get_post_meta( $page_id, '_wp_page_template', true );
    if ( ! in_array( $current_page_template, array( 'page-template/landing.php' ) ) ) {
        return $metaboxes;
    }

    $metaboxes[] = array(
        'id'        => 'peak-page-sections',
        'title'     => __( 'Sections', 'peak' ),
        'post_type' => 'page',
        'context'   => 'normal',
        'priority'  => 'default',
        'sections'  => array(
            array(
                'name'     => 'peak-page-sections-section-one',
                'icon'   => 'fa fa-image',
                'fields' => array(
                    array(
                        'id'    => 'sections',
                        'title'   => __( 'Select sections', 'peak' ),
                        'type'    => 'group',
                        'button_title'    => __('New Section','peak'),
                        'accordion_title' => __('Add New Section','peak'),
                        'fields'=>array(
                            array(
                                'id'=>'section',
                                'title'=>__('Select sections','peak'),
                                'type'=>'select',
                                'options'=>'post',
                                'query_args'=>array(
                                    'post_type'=>'section',
                                    'posts_per_page'=>-1
                                )
                            )
                        )
                    ),
                )
            ),

        )
    );

    return $metaboxes;
}
add_filter('cs_metabox_options','peak_section_picker_metabox');