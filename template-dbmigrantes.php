<?php
 //Template Name: DB Migrantes

 get_header();
 ?>

 
<body <?php body_class('darkbackground'); ?>>
<?php wp_body_open(); ?>
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'gema-media' ); ?></a>
<button class="GemaSidemenu-button" onclick="Gemaopen('gemasidemenu');"><img src="https://gema.media/wp-content/themes/gema-media/assets/menu_grey_icon.svg"></button>
    <nav class="GemaSidemenu" id="gemasidemenu" onclick="validateTarget(Gemaopen, 'gemasidemenu');">
      <div class="GemaSidemenu-container"><a class="GemaSidemenu-logo" href="https://gema.media"><img src="https://gema.media/wp-content/uploads/2022/08/logo_gema_color.png" alt="Logo Gema"></a><a class="GemaSidemenu-text" href="https://gema.media/">Inicio</a>
        <ul class="GemaSidemenu-menu"> 
          <li class="GemaSidemenu-menu-element"><a href="https://gema.media/asi-es-migrar-y-vivir-con-vih-en-colombia/"><img class="GemaSidemenu-menu-element-image" src="https://gema.media/wp-content/uploads/2022/08/migrantesderechos_reportaje_icon.svg">
              <p class="GemaSidemenu-menu-element-subtitle">Reportaje</p>
              <h3 class="GemaSidemenu-menu-element-title">Así es migrar y vivir con VIH en Colombia</h3></a></li>
          <li class="GemaSidemenu-menu-element active"><a href="https://gema.media/servicios-de-salud-sexual-y-reproductiva-en-colombia/"><img class="GemaSidemenu-menu-element-image" src="https://gema.media/wp-content/uploads/2022/08/migrantesderechos_base_icon.svg">
              <p class="GemaSidemenu-menu-element-subtitle">Base de datos</p>
              <h3 class="GemaSidemenu-menu-element-title">Servicios de salud sexual y reproductiva en Colombia</h3></a></li>
          <li class="GemaSidemenu-menu-element"><a href="https://gema.media/lo-que-cuentan-los-datos/"><img class="GemaSidemenu-menu-element-image" src="https://gema.media/wp-content/uploads/2022/08/migrantesderechos_infografia_icon.svg">
              <p class="GemaSidemenu-menu-element-subtitle">Infografía</p>
              <h3 class="GemaSidemenu-menu-element-title">Lo que cuentan los datos</h3></a></li>
        </ul><a class="GemaSidemenu-text" href="#" onclick="Gemaopen('creditsmodal');">Créditos</a>
      </div>
    </nav>
    <main class="GemaInfonote" style="--note_color: #801AAF;">
      <header class="GemaInfonote-header outstanding" id="GemaInfonote-header" style="--header_image: url('https://gema.media/wp-content/uploads/2022/08/fondo2.svg')">
        <p class="GemaInfonote-header-text">Base de datos</p>
        <div class="GemaInfonote-header-head"> 
          <h1 class="GemaInfonote-header-head-title">Servicios de salud sexual y reproductiva en Colombia</h1>
          <p class="GemaInfonote-header-head-subtitle">Para dar con la institución de tu interés y sus datos de contacto, selecciona el departamento, municipio o servicio. También puedes filtrar cuáles atienden a migrantes en condición irregular y si son públicas o privadas.</p>
        </div>
      </header>
      <div class="GemaDatabase" id="GemaMigrantesDB"></div>
    </main>
    <ul class="GemaSocialmenu"> 
      <li class="GemaSocialmenu-item"> <a href="#" onclick="copyToClipboard(true)"><img class="GemaSocialmenu-item-icon" src="https://gema.media/wp-content/themes/gema-media/assets/share_grey_icon.svg"></a></li>
      <li class="GemaSocialmenu-item"> <a href="#"><img class="GemaSocialmenu-item-icon" src="https://gema.media/wp-content/themes/gema-media/assets/whatsapp_grey_icon.svg"></a></li>
      <li class="GemaSocialmenu-item"> <a href=""><img class="GemaSocialmenu-item-icon" src="https://gema.media/wp-content/themes/gema-media/assets/facebook_grey_icon.svg"></a></li>
      <li class="GemaSocialmenu-item"> <a href="#"><img class="GemaSocialmenu-item-icon" src="https://gema.media/wp-content/themes/gema-media/assets/twitter_grey_icon.svg"></a></li>
      <li class="GemaSocialmenu-item"> <a href="#"><img class="GemaSocialmenu-item-icon" src="https://gema.media/wp-content/themes/gema-media/assets/linkedin_gery_icon.svg"></a></li>
    </ul>
    <div class="GemaInfonote-modal" id="creditsmodal" onclick="validateTarget(Gemaopen, 'creditsmodal');">
      <div class="GemaInfonote-modal-container"> 
        <div class="GemaInfonote-modal-names"> 
          <div class="GemaInfonote-modal-names-item"> 
            <p class="GemaInfonote-modal-names-item-title">Luisa Fernanda Gómez Cruz</p>
            <p class="GemaInfonote-modal-names-item-subtitle">Coordinación, investigación y reportaje</p>
          </div>
          <div class="GemaInfonote-modal-names-item"> 
            <p class="GemaInfonote-modal-names-item-title">José Manuel Cuevas</p>
            <p class="GemaInfonote-modal-names-item-subtitle">Edición general</p>
          </div>
          <div class="GemaInfonote-modal-names-item"> 
            <p class="GemaInfonote-modal-names-item-title">Ingrid Ramírez Fuquen</p>
            <p class="GemaInfonote-modal-names-item-subtitle">Edición del reportaje</p>
          </div>
          <div class="GemaInfonote-modal-names-item"> 
            <p class="GemaInfonote-modal-names-item-title">José Felipe Sarmiento</p>
            <p class="GemaInfonote-modal-names-item-subtitle">Fact-checking</p>
          </div>
          <div class="GemaInfonote-modal-names-item"> 
            <p class="GemaInfonote-modal-names-item-title">María Paula Vásquez</p>
            <p class="GemaInfonote-modal-names-item-subtitle">Transcripciones</p>
          </div>
          <div class="GemaInfonote-modal-names-item"> 
            <p class="GemaInfonote-modal-names-item-title">Laura Bayer Yepes</p>
            <p class="GemaInfonote-modal-names-item-subtitle">Base de datos y redacción</p>
          </div>
          <div class="GemaInfonote-modal-names-item"> 
            <p class="GemaInfonote-modal-names-item-title">Laura Castaño Giraldo</p>
            <p class="GemaInfonote-modal-names-item-subtitle">Base de datos</p>
          </div>
          <div class="GemaInfonote-modal-names-item"> 
            <p class="GemaInfonote-modal-names-item-title">Diego Villate González</p>
            <p class="GemaInfonote-modal-names-item-subtitle">Diseño e ilustración</p>
          </div>
          <div class="GemaInfonote-modal-names-item"> 
            <p class="GemaInfonote-modal-names-item-title">Juan Diego Mesa</p>
            <p class="GemaInfonote-modal-names-item-subtitle">Desarrollo web</p>
          </div>
        </div>
        <div class="GemaInfonote-modal-logos">
          <div class="GemaInfonote-modal-logos-elements"> 
            <div class="GemaInfonote-modal-logos-elements-item"> 
              <p class="GemaInfonote-modal-logos-elements-item-text">Un proyecto de:</p><img class="GemaInfonote-modal-logos-elements-item-image" src="https://gema.media/wp-content/themes/gema-media/assets/GEMA.svg" alt="Logo de Gema">
            </div>
            <div class="GemaInfonote-modal-logos-elements-item"> 
              <p class="GemaInfonote-modal-logos-elements-item-text">Con la financiación de:</p><img class="GemaInfonote-modal-logos-elements-item-image" src="https://gema.media/wp-content/themes/gema-media/assets/embajadaEEUU.png" alt="Logo Embajada de EEUU"><img class="GemaInfonote-modal-logos-elements-item-image" src="https://gema.media/wp-content/themes/gema-media/assets/TechCamp.png" alt="Logo Tech Camp">
            </div>
            <div class="GemaInfonote-modal-logos-elements-item"> 
              <p class="GemaInfonote-modal-logos-elements-item-text">Y con el apoyo de:</p><img class="GemaInfonote-modal-logos-elements-item-image" src="https://gema.media/wp-content/themes/gema-media/assets/cuestion_publica.png" alt="Logo Cuestión Pública">
            </div>
          </div>
          <p class="GemaInfonote-modal-logos-text">*Las opiniones aquí expuestas no reflejan la posición del Gobierno de Estados Unidos.</p>
          <p class="GemaInfonote-modal-logos-text">©GEMA - Todos los derechos reservados<br/>Julio 2022</p>
        </div>
      </div>
    </div><a class="GemaInfonote-fixedbutton small" href="#" onclick="Gemaopen('disclamermodal');"><img src="https://gema.media/wp-content/themes/gema-media/assets/alert_yellow_icon.svg"></a><a class="GemaInfonote-fixedbutton big hidden" id="MigrantesBot"><img src="https://gema.media/wp-content/uploads/2022/08/BOT-1.svg" alt="¿Conoces nuestro bot de Whatsapp?"></a>
    <div class="GemaInfonote-modal" id="disclamermodal" onclick="validateTarget(Gemaopen, 'disclamermodal');">
      <div class="GemaInfonote-modal-container"> 
        <p class="GemaInfonote-modal-text">Fuentes: Ministerio de Salud y Plataforma R4V </p>
        <p class="GemaInfonote-modal-text">Esta base de datos presenta los servicios registrados en el Registro Especial de Prestadores de Servicios de Salud (REPS)* asociados a la salud sexual y a la salud reproductiva, y las entidades habilitadas para prestarlos, según la información que las entidades departamentales y distritales de salud reportaron a mayo de 2022. Además, incluye las organizaciones y servicios que agrupa la Plataforma de Coordinación Interagencial para Refugiados de Venezuela (Plataforma R4V) a través del Grupo Interagencial sobre Flujos Migratorios Mixtos (GIFMM), coliderado por la OIM y Acnur.</p>
        <p class="GemaInfonote-modal-text">*El REPS no cuenta con información específica o claramente accesible sobre sexología, productos de salud menstrual, control posparto e interrupción voluntaria del embarazo.</p>
      </div>
    </div>
    <script src="https://gema.media/wp-content/especiales/migrantes_salud_sexual/modules.js"> </script>
    <script src="https://gema.media/wp-content/especiales/migrantes_salud_sexual/gema_migrantes_db.js"></script>
<?php
get_footer();
