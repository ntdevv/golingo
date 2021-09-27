<?php
global $post;
wp_reset_postdata();

is_front_page() ? $class= "" : $class="masthead--inner";

if(is_home()):
    $id = get_option('page_for_posts');
elseif( is_front_page() ) :
	$id = $post->ID;
// elseif( is_shop() ) :
//     $id = get_option( 'woocommerce_shop_page_id' );
elseif( is_tax() ) :
	$id = get_queried_object()->term_id;
elseif( is_category() ) :
	$id = get_queried_object()->term_id;
elseif( is_post_type_archive() ) : 
	$id = null;
else :
    $id = $post->ID;
endif;

// echo 'id: ' . $id;
// echo 'title: ' . get_field('masthead_title',$id);

$image = get_the_post_thumbnail_url($id,'full');
$title = ( get_field('masthead_title',$id) == '' ) ? get_the_title($id) : get_field('masthead_title',$id);
$subtitle = get_field('masthead_subtitle',$id);
// $images = get_field('masthead_slider');
$size = 'full'; // (thumbnail, medium, large, full or custom size)

if( is_null($id) ) {
	$title = '';
}

if( is_singular('post') ) {
	$image = get_template_directory_uri() . '/library/images/backgrounds/default.jpg';
	$title = 'My Blog';
}

//Set a default image
if( !has_post_thumbnail($post) || $image == '') {
	$image = get_template_directory_uri() . '/library/images/backgrounds/default.jpg';
}
		
?>


<div class="masthead <?= $class; ?>">
	<div class="masthead-image" style="background: url('<?= $image ?>') center / cover no-repeat; "></div>
	<?php if( have_rows('masthead_slider', $id) ): ?>
		<div class="masthead-content">
			<div class="container">
				<div class="masthead-slider">
				<?php while( have_rows('masthead_slider', $id) ): the_row(); 

					// vars
					$slideImage = get_sub_field('image');
					$slideTitle = get_sub_field('title');
					$slidePreTitle = get_sub_field('pre_title');
					$slideText = get_sub_field('text');
					$slideLink = get_sub_field('link');

					?>

					<div class="masthead-slide">
						<?php if( $slidePreTitle ): ?>
							<p class="masthead-slide__pretitle masthead-slide__pretitle--mobile wow fadeInUp"><?= $slidePreTitle; ?></p>
						<?php endif; ?>
						<img src="<?= $slideImage['url']; ?>" class="masthead-slide__image" alt="<?= $slideTitle; ?>">
						<div class="masthead-slide__content wow fadeIn">
							<?php if( $slidePreTitle ): ?>
								<p class="masthead-slide__pretitle"><?= $slidePreTitle; ?></p>
							<?php endif; ?>
							<?php if( $slideTitle ) : ?>
								<h2 class="masthead-slide__title"><?= $slideTitle; ?></h2>
							<?php endif; ?>				
							<span class="masthead-slide__divide"></span>
							<?php if( $slideText ): ?>
								<p class="masthead-slide__text"><?= $slideText; ?></p>
							<?php endif; ?>			
							<?php if( $slideLink ): ?>
								<a href="<?= $slideLink; ?>" class="button wow fadeInUp" data-wow-delay="0.2s">Shop now</a>
							<?php endif; ?>						
						</div>
					</div>
				<?php endwhile; ?>
				</div>
			</div>
		</div>
	<?php else : ?>

		<div class="masthead-content">
			<div class="container">
				<div class="masthead-container">
					<?php if( is_front_page() ) : ?>
						<img src="<?= image('logos/pink-lotus-dark.svg'); ?>" class="masthead-logo wow fadeInUp" alt="<?= get_bloginfo('name'); ?>">
						<div class="masthead-content-container wow fadeIn" data-wow-delay="0.3s">
							<?php if( $subtitle ): ?>
								<p class="masthead-subtitle"><?= $subtitle; ?></p>
							<?php endif; ?>
							<a href="<?= url('contact/#online-booking'); ?>" class="button">Book now</a>
						</div>
					<?php else : ?>
						<?php if( $title ) : ?>
							<h1 class="masthead-title wow fadeInUp"><?= $title; ?></h1>
						<?php endif; ?>				
						<?php if( $subtitle ): ?>
							<p class="masthead-subtitle wow fadeInUp" data-wow-delay="0.3s"><?= $subtitle; ?></p>
						<?php endif; ?>
					<?php endif; ?>
				</div>
			</div>
		</div>
	<?php endif; ?>
</div>

