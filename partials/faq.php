<?php
$faqs = get_sub_field('faq');
$faq_title = get_sub_field('faq_title');
$faq_image = get_sub_field('faq_image');
// var_dump($faqs);
?>
<section class="faq">

 <div class="content_image-left">
            <div class="content_image-left-image">
            <img src="<?=$faq_image?>" alt="parrot" class="content_image-image-img">
            </div>
            
        </div>
        <div class="content_right-text">
            <h2 class="title"><?=$faq_title?></h2>
            <div class="content_right-text-container">

            <?php foreach($faqs as $faq)
            
                echo '<div class="content_right-text-block">
                    <div class="content_right-text-title">'.$faq['question'].'</div>
                    <div class="content_right-text-subtitle">
                        '.$faq['answer'].'
                    </div>
                </div>';
            ?>
                
                 <!-- <div class="content_right-text-block">
            //         <div class="content_right-text-title">How much does it cost?</div>
            //         <div class="content_right-text-subtitle">
            //            Pricing is being finalised but expect to pay less than $11/mth, £8/mth or €9/mth.
            //         </div>
            //     </div>
            //     <div class="content_right-text-block">
            //         <div class="content_right-text-title">When can I get it?</div>
            //         <div class="content_right-text-subtitle">
            //           Put your details into our Contact Us page and we’ll be in touch. Sooner than you think.
            //         </div>
            //     </div>
            //     <div class="content_right-text-block">
            //         <div class="content_right-text-title">Will it work on my mobile/computer?</div>
            //         <div class="content_right-text-subtitle">
            //          Yes; it’s designed for Android, iOS and browsers.
            //         </div>
            //     </div>
            // </div> -->
            <div class="btn">Learn More</div>
        </div>
        </section>