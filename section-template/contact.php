<?php
global $peak_section_id;
$peak_section             = get_post( $peak_section_id );
$peak_section_title       = $peak_section->post_title;
$peak_section_description = $peak_section->post_content;

?>
<!-- Peak Contact Section Start -->
  <section id="<?php echo esc_attr($peak_section->post_name);?>" class="contact-section">
    <div class="overlay"></div>
    <div class="container">
      <div class="row section-title-container">
        <div class="col-xs-12">
          <h1 class="text-center"><?php echo esc_html($peak_section_title);?></h1>
           <div  class="text-center dark-section"><?php
                echo apply_filters( 'the_content', $peak_section_description );?></p>
        </div>
      </div>
    
      <div class="row">
        
        <div class="col-xs-12 col-sm-12 contact-form-section">
          <!-- Contact Form Start -->
          <form action="#">
            <?php wp_nonce_field('contact','contact');?>
            <div class="row">
              <div class="col-xs-12 col-sm-6">
                 <div class="form-group">
                  <input type="text" class="form-control" id="name" placeholder="Name" style="color:#313131" required>
                </div>
              </div>
              <div class="col-xs-12 col-sm-6">
                <div class="form-group">
                  <input type="tel" class="form-control" id="phone" placeholder="Phone" style="color:#313131" required>
                </div>
              </div>
              <div class="col-xs-12">
                <div class="form-group">
                  <input type="email" class="form-control" id="email" placeholder="Valid Email" style="color:#313131" required>
                </div>
              </div>
            </div>
            <div class="form-group">
              <textarea class="form-control" rows="5" id="message" placeholder="Your Message" style="color:#313131" required></textarea>
            </div>
            
                <div class="form-group">
           <input type="submit" id="send-message" class="btn btn-primary btn-outline-primary btn-block"
                     value="Send Message">
                   </div>
                
          </form>
          <!-- Contact Form End -->
        </div>
      </div>
    </div>

  </section>
  <!-- Peak Contact Sections End -->