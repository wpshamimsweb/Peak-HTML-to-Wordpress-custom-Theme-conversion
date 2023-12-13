<?php

function peak_team_section_metabox( $metaboxes ) {
    $section_id = 0;

    if ( isset( $_REQUEST['post'] ) || isset( $_REQUEST['post_ID'] ) ) {
        $section_id = empty( $_REQUEST['post_ID'] ) ? $_REQUEST['post'] : $_REQUEST['post_ID'];
    }

    if ( 'section' != get_post_type( $section_id ) ) {
        return $metaboxes;
    }

    $section_meta = get_post_meta( $section_id, 'peak-section-type', true );
    $section_type = $section_meta['type'];
    if ( 'team' != $section_type ) {
        return $metaboxes;
    }

    $metaboxes[] = array(
        'id'        => 'peak-section-team',
        'title'     => __( 'Team Settings', 'peak' ),
        'post_type' => 'section',
        'context'   => 'normal',
        'priority'  => 'default',
        'sections'  => array(
            array(
                'name'   => 'peak-team-section-one',
                'icon'   => 'fa fa-image',
                'fields' => array(
                    array(
                        'id'              => 'team',
                        'type'            => 'group',
                        'title'           => __( 'Team', 'peak' ),
                        'button_title'    => __( 'New Member', 'peak' ),
                        'accordion_title' => __( 'Add New Team Member', 'peak' ),
                        'fields'          => array(
                            array(
                                'id'    => 'name',
                                'title' => __( 'Name', 'peak' ),
                                'type'  => 'text',
                            ),
                            array(
                                'id'    => 'image',
                                'title' => __( 'Image', 'peak' ),
                                'type'  => 'image',
                            ),
                            array(
                                'id'    => 'designation',
                                'title' => __( 'designation', 'peak' ),
                                'type'  => 'text',
                            ),
                        )
                    ),

                    array(
                        'id'              => 'team2',
                        'type'            => 'group',
                        'title'           => __( 'Complete Task', 'peak' ),
                        'button_title'    => __( 'New complete project', 'peak' ),
                        'accordion_title' => __( 'Add New Team Project', 'peak' ),
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
                                'id'    => 'number',
                                'title' => __( 'Number of completed', 'peak' ),
                                'type'  => 'number',
                            ),

                        )
                    ),



                )
            ),



        )

        
    );

    return $metaboxes;

    
}

add_filter( 'cs_metabox_options', 'peak_team_section_metabox' );





