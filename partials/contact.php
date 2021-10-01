<?php
$contact_title = get_sub_field('contact_title');
$contact_content = get_sub_field('contact_content');
?>
<section class="contact_section">
    <div class="contact_section-container">
        <div class="contact_section-title"><?=$contact_title?></div>
        <div class="contact_section-content"><?=$contact_content?></div>
        <div class="btn">Contact Us</div>
    </div>
    
</section>