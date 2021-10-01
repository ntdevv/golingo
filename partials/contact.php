<?php
$contact_title = get_sub_field('contact_title');
$contact_content = get_sub_field('contact_content');
?>
<section class="contact_section">
    <div class="container">
        <h2 class="contact_section-title"><?=$contact_title?></h2>
        <p class="contact_section-content"><?=$contact_content?></p>
        <a src="/contact" class="btn">Contact Us</a>
    </div>
</section>