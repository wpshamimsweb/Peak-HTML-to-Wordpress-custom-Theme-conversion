<?php
global $peak_section_id;
$peak_section_meta = get_post_meta( $peak_section_id, 'peak-section-testimonials', true );
$peak_section             = get_post( $peak_section_id );
$peak_section_title       = $peak_section->post_title;
$peak_section_description = $peak_section->post_content;

?>
<section id="<?php echo esc_attr($peak_section->post_name);?>" class="testimonial-section">
  <div class="overlay"></div>
    <div class="container">
      <div class="row section-title-container">
        <div class="col-xs-12">
          <h1 class="text-center"><?php echo esc_html( $peak_section_title ); ?></h1>
           <div class="text-center  dark-section"><?php
                echo apply_filters( 'the_content', $peak_section_description );
                ?></div>
        </div>
      </div>
       <!-- Owl Carosel for Testimonial -->
       <?php
          $peak_testimonials   = $peak_section_meta['testimonials'];
       ?>
      
       <div id="testimonial-carousel" class="owl-carousel">
        <?php
                    foreach ( $peak_testimonials as $peak_testimonial ):
                        
                        $peak_testimonial_image_id = $peak_testimonial['image'];
                        $peak_testimonial_thumbnail = wp_get_attachment_image_src($peak_testimonial_image_id,'small');
                      
                    ?>
          <div class="testimonial-wrapper">
             <blockquote class="quote">
                      <div class="quote-meta">
                        <div class="unit unit-horizontal unit-spacing-xxs unit-middle">
                          <div class="unit__left"><img class="img-circle" src="<?php echo esc_url($peak_testimonial_thumbnail[0]); ?>" alt="client avatar" width="60" height="60">
                          </div>
                          <div class="unit__body">
                            <cite><?php echo esc_html($peak_testimonial['name']);?></cite><small><span><?php echo esc_html($peak_testimonial['designation']);?></span></small>
                          </div>
                        </div>
                      </div>
                      <div class="quote-body">
                        <p>
                          <q><?php echo esc_html($peak_testimonial['description']);?></q>
                        </p>
                      </div>
            </blockquote>
       
           </div>
              <?php endforeach;?>
        </div>
        <!-- Owl Carousel Close -->
    </div>
  </section>
  <!-- Peak Testimonial Section End -->