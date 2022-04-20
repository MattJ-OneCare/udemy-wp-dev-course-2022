<?php
add_action('widgets_init', 'ju_widgets');
function ju_widgets() {
    register_sidebar(array(
        'name'          => __( 'My First Theme Sidebar', 'udemy' ),
        'id'            => 'ju_sidebar',
        'description'   => __('Sidebar for the theme Udemy', 'udemy'),
        'before_widget' => '<div id="%1$s" class="widget clearfix %2$s">',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ));
}