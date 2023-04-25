<?php
/**
 * Gema Media functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Gema_Media
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function gema_media_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on Gema Media, use a find and replace
		* to change 'gema-media' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'gema-media', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'gema-media' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'gema_media_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'gema_media_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function gema_media_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'gema_media_content_width', 640 );
}
add_action( 'after_setup_theme', 'gema_media_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function gema_media_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'gema-media' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'gema-media' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'gema_media_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function gema_media_scripts() {
	wp_enqueue_style( 'gema-media-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'gema-media-style', 'rtl', 'replace' );

	wp_enqueue_script( 'gema-media-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'gema_media_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
* Allow additional MIME types
* Use 'text/plain' instead of 'application/json' for JSON because of a current Wordpress core bug
*/

function add_upload_mimes( $types ) { 
	$types['json'] = 'text/plain';
	return $types;
}
add_filter( 'upload_mimes', 'add_upload_mimes' );

// Crear tipo de contenido mapa migrantes

function migrantMap_type(){

    $labels = array(
        'name' =>  _x( 'Mapa Migrantes', 'post type general name' ),
        'singular_name' => _x( 'Mapa Migrantes', 'post type singular name' ),
        'menu_name' => 'Mapa Migrantes',
        'add_new' => _x( 'Agregar', 'Mapa Migrantes' ),
        'add_new_item' => __( 'Agregar nuevo Mapa Migrantes' ),
        'edit_item' => __( 'Editar Mapa Migrantes' ),
        'new_item' => __( 'Nuevo Mapa Migrantes' ),
        'all_items' => __( 'Todos los Mapas Migrantes' ),
        'view_item' => __( 'Ver Mapas Migrantes' ),
        'search_items' => __( 'Buscar Mapas Migrantes' ),
        'not_found' => __( 'No se encontraron Mapas Migrantes' ),
        'not_found_in_trash' => __( 'No se encontraron Mapas Migrantes en la papelera' ), 
        'parent_item_colon' => '',
    );

    $args_migrantMap = array(
        'labels' => $labels,
        'description' => 'Mapas Migrantes listados en el Home',
        'public' => false,
				'show_ui' => true,
        'has_archive' => true,
        'show_in_menu' => true,
        'menu_position' => 40,
        'menu_icon' => 'dashicons-welcome-widgets-menus',
        'can_export' => true,
        'publicly_queryable' => false,
        'rewrite' => array('slug' => 'migrantMaps'),
        'show_in_rest' => true,
				'supports' => array('title', 'custom-fields', 'page-attributes'),
        'capability_type' => 'migrantMap',
        'capabilities' => array(
            'read_post' => 'read_migrantMap',
            'publish_posts' => 'publish_migrantMaps',
            'edit_posts' => 'edit_migrantMaps',
            'edit_others_posts' => 'edit_others_migrantMaps',
            'delete_posts' => 'delete_migrantMaps',
            'delete_others_posts' => 'delete_others_migrantMaps',
            'read_private_posts' => 'read_private_migrantMaps',
            'edit_post' => 'edit_migrantMap',
            'delete_post' => 'delete_migrantMap',

        ),
        'map_meta_cap' => true
    );

    register_post_type('migrantMap', $args_migrantMap);
}
add_action('init', 'migrantMap_type');

function add_migrantMap_caps() {
  $role = get_role( 'administrator' );
  $role->add_cap( 'edit_migrantMap' ); 
  $role->add_cap( 'edit_migrantMaps' ); 
  $role->add_cap( 'edit_others_migrantMaps' ); 
  $role->add_cap( 'publish_migrantMaps' ); 
  $role->add_cap( 'read_migrantMap' ); 
  $role->add_cap( 'read_private_migrantMaps' ); 
  $role->add_cap( 'delete_migrantMap' ); 
  $role->add_cap( 'edit_published_migrantMaps' );   //added
  $role->add_cap( 'delete_published_migrantMaps' ); //added
}
add_action( 'admin_init', 'add_migrantMap_caps');

// Crear tipo de contenido organización migrantes

