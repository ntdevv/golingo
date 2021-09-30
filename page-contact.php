<?php /* Template Name: Contact Page Template */
get_header();
?>

<section class="contact_page"  style="background-image: url(https://cdn.pixabay.com/photo/2018/08/12/16/59/parrot-3601194_960_720.jpg);background-size:cover;">
    <div class="contact_page-masthead">
        <div class="contact_page-masthead-container">
            <div class="contact_page-masthead-text">
                    <div class="contact_page-masthead-overlay" style="position:absolute; top:0; left:0;width:100%; height:100%;z-index:2;background-color:black; mix-blend-mode:overlay;"></div>
                    <div class="contact_page-masthead-text-title" style="z-index:3; color:white; font-size:3rem">

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
