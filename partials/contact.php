<?php
$contactContent = get_field('contact_content');
$contactHeading = get_field('contact_heading');

?>
<section class="contact_section">
        <div class="contact_heading">
            <h1>
                <?= $contactHeading; ?>
            </h1>
        </div>
        <div class="contact_content">
            <p>
               <?= $contactContent; ?> 
            </p>
        </div>
</section>