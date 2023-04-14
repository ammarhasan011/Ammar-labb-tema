<?php

add_theme_support('post-thumbnails');
add_theme_support('menus');
add_theme_support('widgets');


// här skapar jag en funktion som hämtar mina css filen


function sheets()
{
    wp_register_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css');
    wp_register_style('font', get_template_directory_uri() .  '/assets/css/font-awesome.css');
    wp_register_style('style', get_template_directory_uri() .  '/assets/css/style.css');
    wp_enqueue_style('bootstrap');
    wp_enqueue_style('font');
    wp_enqueue_style('style');
};
// här skapar jag en funktion som hämtar mina js filen
function script()
{
    wp_register_script('jquery', get_template_directory_uri() . '/assets/js/jquery.js');
    wp_register_script('script', get_template_directory_uri() . '/assets/js/script.js');
    wp_enqueue_script('jquery', get_template_part_uri() . '/assets/js/jquery.js', array(), '1.0', true);
    wp_enqueue_script('script', get_template_part_uri() . '/assets/js/script.js', array(), '1.0', true);
};
add_action('wp_enqueue_scripts', 'sheets', 'script');

// skapar en funktion för att kunna ha tillgång till menu
function menu()
{
    $menues = array(
        "headermenu" => "Headermenu",
        "sidemenu" => "Sidemenu"
    );

    register_nav_menus($menues);
}
add_action('init', 'menu');
