<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <?php 
  wp_head(); 
  ?>
</head>
  
<body>
  <!-- Loading Animation  -->
  <div class="loader-container">
    <div class="loader">
    </div>
  </div>
  <!-- Loading Animation Close -->

  <!-- Peak Header Start -->
  <header id="peak-header">
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">  
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo esc_url(home_url('/'));?>"><?php echo esc_html("Peak");?></a>
        </div>
      

      <?php
    echo wp_nav_menu( array(
      'location' => 'primary',
            'container_class'=>'navbar-collapse collapse',
            'container_id'=>'navbar nav',
            'menu_class'=>'nav navbar-nav navbar-right'
    ) );
    ?>
      </div>
    </nav>
  </header>
  <!-- Peak Header End -->
