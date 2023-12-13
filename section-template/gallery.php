 <?php
global $peak_section_id;
$peak_section_meta        = get_post_meta( $peak_section_id, 'peak-section-gallery', true );
$peak_section             = get_post( $peak_section_id );
$peak_section_title       = $peak_section->post_title;
$peak_section_description = $peak_section->post_content;

?>

 <!-- Peak Portfolio Section Start -->
  <section id="portfolio" class="portfolio-section">
    <div class="container">
      <div class="row section-title-container section-title-container-portfolio">
        <div class="col-xs-12">
          <h1 class="text-center"><?php echo esc_html( $peak_section_title );?></h1>
           <p class="text-center light-section"><?php
                echo apply_filters( 'the_content', $peak_section_description );
                ?></p>

                <?php
$peak_gallery_items   = $peak_section_meta['portfolio'];
$peak_item_categories = [];
foreach ( $peak_gallery_items as $peak_gallery_item ) {
    $peak_gallery_item_categories = explode( ",", $peak_gallery_item['categories'] );
    foreach ( $peak_gallery_item_categories as $peak_gallery_item_category ) {
        $peak_gallery_item_category = trim( $peak_gallery_item_category );
        if ( ! in_array( $peak_gallery_item_category, $peak_item_categories ) ) {
            array_push( $peak_item_categories, $peak_gallery_item_category );
        }
    }
}

?>


<div class="section bg-white pt-2 pb-2 text-center" data-aos="fade">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="text-center">
                    <ul class="portfolio-filter text-center">
                        <li class="active"><a href="#" data-filter="*"> <?php _e( 'All', 'peak' ) ?></a></li>
                        <?php
                        foreach ( $peak_item_categories as $peak_item_category ):
                            ?>
                            <li><a href="#"
                                   data-filter=".<?php echo esc_attr( $peak_item_category ); ?>"><?php echo esc_html( $peak_item_category ); ?></a>
                            </li>
                        <?php
                        endforeach;
                        ?>
                    </ul>
                </div>

                <div class="portfolio-grid portfolio-gallery grid-4 gutter">

                    <?php
                    foreach ( $peak_gallery_items as $peak_gallery_item ):
                        $peak_item_class = str_replace( ",", " ", $peak_gallery_item['categories'] );
                        $peak_item_image_id = $peak_gallery_item['image'];
                        $peak_item_thumbnail = wp_get_attachment_image_src($peak_item_image_id,'medium');
                        $peak_item_large = wp_get_attachment_image_src($peak_item_image_id,'large');
                        $peak_item_categories_array = explode(",",$peak_gallery_item['categories']);
                    ?>
                        <div class="portfolio-item <?php echo esc_attr( $peak_item_class ); ?>">
                            <a href="<?php echo esc_url($peak_item_large[0]); ?>"
                               class="portfolio-image popup-gallery" title="Bread">
                                <img src="<?php echo esc_url($peak_item_thumbnail[0]); ?>" alt=""/>
                                <div class="portfolio-hover-title">
                                    <div class="portfolio-content">
                                        <h4><?php echo esc_html($peak_gallery_item['title']) ?></h4>
                                        <div class="portfolio-category">
                                            <?php
                                            foreach($peak_item_categories_array as $peak_item_category):
                                            printf("<span>%s</span>",trim($peak_item_category));
                                            endforeach;
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php
                    endforeach;
                    ?>
               
         <div class="peak-sizer-element"></div>
    </div>

    <!-- Filterizer container -->

    </div>
  </section>
  <!-- Peak Portfolio Sections End -->