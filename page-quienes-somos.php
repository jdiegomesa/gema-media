<?php
 //Quiénes somos Template

 get_header();
 ?>
<body>
<?php wp_body_open(); ?>
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'gema-media' ); ?></a>
<?php
  get_template_part( 'template-parts/block', 'mainmenu' );
?>
  <h1 class="hidden">Quiénes somos</h1>
  <section class="GemaQuienes">
    <div class="GemaQuienes-content">
      <?php the_content() ?>
    </div>
    <div class="GemaQuienes-elements">
      <p class="GemaQuienes-linetitle">Cofundador@s</p>
<?php

  $gemaprincipalmembers_args = array(
    'post_type' => 'colaborador',
    'post_status' => 'publish',
    'orderby' => 'date',
    'order' => 'ASC',
    'meta_query' => [
        [
            'key'	  	=> 'principal',
            'compare'	=> '=',
            'value'	  	=> '1'
        ]
    ]
  );
  $gemaprincipalmembers = new WP_Query($gemaprincipalmembers_args);
  if ($gemaprincipalmembers -> have_posts()){
      while ($gemaprincipalmembers -> have_posts()){
          $gemaprincipalmembers->the_post();
?>
        <div class="GemaQuienes-elements-item" onclick="Gemaopen('<?php echo get_the_ID(); ?>');">
          <img class="GemaQuienes-elements-item-image" src="<?php echo(get_the_post_thumbnail_url()) ?>" alt="<?php the_title(); ?>">
          <div class="GemaQuienes-elements-item-content"> 
            <p class="GemaQuienes-elements-item-content-title"><?php the_title(); ?></p>
            <p class="GemaQuienes-elements-item-content-text"><?php the_field('position'); ?></p>
          </div>
        </div>
<?php
      }
  };
  wp_reset_query();

  if(get_field('phrase')){
?>
  <p class="GemaQuienes-quote"><?php the_field('phrase'); ?></p>
<?php
  };

  $gemaothermembers_args = array(
    'post_type' => 'colaborador',
    'post_status' => 'publish',
    'orderby' => 'date',
    'order' => 'ASC',
    'meta_query' => [
        [
            'key'	  	=> 'principal',
            'compare'	=> '=',
            'value'	  	=> '0'
        ]
    ]
  );
  $gemaothermembers = new WP_Query($gemaothermembers_args);
  if ($gemaothermembers -> have_posts()){
?>
      <p class="GemaQuienes-linetitle">Colaborador@s</p>
      <div class="GemaQuienes-elements">
<?php
      while ($gemaothermembers -> have_posts()){
          $gemaothermembers->the_post();
?>
        <div class="GemaQuienes-elements-item" onclick="Gemaopen('<?php echo get_the_ID(); ?>');">
          <img class="GemaQuienes-elements-item-image" src="<?php echo(get_the_post_thumbnail_url()) ?>" alt="<?php the_title(); ?>">
          <div class="GemaQuienes-elements-item-content"> 
            <p class="GemaQuienes-elements-item-content-title"><?php the_title(); ?></p>
<?php
            if(get_field('position')){
?>
            <p class="GemaQuienes-elements-item-content-text"><?php the_field('position'); ?></p>
<?php 
            };
?>
          </div>
        </div>
<?php
      }
?>
      </div>
<?php
  };
  wp_reset_query();
?>
    </section>
<?php
  $gemamembers_args = array(
    'post_type' => 'colaborador',
    'post_status' => 'publish',
    'orderby' => 'date',
    'order' => 'ASC'
  );
  $gemamembers = new WP_Query($gemamembers_args);
  if ($gemamembers -> have_posts()){
      while ($gemamembers -> have_posts()){
          $gemamembers->the_post();
?>
    <div class="GemaQuienes-modal" id="<?php echo get_the_ID(); ?>" onclick="validateTarget(Gemaopen, '<?php echo get_the_ID(); ?>');">
      <div class="GemaQuienes-modal-container"> 
        <img class="GemaQuienes-modal-image" src="<?php echo(get_the_post_thumbnail_url()) ?>" alt="<?php the_title(); ?>">
        <div class="GemaQuienes-modal-info">
          <p class="GemaQuienes-modal-info-name"><?php the_title(); ?></p>
          <p class="GemaQuienes-modal-info-position"><?php the_field('position'); ?></p>
          <p class="GemaQuienes-modal-info-text"><?php echo get_the_excerpt(); ?></p>
        </div>
        <div class="GemaQuienes-modal-social">
<?php
  if(get_field('email')){
?>
          <a class="GemaQuienes-modal-social-icon" href="mailto:<?php the_field('email'); ?>" target="_blank"> <img src="https://gema.media/wp-content/themes/gema-media/assets/mail_softgrey_icon.svg" alt=""></a>
<?php
  };
  if(get_field('instagram')){
?>
          <a class="GemaQuienes-modal-social-icon" href="<?php the_field('instagram'); ?>" target="_blank"> <img src="https://gema.media/wp-content/themes/gema-media/assets/instagram_softgrey_icon.svg" alt=""></a>
<?php
  };
  if(get_field('twitter')){
    ?>
          <a class="GemaQuienes-modal-social-icon" href="<?php the_field('twitter'); ?>" target="_blank"> <img src="https://gema.media/wp-content/themes/gema-media/assets/twitter_softgrey_icon.svg" alt=""></a>
<?php
  };
  if(get_field('facebook')){
?>
          <a class="GemaQuienes-modal-social-icon" href="<?php the_field('facebook'); ?>" target="_blank"> <img src="https://gema.media/wp-content/themes/gema-media/assets/facebook_softgrey_icon.svg" alt=""></a>
<?php
  };
?>
        </div>
      </div>
    </div>
<?php
    }
  };
  wp_reset_query();
  get_footer();
?>
