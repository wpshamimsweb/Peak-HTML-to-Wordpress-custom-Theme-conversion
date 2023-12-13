<?php
/**
 * Template Name: Landing Page
 */
?>
<?php
get_header();
?>

  <?php
   

        $peak_current_page_id = get_the_ID();
        
        $peak_page_meta = get_post_meta($peak_current_page_id,'peak-page-sections',true);
        foreach($peak_page_meta['sections'] as $peak_page_section):
            $peak_section_id = $peak_page_section['section'];
            $peak_section_meta = get_post_meta($peak_section_id,'peak-section-type',true);
            $peak_section_type = $peak_section_meta['type'];
          get_template_part("section-template/{$peak_section_type}");
        endforeach;
        ?>


        

 <?php
get_footer();
?>
  
  

