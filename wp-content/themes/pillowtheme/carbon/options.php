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
        ])

        ->add_tab('About', [
            Field::make('text', 'about_title', 'Title'),
            Field::make( 'complex', 'about_our_mission', 'Our Mission')
            ->add_fields( array(
                Field::make( 'text', 'block_name' ),
                Field::make( 'rich_text', 'block_content' ),
            )),
            Field::make('text', 'about_youtube', 'Youtube Video Link'),
        
            
        ]);

        
}
