<?php function script_load() {
    wp_enqueue_script('script_load', get_template_directory_uri().'js/main.js', array('jquery'), '1.0.0', true);
}
add_action( 'wp_enqueue_script', 'script_load' );
console.log("Hello World"); ?>