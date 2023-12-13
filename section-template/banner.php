<?php
global $peak_section_id;
$peak_section_meta = get_post_meta( $peak_section_id, 'peak-section-banner', true );
$peak_banner_image = get_template_directory_uri() . '/assets/images/slider-1.jpg';
if ( isset( $peak_section_meta['banner_image'] ) ) {
    $peak_banner_image = wp_get_attachment_image_src( $peak_section_meta['banner_image'], 'full' );
}
$peak_section             = get_post( $peak_section_id );
$peak_section_title       = $peak_section->post_title;
$peak_section_description = $peak_section->post_content;

?>

<!-- Slider Section Start -->
  <section id="<?php echo esc_attr($peak_section->post_name);?>" class="hero-background-slider">
      <div id="hero-slide-carousel" class="carousel slide carousel-slide" data-ride="carousel" data-interval="5000">
          <ol class="carousel-indicators">
              <li data-target="#hero-slide-carousel" data-slide-to="0" class="active"></li>
              <li data-target="#hero-slide-carousel" data-slide-to="1" class=""></li>
              <li data-target="#hero-slide-carousel" data-slide-to="2" class=""></li>
          </ol>
          <?php
          $peak_banners = $peak_section_meta['banner'];
        if ( $peak_banners ):

            ?>
           
          <div class="carousel-inner" role="listbox">

                <?php
                foreach ( $peak_banners as $peak_banner ):
                  


                    $peak_banner_image = wp_get_attachment_image_src( $peak_banner['banner_image'],'full' );
                   
                    ?>
              <div class="item <?php 
              if($peak_banner['banner_image']==12)
              {
                echo esc_attr("active","peak");
              }?>">
                  <div class="hero-slide-item slide"
                  style="background: url(<?php echo esc_url( $peak_banner_image[0] ); ?>);">
                      <div class="container hero-block">
                        <div class="row">
                            <div class="col-sm-8 col-md-6">
                              <div class="hero-text-container">
                                  <div class="hero-text-title">                        
                                      <h2 class=""><?php echo esc_html($peak_banner['title']);?></h2>
                                      <p class=""><?php echo esc_html($peak_banner['subheading']);?></p>
                                    </div>
                                  <div class="hero-text-btn">
                                    <a href="#." class="btn action-btn-inverse"><?php echo esc_html($peak_banner['button_title']);?></a>
                                  </div>
                              </div>
                            </div>
                        </div>
                      </div>
                  </div>
              </div>

              <?php 

               endforeach;
              ?>
          </div>

        <?php 
          
      endif;?>
      </div>
  </section>
  <!-- Slider Section End -->