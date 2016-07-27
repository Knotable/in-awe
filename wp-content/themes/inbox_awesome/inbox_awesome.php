<?php

add_action( 'init', 'create_speakers' );
function create_speakers() {
  register_post_type('inbox_speakers',
    array(
      'labels' => array(
        'name' => __( 'Speakers' ),
        'singular_name' => __( 'Speaker' ),
        'add_new_item' => 'Add New'
      ),
      'public' => true,
      'supports' => array(
      	'thumbnail',
      	'title',
      	'editor',
        'custom-fields'
      	)
    )
  );
}

add_action( 'init', 'create_partners' );
function create_partners() {
  register_post_type('partners',
    array(
      'labels' => array(
        'name' => __( 'Partners' ),
        'singular_name' => __( 'Partner' ),
        'add_new_item' => 'Add New'
      ),
      'public' => true,
      'supports' => array(
        'thumbnail',
        'title',
        'editor',
        'custom-fields'
        )
    )
  );
}

add_action( 'init', 'create_testimonials' );
function create_testimonials() {
  register_post_type('testimonials',
    array(
      'labels' => array(
        'name' => __( 'Testimonials' ),
        'singular_name' => __( 'Testimonial' ),
        'add_new_item' => 'Add New'
      ),
      'public' => true,
      'supports' => array(
        'thumbnail',
        'title',
        'editor',
        'custom-fields'
        )
    )
  );
}



/* add_action( 'admin_init', 'register_my_menu' );
function register_my_menu() {
  register_nav_menu( 'primary', __( 'Home Settings', 'home-settings' ) );
}*/

  add_action( 'admin_menu', 'register_awesome_home_settings' );

  function register_awesome_home_settings(){
    add_menu_page('Page Settings', 'Page settings', 'manage_options', 'page-settings','home_settings');

    add_submenu_page( 'page-settings', 'Home', 'Home', 'manage_options', 'home_settings', 'home_settings');
  }

  function home_settings(){
    if(!get_option('awesome_settings')){
      $pre_settings = file_get_contents(get_template_directory().'/pre_settings.txt');
      update_option( 'awesome_settings', $pre_settings );
    }

    if(isset($_POST['AwesomeSettings']) ){
      update_option( 'awesome_settings', json_encode($_POST['AwesomeSettings']) );
    }

    $options = (array)json_decode(get_option('awesome_settings') );
    
    include('home_settings.php');
  }

  function scripts_awesome($hook) {
      /*if ( 'edit.php' != $hook ) {
          return;
      }*/
    wp_enqueue_script('jquery');
    wp_enqueue_script('jquery-ui-core');
    wp_enqueue_script('jquery-ui-tabs');
    wp_enqueue_script('common');
    wp_enqueue_script('jquery-color');
    wp_admin_css('thickbox');
    wp_print_scripts('post');
    wp_print_scripts('media-upload');
    wp_print_scripts('tiny_mce');
    wp_print_scripts('editor');
    wp_print_scripts('editor-functions');
    add_thickbox();
    wp_admin_css();
    wp_enqueue_script('utils');
    do_action("admin_print_styles-post-php");
    do_action('admin_print_styles');
    remove_all_filters('mce_external_plugins');
  }

  add_action( 'admin_enqueue_scripts', 'scripts_awesome' );

  function myextensionTinyMCE($init) {
    // Command separated string of extended elements
    $ext = 'span[id|name|class|style],br[id|name|class|style],hr[id|name|class|style],p[id|name|class|style],pre[id|name|class|style]';

    // Add to extended_valid_elements if it alreay exists
    if ( isset( $init['extended_valid_elements'] ) ) {
        $init['extended_valid_elements'] .= ',' . $ext;
    } else {
        $init['extended_valid_elements'] = $ext;
    }

    // Super important: return $init!
    return $init;
  }



  add_filter('tiny_mce_before_init', 'myextensionTinyMCE' );

?>