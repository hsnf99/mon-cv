<?php

function create_custom_posts() {
    register_post_type('skills', [
        'labels' => [
            'name' => 'Skills'
        ],
        'public' => true,
        'show_in_rest' => true
     ]);
     register_post_type('langues', [
        'labels' => [
            'name' => 'Mes langues'
        ],
        'public' => true,
        'show_in_rest' => true
     ]);
    }
add_action('init', 'create_custom_posts');