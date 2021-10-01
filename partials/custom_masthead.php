<?php
$masthead_title = get_field('masthead_title');
$masthead_subtext = get_field('masthead_subtext');
$masthead_CTA_1_text = get_field('masthead_cta_1_text');
$masthead_CTA_2_text = get_field('masthead_cta_2_text');
$masthead_CTA_1_link = get_field('masthead_cta_1_link');
$masthead_CTA_2_link = get_field('masthead_cta_2_link');
$masthead_video = get_field('masthead_video');
?>
<div class="masthead">
        <video class="masthead__video" src="<?=$masthead_video?>" muted loop autoplay preload="auto"></video>
        <div class="masthead__overlay"></div>
        <div class="masthead__text">
            <h1 class="masthead__text-title"><?=$masthead_title?></h1>
            <!-- <h3 class="masthead__text_subtitle">Beliving</h3> -->
            <p class="masthead__text-subtitle">
                <?=$masthead_subtext?>
            </p>
        <div class="masthead__btns">
            <a href="<?=$masthead_CTA_1_link?>" class="masthead__CTA"><?=$masthead_CTA_1_text?></a>
            <a href="<?=$masthead_CTA_2_link?>" class="masthead__CTA"><?=$masthead_CTA_2_text?></a>
        </div>

            <ul class="masthead__btns-social">
                <li class="social_link">
                    <a href="#" class="social_link_href">
                         <img src="https://staging.golingo.co.uk/wp-content/uploads/2021/09/Apple-Store.png" alt="google logo" class="social_link-image"> 
                    </a>
                </li>
                <li class="social_link">
                    <a href="#" class="social_link_href">
                         <img src="https://staging.golingo.co.uk/wp-content/uploads/2021/09/Google-Play.png" alt="apple logo" class="social_link-image"> 
                    </a>
                </li>
               
            </ul>

        </div>
</div>