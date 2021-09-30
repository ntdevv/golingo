<?php /* Template Name: Contact Page Template */
get_header();
?>

<section class="contact_page">
    <div class="contact_page-masthead" style="">
        <div class="contact_page-masthead-container">
            <div class="contact_page-masthead-text">
                <div class="contact_page-masthead-text-title">
                    We Would Love To Hear From You
                </div>
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

?>	

<?php 
get_footer();

?>