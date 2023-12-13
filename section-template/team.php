   <?php
  global $peak_section_id;
  $peak_section_meta        = get_post_meta( $peak_section_id, 'peak-section-team', true );
  $peak_section             = get_post( $peak_section_id );
  $peak_section_title       = $peak_section->post_title;
  $peak_section_description = $peak_section->post_content;

  ?>


  <!-- Peak Team Section Start -->
    <section id="<?php echo esc_attr($peak_section->post_name);?>" class="team-section">
      <div class="container">
        <div class="row section-title-container">
          <div class="col-xs-12">
            <h1 class="text-center"><?php echo esc_html( $peak_section_title );?></h1>
             <p class="text-center light-section"><?php
                  echo apply_filters( 'the_content', $peak_section_description );
                  ?></p>
          </div>
        </div>

        <?php 
         $peak_team_members   = $peak_section_meta['team'];
        ?>
        <div class="row">
          <?php
                      foreach ( $peak_team_members as $peak_team_member ):
                          
                          $peak_member_image_id = $peak_team_member['image'];
                          $peak_member_thumbnail = wp_get_attachment_image_src($peak_member_image_id,'large');
                        
                      ?>
         <div class="col-xs-12 col-sm-4">
           <div class="single-team">
            <figure class="team-fig">
              <div class="fig-header">
                <img src="<?php echo esc_url($peak_member_thumbnail[0]); ?>" alt="profile img">
                <div class="icons">
                    <a href="#" class="fb-color"><i class="fa fa-facebook"></i></a>
                    <a href="#" class="tt-color"><i class="fa fa-twitter"></i></a>
                    <a href="#" class="inst-color"><i class="fa fa-instagram"></i></a>
                  </div>
                </div>
              <figcaption class="team-caption">
                <div class="team-info text-center">
                  <h4><?php echo esc_html($peak_team_member['name']);?></h4> 
                  <p><?php echo esc_html($peak_team_member['designation']);?></p>
                </div>
              </figcaption>            
            </figure>
          </div>
          </div>
        <?php endforeach;?>
          
        </div>
      </div>
    </section>
    <!-- Peak Team Section End -->


    <!-- Peak Quick Facts -->
    <?php

    $peak_team2=$peak_section_meta['team2'];

    ?>
    <section id="quickfact" class="qf-section">
        <div class="overlay">  </div>
        <?php if($peak_team2):?>
        <div class="container">


            <?php foreach($peak_team2 as $peak_teamtwo):?>
          <div class="col-sm-4 col-xs-12 counter-col">
            <div class="counter text-center">
              <div class="icon"><i class="fa fa-<?php echo esc_html($peak_teamtwo['icon']);?>" aria-hidden="true"></i></div>
              <div class="numscroller number animateNumber active" data-min="1" data-max="<?php echo esc_html($peak_teamtwo['number']);?>" data-delay="5" data-increment="10" data-num="<?php echo esc_html($peak_teamtwo['number']);?>">0</div>
              <p><?php echo esc_html($peak_teamtwo['name']);?></p>
            </div>
          </div>
          <?php endforeach;?>
        </div>
      <?php endif;?>
    </section>
    <!-- Peak Quick Facts End -->