<?php
add_action('after_setup_theme', 'ju_setup_theme');
function ju_setup_theme() {
    register_nav_menu('primary', __('Primary Menu', 'udemy'));
}