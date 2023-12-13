<?php 
global $peak_section_id;
$peak_section             = get_post( $peak_section_id );
$peak_section_title       = $peak_section->post_title;
$peak_section_description = $peak_section->post_content;
?>

<!-- Peak Services Section Start -->
  <section id="service" class="choose-skill-section service-section">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6 service-hover service-single">
          <div class="why-choose">
            <h3 id="service-heading"><?php
          echo esc_html( get_theme_mod( 'peak_services_heading', __( 'Our Mission Statement', 'customizer' ) ) );
          //echo esc_html( get_option( 'cust_services_heading', __( 'Our Mission Statement', 'customizer' ) ) );
          ?></h3>
            <p class="subheading" id="service-subheading"> <?php
                    echo esc_html(get_theme_mod('peak_services_subheading'),__('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet animi dolorem eveniet
                                harum ipsum necessitatibus nihil, pariatur praesentium quia voluptate.','customizer'));
                    ?></p>
          </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6 service-hover service-single">
          <?php

           $defaults      = [
    [
      'skill_text' => esc_html( 'Design', 'peak' ),
      'skill_range'  =>  esc_html('20%','peak'),
    
    ],
    [
      'skill_text' => esc_html( 'Development', 'peak' ),
      'skill_range'  =>  esc_html('50%','peak'),
    ],
  ];
          $peak_settings=get_theme_mod( 'services_skill',$defaults); 

          ?>
          <div class="awesome-skill">
            <h3><?php _e("Awesome Skills","peak");?></h3>
            <?php
             foreach($peak_settings as $peak_setting):
            ?>

            <h5><?php echo esc_html($peak_setting['skill_text']);?></h5>
            <div class="skill-container skill-bar" data-percent="<?php echo esc_html($peak_setting['skill_range']);?>">
              <div class="skill-identifier count-bar color-1">
                
              </div>
            </div>
            <?php
              endforeach;
            ?>
          
          </div>
        </div>
      </div>

    </div>
  </section>
  