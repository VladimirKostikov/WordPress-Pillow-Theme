<?php
if(!defined('ABSPATH')) {
    exit;
}

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_attach_theme_options' );
function crb_attach_theme_options() {
    Container::make( 'theme_options', 'Site Settings' )
        ->add_tab('Main settings', [
            Field::make('image', 'site_logo', 'Logo'),
        ]);
}
