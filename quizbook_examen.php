<?php
/*
Plugin Name:  Preguntas y respuestas examen premiun
Plugin URI:
Description:  Plugin para añadir examenes
Version:      1.0
Author:       Ezequiel Gallardo
Author URI:
License:      GPL2
License URI:  https://www.gnu.org/licenses/gpl-2.0.html
Text Domain:  quizbook
*/


function quizbook_examen_revisar() {
    if(!function_exists( 'quizbook_post_type' ) ) {
        deactivate_plugins(plugin_basename(__FILE__));
        
        add_action( 'admin_notices', 'quizbook_error_activar' );
    } 
}
add_action('admin_init', 'quizbook_examen_revisar');

function quizbook_error_activar() {
    $class = 'notice notice-error';
    $message = __( 'Un Error ocurrió! Necesitas Instalar el Plugin Quiz.', 'sample-text-domain' );

    printf( '<div class="%1$s"><p>%2$s</p></div>', esc_attr( $class ), esc_html( $message ) ); 
}
   