<?php get_header(); ?>
<?php
include(get_template_directory(). '/partials/custom_masthead.php');
?>
    <section class="main-content">
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
		</section>

<?php get_footer(); ?>
