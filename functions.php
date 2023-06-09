<?php
// adding theme support 
add_theme_support('post-thumbnails');
add_theme_support('menus');
add_theme_support('widgets');


// here I create a function that retrieves my CSS files
function sheets()
{
    wp_register_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css');
    wp_register_style('font', get_template_directory_uri() .  '/assets/css/font-awesome.css');
    wp_register_style('style', get_template_directory_uri() .  '/assets/css/style.css');
    wp_enqueue_style('bootstrap');
    wp_enqueue_style('font');
    wp_enqueue_style('style');
};
// here I create a function that retrieves my JS file
function script()
{
    wp_register_script('jquery', get_template_directory_uri() . '/assets/js/jquery.js');
    wp_register_script('script', get_template_directory_uri() . '/assets/js/script.js');
    wp_enqueue_script("jquery", get_template_directory_uri() . '/assets/js/jquery.js', 'array()', '1,0', true);
    wp_enqueue_script("script", get_template_directory_uri() . '/assets/js/script.js', 'array()', '1,0', true);
    // wp_enqueue_script('jquery', get_template_part_uri() . '/assets/js/jquery.js', '', '1,0', true);
    // wp_enqueue_script('script', get_template_part_uri() . '/assets/js/script.js', '', '1.0', true);
};
add_action('wp_enqueue_scripts', 'sheets');
add_action('wp_enqueue_scripts', 'script');

// creating a function to be able to add menus in WP admin panel
function menu()
{
    $menues = array(
        "headermenu" => "Headermenu",
        "sidemenu" => "Sidemenu"
    );

    register_nav_menus($menues);
}
add_action('init', 'menu');



// register widgets and create 4 for the sidebar and 4 widgets for the footer.
function customwidget()
{
    $widgets = array(

        // sidebar widgets
        array(
            "name" => "Aside search",
            "id" => "search",
            'before_widget' => '',
            'after_widget' => ''
        ),
        array(
            "name" => "Aside Sidor",
            "id" => "sidor",
            'before_widget' => '',
            'after_widget' => ''
        ),
        array(
            "name" => "Aside Arkiv",
            "id" => "arkiv",
            'before_widget' => '',
            'after_widget' => ''
        ),
        array(
            "name" => "Aside Kategorier",
            "id" => "kategorier",
            'before_widget' => '',
            'after_widget' => ''
        ),



        // footer widgets
        array(
            "name" => "footer Kort om oss",
            "id" => "footer_kort_om_oss",
            'before_widget' => '',
            'after_widget' => ''
        ),
        array(
            "name" => " kontakt",
            "id" => "footer_cont",
            'before_widget' => '',
            'after_widget' => ''
        ),
        array(
            "name" => "footer social media",
            "id" => "footer_social-media",
            'before_widget' => '',
            'after_widget' => ''
        ),
        array(
            "name" => "footer copyright",
            "id" => "footer_copyright",
            'before_widget' => '',
            'after_widget' => ''
        ),


    );
    foreach ($widgets as $widget) {
        register_sidebar($widget);
    };
}
add_action('init', 'customwidget');
