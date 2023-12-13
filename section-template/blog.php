<?php
global $peak_section_id;
$peak_section             = get_post( $peak_section_id );
$peak_section_title       = $peak_section->post_title;
$peak_section_description = $peak_section->post_content;

?>
<!-- Peak Blog Section Start -->
  <section id="<?php echo esc_attr($peak_section->post_name);?>" class="blog-section">
    <div class="container">
      <div class="row section-title-container">
        <div class="col-xs-12">
          <h1 class="text-center"><?php echo esc_html( $peak_section_title ); ?></h1>
           <div class="text-center light-section"><?php
                echo apply_filters( 'the_content', $peak_section_description );
                ?> </div>
        </div>
      </div>

      <?php 
       $allposts = array( 

     'post_type'=> 'post', 
     'posts_per_page'   => 3,
     'orderby' => 'title',
     'order' => 'DSC'
);
$blog = new WP_Query( $allposts );
if ( $blog->have_posts() ) : 
    
    

      ?>
      <div class="row">
        <?php 
        while ($blog-> have_posts()) :
          $blog->the_post();
          $post_date=get_the_date('D');
          $post_month=get_the_date('M');

          ?>
        <div class="col-sm-12 col-sm-4">
          <article class="post-content">
            <div class="post-thumb">
              <div class="img-responsive">
                
                <?php the_post_thumbnail();?>
              </div>
              <div class="post-date"><span class="datenum"><?php echo esc_html($post_date);?></span> <br/> <?php echo esc_html($post_month);?></div>
            </div>
            <div class="post-header ">
              <h2 class="post-title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
              <p class="post-excerpt"><?php the_content();?></p>
            </div>
          </article>
        </div>
          <?php endwhile;?>
      </div>
    <?php endif;
    ?>
    </div>
    <?php wp_reset_query();?>
  </section>
  <!-- Peak Blog Section End -->