function migrantOrganization_type(){

    $labels = array(
        'name' =>  _x( 'Organización Migrantes', 'post type general name' ),
        'singular_name' => _x( 'Organización Migrantes', 'post type singular name' ),
        'menu_name' => 'Organización Migrantes',
        'add_new' => _x( 'Agregar', 'Organización Migrantes' ),
        'add_new_item' => __( 'Agregar nueva Organización Migrantes' ),
        'edit_item' => __( 'Editar Organización Migrantes' ),
        'new_item' => __( 'Nuevo Organización Migrantes' ),
        'all_items' => __( 'Todas las Organizaciones Migrantes' ),
        'view_item' => __( 'Ver Organizaciones Migrantes' ),
        'search_items' => __( 'Buscar Organizaciones Migrantes' ),
        'not_found' => __( 'No se encontraron Organizaciones Migrantes' ),
        'not_found_in_trash' => __( 'No se encontraron Organizaciones Migrantes en la papelera' ), 
        'parent_item_colon' => '',
    );

    $args_migrantOrganization = array(
        'labels' => $labels,
        'description' => 'Organizaciones Migrantes listados en el Home',
        'public' => false,
				'show_ui' => true,
        'has_archive' => true,
        'show_in_menu' => true,
        'menu_position' => 30,
        'menu_icon' => 'dashicons-admin-multisite',
        'can_export' => true,
        'publicly_queryable' => false,
        'rewrite' => array('slug' => 'migrantOrganizations'),
        'show_in_rest' => true,
				'supports' => array('title', 'custom-fields', 'page-attributes'),
        'capability_type' => 'migrantOrganization',
        'capabilities' => array(
            'read_post' => 'read_migrantOrganization',
            'publish_posts' => 'publish_migrantOrganizations',
            'edit_posts' => 'edit_migrantOrganizations',
            'edit_others_posts' => 'edit_others_migrantOrganizations',
            'delete_posts' => 'delete_migrantOrganizations',
            'delete_others_posts' => 'delete_others_migrantOrganizations',
            'read_private_posts' => 'read_private_migrantOrganizations',
            'edit_post' => 'edit_migrantOrganization',
            'delete_post' => 'delete_migrantOrganization',

        ),
        'map_meta_cap' => true
    );

    register_post_type('migrantOrganization', $args_migrantOrganization);
}
add_action('init', 'migrantOrganization_type');

function add_migrantOrganization_caps() {
  $role = get_role( 'administrator' );
  $role->add_cap( 'edit_migrantOrganization' ); 
  $role->add_cap( 'edit_migrantOrganizations' ); 
  $role->add_cap( 'edit_others_migrantOrganizations' ); 
  $role->add_cap( 'publish_migrantOrganizations' ); 
  $role->add_cap( 'read_migrantOrganization' ); 
  $role->add_cap( 'read_private_migrantOrganizations' ); 
  $role->add_cap( 'delete_migrantOrganization' ); 
  $role->add_cap( 'edit_published_migrantOrganizations' );   //added
  $role->add_cap( 'delete_published_migrantOrganizations' ); //added
}
add_action( 'admin_init', 'add_migrantOrganization_caps');

// Crear tipo de contenido reportaje

function reportaje_type(){

    $labels = array(
        'name' =>  _x( 'Reportaje', 'post type general name' ),
        'singular_name' => _x( 'Reportaje', 'post type singular name' ),
        'menu_name' => 'Reportaje',
        'add_new' => _x( 'Agregar', 'Reportaje' ),
        'add_new_item' => __( 'Agregar nueva Reportaje' ),
        'edit_item' => __( 'Editar Reportaje' ),
        'new_item' => __( 'Nuevo Reportaje' ),
        'all_items' => __( 'Todas las Reportajes' ),
        'view_item' => __( 'Ver Reportajes' ),
        'search_items' => __( 'Buscar Reportajes' ),
        'not_found' => __( 'No se encontraron Reportajes' ),
        'not_found_in_trash' => __( 'No se encontraron Reportajes en la papelera' ), 
        'parent_item_colon' => '',
    );

    $args_reportaje = array(
        'labels' => $labels,
        'description' => 'Reportajes listados en el Home',
        'public' => false,
				'show_ui' => true,
        'has_archive' => true,
        'show_in_menu' => true,
        'menu_position' => 40,
        'menu_icon' => 'dashicons-edit-page',
        'can_export' => true,
        'publicly_queryable' => false,
        'rewrite' => array('slug' => 'reportajes'),
        'show_in_rest' => true,
				'supports' => array('title', 'thumbnail', 'excerpt', 'custom-fields', 'page-attributes'),
        'capability_type' => 'reportaje',
        'capabilities' => array(
            'read_post' => 'read_reportaje',
            'publish_posts' => 'publish_reportajes',
            'edit_posts' => 'edit_reportajes',
            'edit_others_posts' => 'edit_others_reportajes',
            'delete_posts' => 'delete_reportajes',
            'delete_others_posts' => 'delete_others_reportajes',
            'read_private_posts' => 'read_private_reportajes',
            'edit_post' => 'edit_reportaje',
            'delete_post' => 'delete_reportaje',
        ),
        'map_meta_cap' => true,
        'taxonomies' => array( 'category' )
    );

    register_post_type('reportaje', $args_reportaje);
}
add_action('init', 'reportaje_type');

