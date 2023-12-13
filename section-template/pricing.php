<?php
global $peak_section_id;
$peak_section_meta = get_post_meta( $peak_section_id, 'peak-section-pricing', true );
$peak_section             = get_post( $peak_section_id );
$peak_section_title       = $peak_section->post_title;
$peak_section_description = $peak_section->post_content;

?>

<!-- Peak Pricinig Plans Section Start -->
  <section id="pricing" class="plan-section">
    <div class="container">
      <div class="row section-title-container">
        <div class="col-xs-12">
          <h1 class="text-center"><?php echo esc_html( $peak_section_title ); ?></h1>
           <div class="text-center"><?php
                echo apply_filters( 'the_content', $peak_section_description );
                ?></div>
        </div>
      </div>
      <?php
      $peak_pricing=$peak_section_meta['pricing'];
      if($peak_pricing):
       ?>
      <div class="row">
        <?php 
          foreach($peak_pricing as $peak_price):
        ?>

        <div class="col-xs-12 col-md-4">
         <div class="pricing-table-container">
           <h2 class="price"><span class="dollar-sign"><?php echo esc_html($peak_price['sign']);?></span><?php echo esc_html($peak_price['price']);?></h2>
           <p class="pricing-title"><?php echo esc_html($peak_price['range']);?></p>
           <div class="features">
             <ul>
               <li><?php echo esc_html($peak_price['option1']);?></li>
               <li><?php echo esc_html($peak_price['option2']);?></li>
               <li><?php echo esc_html($peak_price['option3']);?></li>
               <li><?php echo esc_html($peak_price['option4']);?></li>
             </ul>
             <a href="#" class="btn btn-default pricing-table-btn"><?php echo esc_html($peak_price['button']);?></a> 
           </div>
         </div>
        </div>
        <?php endforeach;?>
      </div>
    <?php endif;?>
    </div>
  </section>
  <!-- Peak Pricinig Plans Section End -->
  

  