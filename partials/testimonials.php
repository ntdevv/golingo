<?php
$testimonials = get_sub_field('testimonials-content');
$testimonial_title = get_sub_field('testimonial_title');
?>

<section class="testimonials">
<div class="container">
    <div class="content_image-left">
        <div class="content_image-left-image">
            <img src="https://staging.golingo.co.uk/wp-content/uploads/2021/09/Welcome-to-Golingo.png" alt="parrot" class="content_image-image-img">
        </div>       
    </div>
    <div class="content_right-text">
        <p class="title"><?=$testimonial_title?></p>
            <?php foreach($testimonials as $testimonial)
                echo '
                <div class="content_right-text-block">
                    <div class="content_right-text-title">“'.$testimonial['author'].'”</div>
                    <div class="content_right-text-subtitle">'.$testimonial['comment'].'</div>
                </div>';
            ?>     
    </div>
</div>
</div>
</section>