function add_reportaje_caps() {
  $role = get_role( 'administrator' );
  $role->add_cap( 'edit_reportaje' ); 
  $role->add_cap( 'edit_reportajes' ); 
  $role->add_cap( 'edit_others_reportajes' ); 
  $role->add_cap( 'publish_reportajes' ); 
  $role->add_cap( 'read_reportaje' ); 
  $role->add_cap( 'read_private_reportajes' ); 
  $role->add_cap( 'delete_reportaje' ); 
  $role->add_cap( 'edit_published_reportajes' );   //added
  $role->add_cap( 'delete_published_reportajes' ); //added
}
add_action( 'admin_init', 'add_reportaje_caps');

// Crear tipo de contenido colaborador

function colaborador_type(){

    $labels = array(
        'name' =>  _x( 'Colaborador', 'post type general name' ),
        'singular_name' => _x( 'Colaborador', 'post type singular name' ),
        'menu_name' => 'Colaborador',
        'add_new' => _x( 'Agregar', 'Colaborador' ),
        'add_new_item' => __( 'Agregar nuevo Colaborador' ),
        'edit_item' => __( 'Editar Colaborador' ),
        'new_item' => __( 'Nuevo Colaborador' ),
        'all_items' => __( 'Todos los Colaboradores' ),
        'view_item' => __( 'Ver Colaboradores' ),
        'search_items' => __( 'Buscar Colaboradores' ),
        'not_found' => __( 'No se encontraron Colaboradores' ),
        'not_found_in_trash' => __( 'No se encontraron Colaboradores en la papelera' ), 
        'parent_item_colon' => '',
    );

    $args_colaborador = array(
        'labels' => $labels,
        'description' => 'Colaboradores listados en el Home',
        'public' => false,
				'show_ui' => true,
        'has_archive' => true,
        'show_in_menu' => true,
        'menu_position' => 50,
        'menu_icon' => 'dashicons-id-alt',
        'can_export' => true,
        'publicly_queryable' => false,
        'rewrite' => array('slug' => 'colaboradores'),
        'show_in_rest' => true,
				'supports' => array('title', 'thumbnail', 'excerpt', 'custom-fields'),
        'capability_type' => 'reportaje',
        'capabilities' => array(
            'read_post' => 'read_colaborador',
            'publish_posts' => 'publish_colaboradores',
            'edit_posts' => 'edit_colaboradores',
            'edit_others_posts' => 'edit_others_colaboradores',
            'delete_posts' => 'delete_colaboradores',
            'delete_others_posts' => 'delete_others_colaboradores',
            'read_private_posts' => 'read_private_colaboradores',
            'edit_post' => 'edit_colaborador',
            'delete_post' => 'delete_colaborador',
        ),
        'map_meta_cap' => true,
        'taxonomies' => array( 'category' )
    );

    register_post_type('colaborador', $args_colaborador);
}
add_action('init', 'colaborador_type');

function add_colaborador_caps() {
  $role = get_role( 'administrator' );
  $role->add_cap( 'edit_colaborador' ); 
  $role->add_cap( 'edit_colaboradores' ); 
  $role->add_cap( 'edit_others_colaboradores' ); 
  $role->add_cap( 'publish_colaboradores' ); 
  $role->add_cap( 'read_colaborador' ); 
  $role->add_cap( 'read_private_colaboradores' ); 
  $role->add_cap( 'delete_colaborador' ); 
  $role->add_cap( 'edit_published_colaboradores' );   //added
  $role->add_cap( 'delete_published_colaboradores' ); //added
}
add_action( 'admin_init', 'add_colaborador_caps');

// API

