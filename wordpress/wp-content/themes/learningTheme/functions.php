

<?php
function learningTheme_resources(){
    wp_enqueue_style('style',get_stylesheet_uri());
}

add_action('wp_enqueue_scripts','learningTheme_resources');

//navigation menus
register_nav_menus(
    array(
        'primary' => __('Primary Menu'),
        'footer' => __('Footer Menu')
    )
);

//Get top ancestor
function get_top_ancestor_id() {
    global $post;
    if ($post->post_parent) {
        $ancestors = array_reverse(get_post_ancestors($post->ID));
        return $ancestors[0];
    }
    return $post->ID;
}

function theme_resource_style(){
	wp_enqueue_style('style_name',get_template_directory_uri().'/public/vendor/twitter/bootstrap/dist/css/bootstrap.min.css');
}
add_action('wp_enqueue_scripts','theme_resource_style');

?>




