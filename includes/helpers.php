<?php

/**
 * Return asset path
 *
 * @param  $source
 */
function asset($source) {
    echo get_template_directory_uri() . '/library/' . $source;
    return;
}

/**
 * Return partial path
 *
 * @param  $source
 */
function partial($source) {
    return get_template_directory() . '/partials/' . $source;
}

/**
 * Return asset image path
 *
 * @param  $source
 */
function image($source) {
    echo get_template_directory_uri() . '/library/images/' . $source;
    return;
}

/**
 * Return media path
 *
 * @param  $source
 */
function media($source) {
    $url = wp_upload_dir();

    echo $url['baseurl'] . '/' . $source;
    return;
}

/**
 * Return url path
 *
 * @param  $segment
 */
function url($segment = null, $withParent = false) {
    if($withParent):
         echo site_url($segment."/");
        return;
    endif;

   echo home_url($segment."/");
    return;
}

/**
 * Return ACF content block from repeater identifier field
 *
 * @param  $segment
 */
function content($identifier)
{
    global $post;

    $meta = get_post_meta($post->ID);
    $content = null;

    foreach($meta as $key => $value):

        if($value[0] == $identifier)
            $content = $key;

    endforeach;

    if(!$content)
        return false;

    $contentId = str_replace('_identifier', '', str_replace('content_', '', $content));
    $contentKey = 'content_' . $contentId . '_content';

    echo get_post_meta($post->ID, $contentKey, true);
    return;
}

?>
