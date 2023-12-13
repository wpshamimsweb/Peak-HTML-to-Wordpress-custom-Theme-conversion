<?php
global $peak_section_id;
$peak_section_meta        = get_post_meta( $peak_section_id, 'peak-section-feature', true );
$peak_section             = get_post( $peak_section_id );
$peak_section_title       = $peak_section->post_title;
$peak_section_description = $peak_section->post_content;
?>

<!-- Peak Skills Section Start -->
  <section id="features" class="skill-section">
    <div class="container">
      <div class="row section-title-container">
        <div class="col-xs-12">
          <h1 class="text-center"><?php echo esc_html( $peak_section_title ); ?></h1>
          <div class="text-center">
         <?php
                echo apply_filters( 'the_content', $peak_section_description );
                ?>
              </div>
        </div>
      </div>
      <?php
        $peak_feature = $peak_section_meta['feature'];
        if($peak_feature):
        ?>
        <div class="row">
            <?php foreach ($peak_feature as $peak_feature): ?>
        <div class="col-xs-12 col-sm-4 key-features">
          <div class="key-feature-single-sec">
            <div class="icon">  
              <span class="fa fa-<?php echo esc_html($peak_feature['icon']); ?>""></span>
            </div>
            <div class="key-content">
              <h2><?php echo esc_html($peak_feature['name']); ?></h2>
              <?php echo apply_filters('the_content',$peak_feature['description']); ?>
            </div>
          </div>
        </div>
        <?php endforeach;?>
        </div>
        <?php endif;?>
      </div> 
    </div>
  </section>
  <!-- Peak Skills Section End -->