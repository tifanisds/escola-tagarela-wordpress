<?php

function tagarela_theme_support() {
    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'tagarela_theme_support');