function gema_organizationsFilter( WP_REST_Request $request ){

  $page = 1;
  $meta_query = array(
    'relation' => 'AND'
  );
  if($request->get_param('departamento')){
    $depa = array(
      'key'	 	=> 'departamento',
			'value'	=> $request->get_param('departamento'),
      'compare'	=> '='
    );
    $meta_query[] = $depa;
  }
  if($request->get_param('servicio')){
    $serv = array(
      'key' => $request->get_param('servicio'),
			'value' => 'si',
      'compare'	=> '='
    );
    $meta_query[] = $serv;
  }
  if($request->get_param('municipio')){
    $mun = array(
      'key' => 'ciudad_municipio',
			'value' => $request->get_param('municipio'),
      'compare'	=> 'LIKE'
    );
    $meta_query[] = $mun;
  }
  if($request->get_param('tipo')){
    $tipo = array(
      'key' => 'tipo_organizacion',
			'value' => $request->get_param('tipo'),
      'compare'	=> '='
    );
    $meta_query[] = $tipo;
  }
  if($request->get_param('irregular')){
    $irr = array(
      'key' => 'poblacion_venezolana_irregular',
			'value' => $request->get_param('irregular'),
      'compare'	=> '='
    );
    $meta_query[] = $irr;
  }
  if($request->get_param('page')){
    $page = $request->get_param('page');
  }

  $organizations_args = array(
    'post_type' => 'migrantOrganization',
    'posts_per_page' => 20,
    'post_status' => 'publish',
    'orderby' => 'title',
    'order' => 'ASC',
    'paged' => $page,
    'meta_query' => $meta_query
  );

  $organizations = new WP_Query($organizations_args);

  $max_pages = $organizations->max_num_pages;

  $elements_data = array();
  if($organizations->have_posts() ){
    $i = 0;
    while($organizations->have_posts()) {
        $organizations->the_post();
        $elements_data[$i]['title'] = get_the_title();
        $elements_data[$i]['departamento'] = get_field('departamento');
        $elements_data[$i]['ciudad_municipio'] = get_field('ciudad_municipio');
        $elements_data[$i]['tipo_organizacion'] = get_field('tipo_organizacion');
        $elements_data[$i]['poblacion_venezolana_irregular'] = get_field('poblacion_venezolana_irregular');
        $elements_data[$i]['victimas_violencia_sexual'] = get_field('victimas_violencia_sexual');
        $elements_data[$i]['interrupcion_embarazo'] = get_field('interrupcion_embarazo');
        $elements_data[$i]['asesoria_ive'] = get_field('asesoria_ive');
        $elements_data[$i]['ginecologia'] = get_field('ginecologia');
        $elements_data[$i]['canceres_sexualidad'] = get_field('canceres_sexualidad');
        $elements_data[$i]['psicologia'] = get_field('psicologia');
        $elements_data[$i]['sexologia'] = get_field('sexologia');
        $elements_data[$i]['tamizaje_otras_infecciones'] = get_field('tamizaje_otras_infecciones');
        $elements_data[$i]['tamizaje_vih'] = get_field('tamizaje_vih');
        $elements_data[$i]['anticoncepcion'] = get_field('anticoncepcion');
        $elements_data[$i]['salud_menstrual'] = get_field('salud_menstrual');
        $elements_data[$i]['control_preconcepcional'] = get_field('control_preconcepcional');
        $elements_data[$i]['control_prenatal'] = get_field('control_prenatal');
        $elements_data[$i]['atencion_parto'] = get_field('atencion_parto');
        $elements_data[$i]['control_posparto'] = get_field('control_posparto');
        $elements_data[$i]['educacion_sexual'] = get_field('educacion_sexual');
        $elements_data[$i]['tratamiento_hormonal'] = get_field('tratamiento_hormonal');
        $elements_data[$i]['tratamientos_urologicos'] = get_field('tratamientos_urologicos');
        $elements_data[$i]['email'] = get_field('email');
        $elements_data[$i]['telefono'] = get_field('telefono');
        $elements_data[$i]['direccion'] = get_field('direccion');
        $elements_data[$i]['facebook'] = get_field('facebook');
        $elements_data[$i]['twitter'] = get_field('twitter');
        $elements_data[$i]['instagram'] = get_field('instagram');
        $i++;
    }
  }

  $response = new WP_REST_Response($elements_data, 200);
  $response->header( 'X-WP-TotalPages', $max_pages );
  return $response;
  wp_reset_postdata();
}

function gema_organizationsAPI(){
  register_rest_route(
    'migrants/v1',
    '/organizations',
    array(
      'methods' => 'GET',
      'callback' => 'gema_organizationsFilter'
    )
  );
}

add_action('rest_api_init', 'gema_organizationsAPI');

add_filter('acf/settings/remove_wp_meta_box', '__return_false');

// Metabox test

/**
 * Generated by the WordPress Meta Box Generator
 * https://jeremyhixon.com/tool/wordpress-meta-box-generator/
 * 
 * Retrieving the values:
 * Imagen = get_post_meta( get_the_ID(), 'advanced_options_imagen', true )
 */
class Advanced_Options {
	private $config = '{"title":"Advanced Options","prefix":"advanced_options_","domain":"advanced-options","class_name":"Advanced_Options","post-type":["page"],"context":"normal","priority":"default","fields":[{"type":"media","label":"Imagen","return":"url","id":"advanced_options_imagen"}]}';

