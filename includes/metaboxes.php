<?php
/*
    * 
    * Añade los Metaboxes para los Examenes.
    */
if ( ! defined( 'ABSPATH' ) ) exit; 

function quizbook_examen_agregar_metaboxes(){
    // Agrega el Metabox en el Post Type de Quizes
    
    add_meta_box( 'quizbook_examen_meta_box', 'Preguntas Examen', 'quizbook_examen_metaboxes', 'examenes', 'normal', 'high', null );
}
add_action( 'add_meta_boxes', 'quizbook_examen_agregar_metaboxes' );
    

function quizbook_examen_metaboxes(){
    echo "<h1>hola</h1>";
}