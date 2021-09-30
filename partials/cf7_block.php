<?php
$cf7_shortcode = get_sub_field('cf7-shortcode');
?>
<section class="contact_section">
    <div class="contact_section-container">
        <div class="contact_section-content"><?=do_shortcode( $cf7_shortcode, false )?></div>
    </div>
    <div class="btn">Contact Us</div>
</section>