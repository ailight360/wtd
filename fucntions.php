<?php

    function calling_resources(){
        wp_enqueue_style('style', get_stylesheet_uri(), ' ', '1.0.1');
    }
    add_action('wp_enqueue_scripts', 'calling_resources');







?>