<?php
 //Template Name: Home Migrantes

 get_header();
 ?>

 
<body <?php body_class('relative'); ?>>
<?php wp_body_open(); ?>
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'gema-media' ); ?></a>
  <img class="GemaBigbackground-image" src="https://gema.media/wp-content/uploads/2022/08/fondo_home-1.svg">
    <header class="GemaBigbackground-header">
      <h1 class="GemaBigbackground-header-title">Migrantes <br/>con derechos</h1>
      <h2 class="GemaBigbackground-header-subtitle">a la salud sexual y reproductiva</h2>
      <div class="GemaBigbackground-header-text">
        <p>La población venezolana migrante llega a Colombia con necesidades en salud sexual y salud reproductiva. Cruzan la frontera esperando mejorar su situación, pero enfrentan todo tipo de barreras, comenzando por el acceso a información. Las mujeres y las personas con orientación sexual e identidad y expresión de género diversas son los grupos más vulnerables. </p>
        <p>¿Qué ha hecho el Estado para garantizar sus derechos?<br/>¿A dónde pueden acudir si necesitan un servicio?<br/>¿Cómo acercarles la información?</p>
      </div><img class="GemaBigbackground-header-arrow" src="https://gema.media/wp-content/themes/gema-media/assets/down_white-arrow.svg">
    </header>
    <div class="GemaBigbackground-circlemenu-container">
      <ul class="GemaBigbackground-circlemenu" id="GemaBigbackground-circlemenu" data-position="1">
        <li class="GemaBigbackground-circlemenu-element"><a href="https://gema.media/asi-es-migrar-y-vivir-con-vih-en-colombia/"><img class="GemaBigbackground-circlemenu-element-image" src="https://gema.media/wp-content/uploads/2022/08/migrantesderechos_reportaje_icon.svg">
            <p class="GemaBigbackground-circlemenu-element-subtitle">Reportaje</p>
            <h3 class="GemaBigbackground-circlemenu-element-title">Así es migrar y vivir con VIH en Colombia</h3></a></li>
        <li class="GemaBigbackground-circlemenu-element"><a href="https://gema.media/servicios-de-salud-sexual-y-reproductiva-en-colombia/"><img class="GemaBigbackground-circlemenu-element-image" src="https://gema.media/wp-content/uploads/2022/08/migrantesderechos_base_icon.svg">
            <p class="GemaBigbackground-circlemenu-element-subtitle">Base de datos</p>
            <h3 class="GemaBigbackground-circlemenu-element-title">Servicios de salud sexual y reproductiva en Colombia</h3></a></li>
        <li class="GemaBigbackground-circlemenu-element"><a href="https://gema.media/lo-que-cuentan-los-datos/"><img class="GemaBigbackground-circlemenu-element-image" src="https://gema.media/wp-content/uploads/2022/08/migrantesderechos_infografia_icon.svg">
            <p class="GemaBigbackground-circlemenu-element-subtitle">Infografía</p>
            <h3 class="GemaBigbackground-circlemenu-element-title">Lo que cuentan los datos</h3></a></li>
      </ul>
      <button class="GemaBigbackground-circlemenu-container-button left" onclick="GemamoveSlide('GemaBigbackground-circlemenu', false)"><img src="https://gema.media/wp-content/themes/gema-media/assets/down_white-arrow.svg"></button>
      <button class="GemaBigbackground-circlemenu-container-button right" onclick="GemamoveSlide('GemaBigbackground-circlemenu', true)"><img src="https://gema.media/wp-content/themes/gema-media/assets/down_white-arrow.svg"></button>
    </div>
    <footer class="GemaBigbackground-footer">
      <div class="GemaBigbackground-footer-elements"> 
        <div class="GemaBigbackground-footer-elements-item"> 
          <p class="GemaBigbackground-footer-elements-item-text">Un proyecto de:</p><img class="GemaBigbackground-footer-elements-item-image" src="https://gema.media/wp-content/uploads/2022/08/GEMA.svg" alt="Logo de Gema">
        </div>
        <div class="GemaBigbackground-footer-elements-item"> 
          <p class="GemaBigbackground-footer-elements-item-text">Con la financiación de:</p><img class="GemaBigbackground-footer-elements-item-image" src="https://gema.media/wp-content/uploads/2022/08/embajadaEEUU.png" alt="Logo Embajada de EEUU"><img class="GemaBigbackground-footer-elements-item-image" src="https://gema.media/wp-content/uploads/2022/08/TechCamp.png" alt="Logo Tech Camp">
        </div>
        <div class="GemaBigbackground-footer-elements-item"> 
          <p class="GemaBigbackground-footer-elements-item-text">Y con el apoyo de:</p><img class="GemaBigbackground-footer-elements-item-image" src="https://gema.media/wp-content/uploads/2022/08/cuestion_publica.png" alt="Logo Cuestión Pública">
        </div>
      </div>
      <p class="GemaBigbackground-footer-text">*Las opiniones aquí expuestas no reflejan la posición del Gobierno de Estados Unidos.</p>
      <p class="GemaBigbackground-footer-text">©GEMA - Todos los derechos reservados<br/>Julio 2022</p>
    </footer>

<?php

get_footer();
