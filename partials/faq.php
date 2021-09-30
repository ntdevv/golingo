<?php
$faqs = get_sub_field('faq');
$faq_title = get_sub_field('faq_title');
$faq_image = get_sub_field('faq_image');
// var_dump($faqs);
?>
<section class="faq">
<div class="container">
    <div class="content-text-container">
        <p class="title"><?=$faq_title?></p>
        <div class="content-text">
            <?php foreach($faqs as $faq)
            
                echo '<div class="content_right-text-block">
                    <div class="content_right-text-title">'.$faq['question'].'</div>
                    <div class="content_right-text-subtitle">
                        '.$faq['answer'].'
                    </div>
                </div>';
            ?>
            <div class="btn">Learn More</div>
        </div>
    </div>
        <div class="content_image">
            <img src="<?=$faq_image?>" alt="parrot" class="content_image-image-img">
        </div>         
</div>
</section>