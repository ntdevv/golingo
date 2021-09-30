<?php
$cf7_shortcode = get_sub_field('cf7-shortcode');
$left_image = get_sub_field('contact_form_img');
?>
<section class="contact_form_section">
    <div class="contact_form_section-container">
        <div class="contact_form_section-content"><?=do_shortcode( $cf7_shortcode, false )?></div>
        <div class="contact_form_section-image">
            <img src="<?=$left_image?>" alt="">
        </div>
    </div>
</section>