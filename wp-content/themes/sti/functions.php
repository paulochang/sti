<?php
add_theme_support( "post-thumbnails" );

function sti_init () {

  /* 
  * Registrar tamaño de imagen
  */
  add_image_size( 'single-thumb', 313, 220, true );
  add_image_size( 'home-img', 980, 600, true );
  add_image_size( 'archive-img', 646, 520, true );
  /*
   * Makes normal post queryable
   */
    register_post_type ( 'post', array (
    'labels' => $labels,      
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => false,
    'show_in_menu' => false,
    'query_var' => true,
    'capability_type' => 'post',
    'has_archive' => true,
    'hierarchical' => false,
    'menu_position' => null,
    'rewrite' => array ( 'slug' => 'noticia' )
  ) ) ;


  /*
   * Create "Vivienda" Post Type
   */
  $labels = array (
    'name' => 'Viviendas',
    'singular_name' => 'Vivienda',
    'add_new' => 'Agregar Nueva',
    'add_new_item' => 'Agregar Nueva Vivienda',
    'edit_item' => 'Editar Vivienda',
    'new_item' => 'Nueva Vivienda',
    'all_items' => 'Todas las viviendas',
    'view_item' => 'Ver Vivienda',
    'search_items' => 'Buscar Viviendas',
    'not_found' => 'No se encontraron viviendas',
    'not_found_in_trash' => 'No se encontraron viviendas en la papelera',
    'parent_item_colon' => '',
    'menu_name' => 'Viviendas'
      ) ;

  $args = array (
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'query_var' => true,
    'capability_type' => 'post',
    'has_archive' => true,
    'hierarchical' => false,
    'menu_position' => null,
    'supports' => array ( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments', 'custom-fields' )
      ) ;  
  register_post_type ( 'vivienda', $args ) ;

  /*
   * Create "Desarrollo" Post Type
   */
  $labels = array (
    'name' => 'Desarrollos',
    'singular_name' => 'Desarrollo',
    'add_new' => 'Agregar Nuevo',
    'add_new_item' => 'Agregar Nuevo Desarrollo',
    'edit_item' => 'Editar Desarrollo',
    'new_item' => 'Nuevo Desarrollo',
    'all_items' => 'Todos los desarrollos',
    'view_item' => 'Ver Desarrollo',
    'search_items' => 'Buscar Desarrollos',
    'not_found' => 'No se encontraron desarrollos',
    'not_found_in_trash' => 'No se encontraron desarrollos en la papelera',
    'parent_item_colon' => '',
    'menu_name' => 'Desarrollos'
      ) ;

  $args = array (
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'query_var' => true,
    'capability_type' => 'post',
    'has_archive' => true,
    'hierarchical' => false,
    'menu_position' => null,
    'supports' => array ( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments', 'custom-fields' )
      ) ;  
  register_post_type ( 'desarrollo', $args ) ;

  /*
   * Create "Geotecnia" Post Type
   */
  $labels = array (
    'name' => 'Geotecnias',
    'singular_name' => 'Geotecnia',
    'add_new' => 'Agregar Nueva',
    'add_new_item' => 'Agregar Nueva Geotecnia',
    'edit_item' => 'Editar Geotecnia',
    'new_item' => 'Nueva Geotecnia',
    'all_items' => 'Todas las Geotecnias',
    'view_item' => 'Ver Geotecnia',
    'search_items' => 'Buscar Geotecnias',
    'not_found' => 'No se encontraron geotecnias',
    'not_found_in_trash' => 'No se encontraron geotecnias en la papelera',
    'parent_item_colon' => '',
    'menu_name' => 'Geotecnias'
      ) ;

  $args = array (
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'query_var' => true,
    'capability_type' => 'post',
    'has_archive' => true,
    'hierarchical' => false,
    'menu_position' => null,
    'supports' => array ( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments', 'custom-fields' )
      ) ;  
  register_post_type ( 'geotecnia', $args ) ;

}

add_action ( 'init', 'sti_init' ) ;

/**
*
* @return string current theme url
*/
function theme_url ( $path = '' ) {
  $url = get_template_directory_uri () ;

  if ( ! empty ( $path ) && is_string ( $path ) && strpos ( $path, '..' ) === false )
    $url .= '/' . ltrim ( $path, '/' ) ;

  return $url ;

}

/**
 * Serves as an indicator for knowing if the current request was 
 * triggered by an ajax call from the client.
 * 
 * @return boolean <code>true</code> if the current request is 
 * ajax-driven and <code>false</code> otherwise;
 */
function ajax () {
  return ( ! empty ( $_SERVER[ 'HTTP_X_REQUESTED_WITH' ] ) && strtolower ( $_SERVER[ 'HTTP_X_REQUESTED_WITH' ] ) == 'xmlhttprequest') ||
      ! empty ( $_REQUEST[ 'action' ] ) || ! empty ( $_REQUEST[ 'ajax' ] ) ;

}

/**
 * Includes the Wordpress Header Template if the current request is not 
 * ajax oriented.
 * 
 */
function require_header ( $name = null ) {
  if ( ! ajax () ) {
    get_header ( $name ) ;
  }

}

/**
 * Includes the Wordpress Footer Template if the current request is not 
 * ajax oriented.
 * 
 */
function require_footer ( $name = null ) {
  if ( ! ajax () ) {
    get_footer ( $name ) ;
  }

}


/**
 * Print the <title> tag based on what is being viewed.
 */
function site_title () {
  global $page , $paged ;

  wp_title ( '|' , true , 'right' ) ;

  // Add the blog name.
  bloginfo ( 'name' ) ;

  // Add the blog description for the home/front page.
  $site_description = get_bloginfo ( 'description' , 'display' ) ;
  if ( $site_description && ( is_home () || is_front_page () ) ) {
    echo " | $site_description" ;
  }

  // Add a page number if necessary:
  if ( $paged >= 2 || $page >= 2 ) {
    echo ' | ' . sprintf ( __ ( 'Page %s' , 'alegalis' ) , max ( $paged , $page ) ) ;
  }
}

/**
 * Echoes a DIV DOM Element with information about the current requested resource such as
 * Body Class or other data.
 * 
 * @param String $class classes to add to the metadata DOM Element.
 */
function body_metadata ( $class = '' ) {
  echo '<div id="body-metadata" class="' . join ( ' ' , get_body_class ( $class ) ) . '" data-title="' ;
  site_title () ;
  echo '"></div>' ;
}


/**
 * @param string $filename
 * @return string 
 */
function make_filename_hash ( $filename ) {
  $info = pathinfo ( $filename ) ;
  $ext = empty ( $info[ 'extension' ] ) ? '' : '.' . $info[ 'extension' ] ;
  $name = basename ( $filename, $ext ) ;
  return md5 ( $name . time () ) . $ext ;

}
// Add filter to sanitize file names after upload: make_filename_hash()
add_filter ( 'sanitize_file_name', 'make_filename_hash', 10 ) ;

/**
 * Enqueues scripts and styles for front-end.
 */
function sti_scripts_styles () {

  wp_enqueue_script ( 'mootools-core', get_template_directory_uri () . '/js/vendor/mootools-core-1.4.5.js', array ( ), '1.4.5', false ) ;
  wp_enqueue_script ( 'mootools-more', get_template_directory_uri () . '/js/vendor/mootools-more-1.4.0.1.js', array ('mootools-core'), '1.4.0.1', false ) ;

  wp_enqueue_script ( 'sti-script', get_template_directory_uri () . '/js/main.js', array ('mootools-more'), false, false ) ;
  
  wp_enqueue_script ( 'milkbox-script', get_template_directory_uri () . '/js/vendor/milkbox-yc.js', array ('sti-script'), false, false ) ;
  wp_enqueue_script ( 'slide-script', get_template_directory_uri () . '/js/slide.js', array ('milkbox-script'), false, false ) ;
  wp_enqueue_style ( 'sti-style', get_stylesheet_uri () ) ;

}

add_action ( 'wp_enqueue_scripts', 'sti_scripts_styles' ) ;

function getPostImages() {
    $args = array( 
    'post_parent' => get_the_ID(),
    'post_type' => 'attachment',
    'post_mime_type' => 'image',
    'posts_per_page'=>-1
    );
    $images  = get_posts($args);
    foreach ($images as $image) {    
        $attachmenturl=wp_get_attachment_url($image->ID);
        $attr = array(
          'class' => "absolute",
          'data-type' => $term->slug
        );
        $imageSrc = wp_get_attachment_image_src( $image->ID, 'large', False);
        $imageSrc = $imageSrc[0];
        echo '<a class="unprocessable-link" data-milkbox="gal1" href="'.$imageSrc.'"> <div class="item single-item float-left">';
        echo wp_get_attachment_image( $image->ID, 'single-thumb', False, $attr );
        echo '</div></a>';
        //echo '<img class="slide absolute transition-margin-left transition-width" data-type="'.$term->slug.'" src="'.$attachmenturl.'"></img>' . "\n";
    }
}

function getSlideImage() {
  $args = array( 
    'post_parent' => 96, //hard-coded home page
    'post_type' => 'attachment',
    'post_mime_type' => 'image',
    'posts_per_page'=>-1
    );
    $images  = get_posts($args);
    foreach ($images as $image) {   
        $counter++; 
        $attachmenturl=wp_get_attachment_url($image->ID);
        $description= $image->post_content;
        $caption= $image->post_excerpt;
        $attr = array(
          'class' => "absolute slide-image"
        );
        echo '<div class="slide-element">';
        echo wp_get_attachment_image( $image->ID, 'home-img', False, $attr );
        echo '<div class="absolute image-overlay gray-overlay white arial"><div class="slide-txt">'.$description.'</div></div>';
        echo '<div class="absolute image-caption uppercase white">'.$caption.'</div>';
        echo '</div>';
    }
}

/********************************************* METABOX **************************************/
/**
 * Adds a metabox in the post edit page
 */
function data_add_metabox () {
  $post_types = array ( 'vivienda', 'desarrollo', 'geotecnia' );
  foreach ( $post_types as $type ) {
    add_meta_box ( 'data_metabox', 
              __ ( 'Datos de Proyecto', 'sti' ), 
              'data_create_metabox', $type );
  }
}

// hook the add_meta_boxes action: data_add_metabox()
add_action ( 'add_meta_boxes', 'data_add_metabox' );

/**
 * Renders the text editor in the data metabox
 * @param stdClass $post 
 */
function data_create_metabox ( $post ) {
  $data_content = get_post_meta ( $post -> ID, '_data_input', true );
    wp_editor ( $data_content, 'datainput', array (
    'media_buttons' => false,
  ) );
}

/**
 * Saves the data info as a metadata value of the post
 * @global stdClass $post
 * @param array $data
 * @param array $postarr
 * @return array 
 */
function data_filter_handler ( $data, $postarr ) {
  global $post;
  if ( isset ( $postarr[ 'datainput' ] ) ) {
    update_post_meta ( $post -> ID, '_data_input', $postarr[ 'datainput' ] );
  }
  return $data;
}

// hook the post edit/create/update action: data_filter_handler()
add_filter ( 'wp_insert_post_data', 'data_filter_handler', '99', 2 );

/**
 *
 * @param type $post_id
 * @return type 
 */
function data_get_the_content ( $post_id = null ) {
  $post_id = ( null === $post_id ) ? get_the_ID () : $post_id;
    $content = get_post_meta ( $post_id, '_data_input', true );
  return wpautop($content);
}

/**
 *
 * @param int $post_id 
 */
function data_the_content ( $post_id ) {
  echo data_get_the_content ( $post_id );
}