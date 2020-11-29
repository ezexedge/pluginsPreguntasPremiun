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
if ( ! defined( 'ABSPATH' ) ) exit;
//reviso que el plugins este instalado

function quizbook_examen_revisar() {
    if(!function_exists( 'quizbook_post_type' ) ) {
        deactivate_plugins(plugin_basename(__FILE__));
        
        add_action( 'admin_notices', 'quizbook_error_activar' );
    } 
}
add_action('admin_init', 'quizbook_examen_revisar');
//mensaje de error
function quizbook_error_activar() {
    $class = 'notice notice-error';
    $message = __( 'Un Error ocurrió! Necesitas Instalar el Plugin Quiz.', 'sample-text-domain' );

    printf( '<div class="%1$s"><p>%2$s</p></div>', esc_attr( $class ), esc_html( $message ) ); 
}
   

/*
* Registrar Post Types
*/
require_once plugin_dir_path(__FILE__) . 'includes/posttypes.php';
register_activation_hook(__FILE__, 'quizbook_examenes_rewrite_flush'); 

require_once plugin_dir_path( __FILE__ ) . 'includes/roles.php';
register_activation_hook( __FILE__, 'quizbook_examenes_agregar_capabilities' );
register_deactivation_hook( __FILE__, 'quizbook_examenes_remover_capabilities' );


require_once plugin_dir_path(__FILE__) . 'includes/metaboxes.php';
require_once plugin_dir_path(__FILE__) . 'includes/scripts.php';