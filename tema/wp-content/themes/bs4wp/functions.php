<?php 
    // Função para chamar a tag <title> de forma dinâmica
    function bs4wp_title_tag() {
        add_theme_support('title-tag');
    }
    add_action('after_setup_theme', 'bs4wp_title_tag');

    // Função para prevenir o erro na tag title em versões antigas do WordPress
    if (!function_exists('wp_render_title_tag')) {
        function bs4wp_render_title() {
            ?>
            <title><?php wp_title('|', true, 'right') ?></title>
            <?php
        }
        add_action('wp_head', 'bs4wp_render_title');
    }
?>