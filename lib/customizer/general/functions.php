<?php

/*
 * Creates the section, settings and the controls for the customizer
 */
function shoestrap_general_customizer( $wp_customize ){

  $sections   = array();
  $sections[] = array( 'slug' => 'shoestrap_general', 'title' => __( 'General', 'shoestrap' ), 'priority' => 6 );

  foreach( $sections as $section ){
    $wp_customize->add_section( $section['slug'], array( 'title' => $section['title'], 'priority' => $section['priority'] ) );
  }
}
add_action( 'customize_register', 'shoestrap_hero_customizer' );
