<?php get_header(); ?>
<?php
include(get_template_directory(). '/partials/custom_masthead.php');
?>
    <section class="main-content">
		<div class="container">
			<?php if( have_rows('page_blocks') ):

				while ( have_rows('page_blocks') ) : the_row();

		//     if( get_row_layout() == 'cards' ):
		//     	require(get_template_directory().'/partials/cards.php');
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
				}

			// elseif( get_row_layout() == 'card_block' ):
			// 	
		

			

			//endif;
		endwhile;
		endif; 
			?>	
		</div>
		</section>

<?php get_footer(); ?>
