<?php
 //Home Template

 get_header();
 ?>

 
<body>
<?php wp_body_open(); ?>
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'gema-media' ); ?></a>
<?php
  get_template_part( 'template-parts/block', 'mainmenu' );
?>
    <h1 class="hidden">Gema</h1>
    <section class="GemaSlider">
      <h2 class="hidden">Últimos contenidos</h2>
      <div class="GemaSlider-container" id="GemasliderHome" data-position="1">
  <?php
    $gemaslide_args = array(
      'post_type' => 'reportaje',
      'posts_per_page' => 5,
      'post_status' => 'publish',
      'orderby' => 'date',
      'order' => 'DESC',
      'meta_query' => [
          [
              'key'	  	=> 'highlight',
              'compare'	=> '=',
              'value'	  	=> '1'
          ]
      ]
    );
    $gemaslide = new WP_Query($gemaslide_args);
    if ($gemaslide -> have_posts()){
        while ($gemaslide -> have_posts()){
            $gemaslide->the_post();
            get_template_part( 'template-parts/content', 'reportajeslide' );
        }
    };
    wp_reset_query();
?>
      </div>
      <button class="GemaSlider-button" aria-label="Ir a slider anterior" onclick="GemaprevSlide('GemasliderHome', 'GemaSlider-principal-element');"><img src="https://gema.media/wp-content/themes/gema-media/assets/down_white-arrow.svg" alt="Flecha a la izquierda"></button>
      <button class="GemaSlider-button" aria-label="Ir a slider siguiente" onclick="GemanextSlide('GemasliderHome', 'GemaSlider-principal-element');"><img src="https://gema.media/wp-content/themes/gema-media/assets/down_white-arrow.svg" alt="Flecha a la derecha"></button>
      <!-- <div class="GemaSlider-dots">
        <button class="GemaSlider-dots-element active" aria-label="Ir a slider número 1" onclick="GemagotoSlide('GemasliderHome', 'GemaSlider-principal-element', 1);"></button>
        <button class="GemaSlider-dots-element" aria-label="Ir a slider número 2" onclick="GemagotoSlide('GemasliderHome', 'GemaSlider-principal-element', 2);"></button>
      </div> -->
    </section>
<?php
get_footer();
