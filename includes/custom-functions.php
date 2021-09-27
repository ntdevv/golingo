<?php
# =========== REMOVE EMOJIS =========== #
    remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
    remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
    remove_action( 'wp_print_styles', 'print_emoji_styles' );
    remove_action( 'admin_print_styles', 'print_emoji_styles' );

# =========== DISABLE XMLRPC IF NO WOO =========== #
if ( ! function_exists( 'is_woocommerce_activated' ) ) {
    function is_woocommerce_activated() {
        if ( !class_exists( 'woocommerce' ) ) {
           add_filter('xmlrpc_enabled', '__return_false');
        }
    }
    is_woocommerce_activated();
}

# =========== REMOVE AUTI P CF7 =========== #
    add_filter('wpcf7_autop_or_not', '__return_false');

# =========== Enable SVG media upload =========== #
    function cc_mime_types($mimes) {
      $mimes['svg'] = 'image/svg+xml';
      return $mimes;
    }
    add_filter('upload_mimes', 'cc_mime_types');

# =========== ADD ACF OPTIONS =========== #
    if( function_exists('acf_add_options_page') ) {
    	acf_add_options_page(array(
    		'page_title' 	=> 'Theme General Settings',
    		'menu_title'	=> 'Theme Settings',
    		'menu_slug' 	=> 'theme-general-settings',
    		'capability'	=> 'edit_posts',
    		'redirect'		=> false
    	));
    }

# =========== MOVE YOAST TO BOTTOM =========== #
    function yoasttobottom() {
        return 'low';
    }
    add_filter( 'wpseo_metabox_prio', 'yoasttobottom');

# =========== SOCIL SHARE GENERATOR =========== #
    function social_share($types, $post) {

        $url = urlencode(get_permalink($post->ID));
        $title = urlencode($post->post_title);
        $description = urlencode(get_the_excerpt($post));
        $image = get_the_post_thumbnail_url($post->ID, 'full');
        $js = "onclick='javascript:window.open(this.href,\" \", \"menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;\"";

        ?>

        <div class="social-share">
            <?php
                foreach($types as $t):
                    switch($t):
                        case 'f': ?>
                            <a class="social-share__link social-share__link--facebook" href="https://www.facebook.com/sharer/sharer.php?u=<?=$url;?>&amp;title=<?=$title;?>" onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"><i class="fab fa-facebook-f"></i></a>
                        <?php break;
                        case 't'; ?>
                            <a class="social-share__link social-share__link--twitter" href="http://twitter.com/intent/tweet?status=<?=$description." ".$url;?>" onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"><i class="fab fa-twitter"></i></a>
                        <?php break;
                        case 'p'; ?>
                            <a class="social-share__link social-share__link--pinterest" href="https://pinterest.com/pin/create/button/?url=<?=$url;?>&media=<?=$image;?>&description=<?=$description;?>" onclick="javascript:window.open(this.href,
                          '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=800,width=900');return false;"><i class="fab fa-pinterest"></i></a>
                        <?php break;

                        case 'l'; ?>
                            <a class="social-share__link social-share__link--linkedin" href="https://www.linkedin.com/shareArticle?mini=true&url=<?=$url;?>&summary=<?=$description;?>" onclick="javascript:window.open(this.href,
                          '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=800,width=900');return false;"><i class="fab fa-linkedin-in"></i></a>
                        <?php break;

                        case 'e': ?>
                            <a href="mailto:?subject=<?=$post->post_name;?>&amp;body=Check out this post by <?php echo get_bloginfo( 'name' ); ?>: <?=$url;?>"title="Share by Email"><i class="fas fa-envelope"></i></a>
                        <?php break;
                    endswitch;
                endforeach;
            ?>
        </div> <?php
    }

/* =========== Friendly Telephone =========== */
    function friendlyTel($num) {
        $num = str_replace(' ', '', $num);

        return $num;
    }

/* =========== Custom exerpt length =========== */
    function tjdExcerpt( $content, $length, $ending='' ) {
        return wp_trim_words( $content , $length, $ending ); 
    }
