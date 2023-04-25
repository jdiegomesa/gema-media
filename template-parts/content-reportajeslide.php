<?php
/**
 * Template part for displaying reportaje element in home slider
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Gema Media
 */

?>

 <!-- Slide -->

<a href="<?php the_field('target_url'); ?>">
    <div class="GemaSlider-element GemaSlider-principal-element">
    <?php
        if(get_field('premio')){
    ?>
        <div class="GemaSlider-element-flag">
            <p class="GemaSlider-element-flag-text">Ganador </p><img class="GemaSlider-element-flag-img" src="<?php the_field('premio'); ?>">
        </div>
    <?php
        }
    ?>
        <picture>
            <source srcset="<?php the_field('mobile_image'); ?>" media="(max-width: 600px)">
            <source srcset="<?php echo(get_the_post_thumbnail_url()) ?>" media="(min-width: 600px)"><img class="GemaSlider-element-image" src="<?php echo(get_the_post_thumbnail_url()) ?>" alt="<?php the_title(); ?>">
        </picture>
        <div class="GemaSlider-element-info">
            <h3 class="GemaSlider-element-info-title"><?php the_title(); ?></h3>
            <p class="GemaSlider-element-info-button">Ver el especial</p>
        </div>
    </div>
</a>
