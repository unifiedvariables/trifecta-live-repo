<?php

///////////////////Theme Option///////////////Start

  if (STYLESHEETPATH == TEMPLATEPATH)

  {

  define('OF_FILEPATH', TEMPLATEPATH);

  define('OF_DIRECTORY', get_bloginfo('template_directory'));

  }

  else

  {

  define('OF_FILEPATH', STYLESHEETPATH);

  define('OF_DIRECTORY', get_bloginfo('stylesheet_directory'));

  }

  require_once (OF_FILEPATH . '/admin/admin-interface.php');

  require_once (OF_FILEPATH . '/admin/theme-options.php');
  //////////////////Theme Option///////////////End

function driversheek_features()
{
  add_theme_support( 'post-thumbnails' );
  add_image_size( 'product-thumb', 400, 400, false);
  add_image_size( 'product-thumb-small', 80, 80, true);
  add_theme_support( 'job-manager-templates' );
}
add_action( 'after_setup_theme', 'driversheek_features' );



function register_my_menus() {
  register_nav_menus(
    array(
      'primary-menu' => __( 'Primary Menu' ),
      'social-links-menu' => __( 'Social Links Menu' ),
      'an-extra-menu' => __( 'An Extra Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );

  function create_post_banner() {
    register_post_type( 'banner',
    array(
    'labels'       => array(
   'name'       => __( 'Home Slider' ),
    ),
    'public'       => true,
    'hierarchical' => true,
    'has_archive'  => true,
    'supports'     => array(
   'title',
   'editor',
   'excerpt',
   'thumbnail',

    ),
    'taxonomies'   => array(
   'post_tag',
   'category',
    )
    )
    );
    register_taxonomy_for_object_type( 'category', 'banner' );
    register_taxonomy_for_object_type( 'post_tag', 'banner' );
   }
   add_action( 'init', 'create_post_banner'); 

   function create_post_invest() {
    register_post_type( 'invest',
    array(
    'labels'       => array(
   'name'       => __( 'Why Invest' ),
    ),
    'public'       => true,
    'hierarchical' => true,
    'has_archive'  => true,
    'supports'     => array(
   'title',
   'editor',
   'excerpt',
   'thumbnail',

    ),
    'taxonomies'   => array(
   'post_tag',
   'category',
    )
    )
    );
    register_taxonomy_for_object_type( 'category', 'invest' );
    register_taxonomy_for_object_type( 'post_tag', 'invest' );
   }
   add_action( 'init', 'create_post_invest');

   function create_post_faq() {
    register_post_type( 'faq',
    array(
    'labels'       => array(
   'name'       => __( 'Faq' ),
    ),
    'public'       => true,
    'hierarchical' => true,
    'has_archive'  => true,
    'supports'     => array(
   'title',
   'editor',
   'excerpt',
   'thumbnail',

    ),
    'taxonomies'   => array(
   'post_tag',
   'category',
    )
    )
    );
    register_taxonomy_for_object_type( 'category', 'faq' );
    register_taxonomy_for_object_type( 'post_tag', 'faq' );
   }
   add_action( 'init', 'create_post_faq');

   function create_post_team() {
    register_post_type( 'team',
    array(
    'labels'       => array(
   'name'       => __( 'Team' ),
    ),
    'public'       => true,
    'hierarchical' => true,
    'has_archive'  => true,
    'supports'     => array(
   'title',
   'editor',
   'excerpt',
   'thumbnail',

    ),
    'taxonomies'   => array(
   'post_tag',
   'category',
    )
    )
    );
    register_taxonomy_for_object_type( 'category', 'team' );
    register_taxonomy_for_object_type( 'post_tag', 'team' );
   }
   add_action( 'init', 'create_post_team'); 

   function create_post_advisors() {
    register_post_type( 'advisors',
    array(
    'labels'       => array(
   'name'       => __( 'Advisors' ),
    ),
    'public'       => true,
    'hierarchical' => true,
    'has_archive'  => true,
    'supports'     => array(
   'title',
   'editor',
   'excerpt',
   'thumbnail',

    ),
    'taxonomies'   => array(
   'post_tag',
   'category',
    )
    )
    );
    register_taxonomy_for_object_type( 'category', 'advisors' );
    register_taxonomy_for_object_type( 'post_tag', 'advisors' );
   }
   add_action( 'init', 'create_post_advisors');      

function add_theme_scripts() {
  
  wp_enqueue_script( 'jquery-min', get_theme_file_uri('/assets/libs/jquery/3.4.1/jquery.min.js'), array ( 'jquery' ));
  
  wp_enqueue_script( 'popper', 'https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js', array ( 'jquery' ));
  
  wp_enqueue_script( 'popper', get_theme_file_uri('/assets/js/popper.min.js') , array ( 'jquery' ));
  
  wp_enqueue_script( 'bundle', get_theme_file_uri('/assets/js/bootstrap.bundle.min.js') , array ( 'jquery' ));
  
  wp_enqueue_script( 'slick-min', get_theme_file_uri('/assets/libs/slick-carousel/1.8.1/slick.min.js') , array ( 'jquery' ));
  
  // wp_enqueue_script( 'script', get_theme_file_uri('/assets/js/script.js'), array ( 'jquery' ) , microtime(), false);

  
  
  wp_enqueue_style( 'bootstrap', get_theme_file_uri('/assets/css/bootstrap.min.css') , array());
  
  wp_enqueue_style( 'slick-theme', get_theme_file_uri('/assets/libs/slick-carousel/1.8.1/slick-theme.min.css') , array());
  
  wp_enqueue_style( 'slick', get_theme_file_uri('/assets/libs/slick-carousel/1.8.1/slick.min.css') , array());
  
  wp_enqueue_style( 'animate', get_theme_file_uri('/assets/css/animate.css') , array());
  
  wp_enqueue_style( 'menu', get_theme_file_uri('/assets/css/menu.css') , array(), microtime());
  wp_enqueue_style( 'assets-fixing', get_theme_file_uri('/assets/css/fixing.css') , array(), microtime());
  wp_enqueue_style( 'assets-style', get_theme_file_uri('/assets/css/style.css') , array(), microtime());

  wp_enqueue_style( 'responsive', get_theme_file_uri('/assets/css/responsive.css') , array(), microtime());
  
  wp_enqueue_style( 'style', get_stylesheet_uri() , array(), microtime());
  
  
    // if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
    //   wp_enqueue_script( 'comment-reply' );
    // }
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );
?>