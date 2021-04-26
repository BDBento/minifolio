<?php


function load_scripts(){

    /*chamando arquivos css*/
    wp_enqueue_style('bootstrap-min',get_template_directory_uri().'/css/bootstrap.min.css' );
    wp_enqueue_style('fancybox',get_template_directory_uri().'/css/jquery.fancybox.css');
    wp_enqueue_style('main', get_template_directory_uri().'/css/main.css');
    wp_enqueue_style('responsive',get_template_directory_uri().'/css/responsive.css');
    wp_enqueue_style('animate',get_template_directory_uri().'/css/animate.min.css');
    wp_enqueue_style('fontwesome','https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css');

   
   /*chamando biblioteca jquery  e fixando a ver.*/
    wp_register_script('jquery-two','https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js',array(),'1.11.3',true );

    /*outras chamadas  js*/
    wp_enqueue_script('bootstrap-min',get_template_directory_uri().'/js/bootstrap.min.js',array('jquery-two'),null,true);
    wp_enqueue_script('fancyboxp-min',get_template_directory_uri().'/js/jquery.fancybox.pack.js',array('jquery-two'),null,true);
    wp_enqueue_script('waypoints-min',get_template_directory_uri().'/js/jquery.waypoints.min.js',array('jquery-two'),null,true);
    wp_enqueue_script('retinas-min',get_template_directory_uri().'/js/retina.min.js',array('jquery-two'),null,true);
    wp_enqueue_script('modernizrs-min',get_template_directory_uri().'/js/modernizr.js',array('jquery-two'),null,true);
    wp_enqueue_script('main-min',get_template_directory_uri().'/js/main.js',array('jquery-two'),null,true);


    

}

/*adiciona chamada para a funçao de incluzao .js e .css*/
add_action('wp_enqueue_scripts','load_scripts');


/**adiciona chamada para a funçao minifolio_sidebars */
add_action('widgets_init','minifolio_sidebars');



function minifolio_sidebars(){
    register_sidebar(
        array(
            'name' => 'Banner',
            'id' => 'banner',
            'description' => 'Tipe any text here:', 
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>',
            
        )
    );
    register_sidebar(
        array(
            'name' => 'About Me',
            'id' => 'about-me',
            'description' => 'Tipe any text here:', 
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>',
            
        )
    );
    register_sidebar(
        array(
            'name' => 'About Me - Second Area',
            'id' => 'abolt-me2',
            'description' => 'Please, drag your widgets here', 
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>',
            
        )
    );
    register_sidebar(
        array(
            'name' => 'Hire Me',
            'id' => 'hire-me',
            'description' => 'Tipe any text here:', 
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>',
            
        )
    );
    register_sidebar(
        array(
            'name' => 'Contact',
            'id' => 'contact',
            'description' => 'Tipe any text here:', 
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>',
            
        )
    );
}

/*criando menu dinamico wp */

register_nav_menus(
    array(
        'primery'=>'Primery Menu',
        'social' => 'Social Menu',
    )

);
