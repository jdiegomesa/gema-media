<?php
 //Template Name: Reportaje estándar
 
 
 get_header();
 ?>

 
<body>
<?php wp_body_open(); ?>
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'gema-media' ); ?></a>
<?php
  get_template_part( 'template-parts/block', 'mainmenu' );
?>
 <section class="GemaReportaje">
      <picture>
        <source srcset="<?php the_field('mobile_image'); ?>" media="(max-width: 600px)">
        <source srcset="<?php echo(get_the_post_thumbnail_url()) ?>" media="(min-width: 600px)">
        <img class="GemaReportaje-image" src="<?php echo(get_the_post_thumbnail_url()) ?>" alt="<?php the_title(); ?>">
      </picture>
      <h1 class="GemaReportaje-title"><?php the_title(); ?></h1>

<?php if(get_field('sumario')){
?>
    <p class="GemaReportaje-resume"><?php the_field('sumario'); ?></p>
<?php
    }
?>

    <p class="GemaReportaje-author">
      Por: 
  <?php 
      if(get_field('author')){
        the_field('author');
      }else{
        echo('Gema Media');
      }
  ?>
    </p>
     
      <div class="GemaReportaje-content">
        <?php
          the_content();
        ?>
      </div>
    </section>

<?php

get_footer();