	public function __construct() {
		$this->config = json_decode( $this->config, true );
		add_action( 'add_meta_boxes', [ $this, 'add_meta_boxes' ] );
		add_action( 'admin_enqueue_scripts', [ $this, 'admin_enqueue_scripts' ] );
		add_action( 'admin_head', [ $this, 'admin_head' ] );
		add_action( 'save_post', [ $this, 'save_post' ] );
	}

	public function add_meta_boxes() {
		foreach ( $this->config['post-type'] as $screen ) {
			add_meta_box(
				sanitize_title( $this->config['title'] ),
				$this->config['title'],
				[ $this, 'add_meta_box_callback' ],
				$screen,
				$this->config['context'],
				$this->config['priority']
			);
		}
	}

	public function admin_enqueue_scripts() {
		global $typenow;
		if ( in_array( $typenow, $this->config['post-type'] ) ) {
			wp_enqueue_media();
		}
	}

	public function admin_head() {
		global $typenow;
		if ( in_array( $typenow, $this->config['post-type'] ) ) {
			?><script>
				jQuery.noConflict();
				(function($) {
					$(function() {
						$('body').on('click', '.rwp-media-toggle', function(e) {
							e.preventDefault();
							let button = $(this);
							let rwpMediaUploader = null;
							rwpMediaUploader = wp.media({
								title: button.data('modal-title'),
								button: {
									text: button.data('modal-button')
								},
								multiple: true
							}).on('select', function() {
								let attachment = rwpMediaUploader.state().get('selection').first().toJSON();
								button.prev().val(attachment[button.data('return')]);
							}).open();
						});
					});
				})(jQuery);
			</script><?php
		}
	}

	public function save_post( $post_id ) {
		foreach ( $this->config['fields'] as $field ) {
			switch ( $field['type'] ) {
				default:
					if ( isset( $_POST[ $field['id'] ] ) ) {
						$sanitized = sanitize_text_field( $_POST[ $field['id'] ] );
						update_post_meta( $post_id, $field['id'], $sanitized );
					}
			}
		}
	}

	public function add_meta_box_callback() {
		$this->fields_table();
	}

	private function fields_table() {
		?><table class="form-table" role="presentation">
			<tbody><?php
				foreach ( $this->config['fields'] as $field ) {
					?><tr>
						<th scope="row"><?php $this->label( $field ); ?></th>
						<td><?php $this->field( $field ); ?></td>
					</tr><?php
				}
			?></tbody>
		</table><?php
	}

	private function label( $field ) {
		switch ( $field['type'] ) {
			case 'media':
				printf(
					'<label class="" for="%s_button">%s</label>',
					$field['id'], $field['label']
				);
				break;
			default:
				printf(
					'<label class="" for="%s">%s</label>',
					$field['id'], $field['label']
				);
		}
	}

	private function field( $field ) {
		switch ( $field['type'] ) {
			case 'media':
				$this->input( $field );
				$this->media_button( $field );
				break;
			default:
				$this->input( $field );
		}
	}

	private function input( $field ) {
		if ( $field['type'] === 'media' ) {
			$field['type'] = 'text';
		}
		printf(
			'<input class="regular-text %s" id="%s" name="%s" %s type="%s" value="%s">',
			isset( $field['class'] ) ? $field['class'] : '',
			$field['id'], $field['id'],
			isset( $field['pattern'] ) ? "pattern='{$field['pattern']}'" : '',
			$field['type'],
			$this->value( $field )
		);
	}

	private function media_button( $field ) {
		printf(
			' <button class="button rwp-media-toggle" data-modal-button="%s" data-modal-title="%s" data-return="%s" id="%s_button" name="%s_button" type="button">%s</button>',
			isset( $field['modal-button'] ) ? $field['modal-button'] : __( 'Select this file', 'advanced-options' ),
			isset( $field['modal-title'] ) ? $field['modal-title'] : __( 'Choose a file', 'advanced-options' ),
			$field['return'],
			$field['id'], $field['id'],
			isset( $field['button-text'] ) ? $field['button-text'] : __( 'Upload', 'advanced-options' )
		);
	}

	private function value( $field ) {
		global $post;
		if ( metadata_exists( 'post', $post->ID, $field['id'] ) ) {
			$value = get_post_meta( $post->ID, $field['id'], true );
		} else if ( isset( $field['default'] ) ) {
			$value = $field['default'];
		} else {
			return '';
		}
		return str_replace( '\u0027', "'", $value );
	}

}
new Advanced_Options;