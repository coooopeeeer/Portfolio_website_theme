<?php 
    function script_load() {
        wp_enqueue_script('script-load', get_template_directory_uri().'js/main.js', array('jquery'), date('U'));
    }
    add_action( 'wp_enqueue_scripts', 'script_load' ); 
?>