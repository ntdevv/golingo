<?php get_header(); ?>

	<div class="single-post__main">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-10">
					<h2 class="heading heading--lg"><?=$post->post_title;?></h2>
					<?=the_content(); ?>
					<hr>
				</div>
			</div>
		</div>
	</div>

<?php get_footer(); ?>
