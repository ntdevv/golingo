<?php get_header(); ?>

<?php
include(get_template_directory(). '/partials/custom_masthead.php');
// include(get_template_directory(). '/partials/wave.php');
//     include(get_template_directory(). '/partials/cards.php');

//     include(get_template_directory(). '/partials/howitworks.php');
// include(get_template_directory(). '/partials/testimonials.php');
// include(get_template_directory(). '/partials/faq.php');
// include(get_template_directory(). '/partials/contact.php');
if( have_rows('page_blocks') ):

    while ( have_rows('page_blocks') ) : the_row();

        if( get_row_layout() == 'cards' ):
        	require(get_template_directory().'/partials/cards.php');
            

    	// elseif( get_row_layout() == 'card_block' ):
        // 	include partial('page-blocks/card-block.php');

       


        endif;

    endwhile;

endif; ?>


<?php get_footer(); ?>
