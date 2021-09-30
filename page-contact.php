<?php /* Template Name: Contact Page Template */
get_header();
?>
<?php
include(get_template_directory(). '/partials/custom_masthead.php');
?>
<section class="contact_page">
    <div class="contact_page-masthead">
        <div class="contact_page-masthead-container">
            <div class="contact_page-masthead-text">
            
            </div>
        </div>
    </div>
</section>

<?php if( have_rows('page_blocks') ):

    while ( have_rows('page_blocks') ) : the_row();


    switch( get_row_layout())
    {
        case 'cards':
            include partial('cards.php');
            break;
        case 'how_it_works':
            include partial('howitworks.php');
            break;
        case 'testimonial-block':
            include partial('testimonials.php');
            break;
        case 'faq':
            include partial('faq.php');
            break;
        case 'contact':
            include partial('contact.php');
            break;
        case 'contact-form':
            include partial('cf7_block.php');
            break;
    }


endwhile;
endif; 
get_footer();
?>	