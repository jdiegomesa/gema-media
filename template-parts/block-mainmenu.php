<?php
/**
 * Template part for display main menu
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Gema_Media
 */

?>


<nav class="GemaMainmenu" id="GemaMainmenu" onclick="validateTarget(Gemaopen, 'GemaMainmenu');">
  <div class="GemaMainmenu-mobile"> 
    <button class="GemaMainmenu-hamb" onclick="Gemaopen('GemaMainmenu');">
      <img src="<?php echo get_stylesheet_directory_uri();?>/assets/hamb_menu.svg" alt="">
    </button>
    <a href="<?php echo(get_site_url()) ?>">
      <img class="GemaMainmenu-icon" src="<?php echo esc_url( wp_get_attachment_image_src( get_theme_mod( 'custom_logo' ), 'full' )[0] ); ?>" alt="">
    </a>
    <button class="GemaMainmenu-hamb" onclick="Gemaopen('GemaShareMenu');">
      <img src="<?php echo get_stylesheet_directory_uri();?>/assets/share_softgrey_icon.svg" alt="">
    </button>
  </div>
  <div class="GemaMainmenu-container">
    <a class="GemaMainmenu-logo" href="<?php echo(get_site_url()) ?>">
      <img src="<?php echo esc_url( wp_get_attachment_image_src( get_theme_mod( 'custom_logo' ), 'full' )[0] ); ?>
" alt="Gema Media">
    </a>
    <ul class="GemaMainmenu-items"> <a href=""> 
      <!-- 
        <li class="GemaMainmenu-items-element genero">Género <span></span></li></a><a href=""> 
        <li class="GemaMainmenu-items-element educacion">Educación<span></span></li></a><a href=""> 
        <li class="GemaMainmenu-items-element migracion">Migración <span></span></li></a><a href=""> 
        <li class="GemaMainmenu-items-element ambiente">Ambiente<span></span></li></a> -->
    </ul>
    <div class="GemaMainmenu-footer">
      <a class="GemaMainmenu-footer-who" href="https://gema.media/quienes-somos/">Quiénes somos </a>
      <div class="GemaMainmenu-footer-social">
        <a target="_blank" class="GemaMainmenu-footer-social-element" href="mailto:gemamedia.co@gmail.com">
          <img src="<?php echo get_stylesheet_directory_uri();?>/assets/mail_softgrey_icon.svg" alt=""></a>
        <a target="_blank" class="GemaMainmenu-footer-social-element" href="https://www.instagram.com/gemamedia_co/"><img src="<?php echo get_stylesheet_directory_uri();?>/assets/instagram_softgrey_icon.svg" alt=""></a>
        <a target="_blank" class="GemaMainmenu-footer-social-element" href="https://twitter.com/gemamedia_co"><img src="<?php echo get_stylesheet_directory_uri();?>/assets/twitter_softgrey_icon.svg" alt=""></a>
        <a target="_blank" class="GemaMainmenu-footer-social-element" href="https://www.facebook.com/gemamediaco"><img src="<?php echo get_stylesheet_directory_uri();?>/assets/facebook_softgrey_icon.svg" alt=""></a>
        <a target="_blank" class="GemaMainmenu-footer-social-element" href="https://www.tiktok.com/@gemamedia_co"><img src="https://gema.media/wp-content/uploads/2023/04/tiktok_softgrey_icon.svg" alt=""></a>
        <a target="_blank" class="GemaMainmenu-footer-social-element" href="https://www.linkedin.com/company/gemamedia/"><img src="https://gema.media/wp-content/uploads/2023/04/linkedin_softgrey_icon.svg" alt=""></a>
      </div>
    </div>
  </div>
  <div class="GemaMainmenu-share <?php if(get_field('desktop_share')){ echo('desktop');} ?>" id="GemaShareMenu">
    <p class="GemaMainmenu-share-text">Comparte</p>
    <div class="GemaMainmenu-share-buttons">
      <a class="GemaMainmenu-share-buttons-element" target="_blank" href="https://wa.me/?text=<?php echo (urlencode(get_the_title()) . '%0A' . urlencode(get_permalink())); ?>">
        <img src="<?php echo get_stylesheet_directory_uri();?>/assets/whatsapp_grey_icon.svg" alt=""></a>
      <a class="GemaMainmenu-share-buttons-element" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo(urlencode(get_permalink())); ?>&quote=<?php echo (urlencode(get_the_title())); ?>">
        <img src="<?php echo get_stylesheet_directory_uri();?>/assets/facebook_grey_icon.svg" alt=""></a>
      <a class="GemaMainmenu-share-buttons-element" target="_blank" href="https://twitter.com/intent/tweet?text=<?php echo (urlencode(get_the_title())); ?>%20%20<?php echo(urlencode(get_permalink())); ?>">
        <img src="<?php echo get_stylesheet_directory_uri();?>/assets/twitter_grey_icon.svg" alt=""></a>
      <a class="GemaMainmenu-share-buttons-element" target="_blank" href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo(urlencode(get_permalink())); ?>">
        <img src="<?php echo get_stylesheet_directory_uri();?>/assets/linkedin_gery_icon.svg" alt=""></a>
    </div>
  </div>
</nav>



