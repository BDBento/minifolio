<?php


function load_scripts(){
    wp_enqueue_style('bootstrap-min',get_template_directory_uri().'/css/bootstrap.min.css' );
    wp_enqueue_style('fancybox',get_template_directory_uri().'/css/jquery.fancybox.css');
    wp_enqueue_style('main', get_template_directory_uri().'/css/main.css');
    wp_enqueue_style('responsive',get_template_directory_uri().'/css/responsive.css');
    wp_enqueue_style('animate',get_template_directory_uri().'/css/animate.min.css');
    wp_enqueue_style('fontwesome','https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css');

    wp_register_script('jquery-two','https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js',array(),'1.11.3',true );


    /*wp_register_script('jquery-two', 'https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js', arrey(), '1.11.3', true);*/
    wp_enqueue_script('bootstrap-min',get_template_directory_uri().'/js/bootstrap.min.js',array('jquery-two'),null,true);
    wp_enqueue_script('fancyboxp-min',get_template_directory_uri().'/js/jquery.fancybox.pack.js',array('jquery-two'),null,true);
    wp_enqueue_script('waypoints-min',get_template_directory_uri().'/js/jquery.waypoints.min.js',array('jquery-two'),null,true);
    wp_enqueue_script('retinas-min',get_template_directory_uri().'/js/retina.min.js',array('jquery-two'),null,true);
    wp_enqueue_script('modernizrs-min',get_template_directory_uri().'/js/modernizr.js',array('jquery-two'),null,true);
    wp_enqueue_script('main-min',get_template_directory_uri().'/js/main.js',array('jquery-two'),null,true);


    

}

add_action('wp_enqueue_scripts','load_scripts');
