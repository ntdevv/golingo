<?php
$hiw_title = get_sub_field('hiw_title');
$first_image = get_sub_field('first_image');
$second_image = get_sub_field('second_image');
$first_text_block = get_sub_field('first_text_block');
$second_text_block = get_sub_field('second_text_block');
$third_text_block = get_sub_field('third_text_block');
?>
<section class="how_it_works">
<div class="container">
 <div class="content_image-left">
            <div class="content_image-left-image">
            <img src="<?=$first_image?>" alt="parrot" class="content_image-image-img">
            </div>
            <div class="content_image-left-image">
                <img class="content_image-image-img" src="<?=$second_image?>" alt="Bakery">
            </div>
        </div>
        <div class="content_right-text">
            <h2 class="title"><?=$hiw_title?></h2>
            <div class="content_right-text-container">
                <div class="content_right-text-block">
                    <div class="icon-container" style="background-color: #FFF4F5;"><img src="<?=$first_text_block['icon']?>" class="content_right-text-icon"></div><div class="content_right-text-title"><?=$first_text_block['title']?></div>
                    <div class="content_right-text-subtitle"><?=$first_text_block['content']?>
                    </div>
                </div>
                <div class="content_right-text-block">
                    <div class="icon-container" style="background-color: #FFF6F3;"><img src="<?=$second_text_block['icon']?>" class="content_right-text-icon"></div><div class="content_right-text-title"><?=$second_text_block['title']?></div>
                    <div class="content_right-text-subtitle"><?=$second_text_block['content']?>
                    </div>
                </div>
                <div class="content_right-text-block">
                    <div class="icon-container" style="background-color: #F5F4FF;"><img src="<?=$third_text_block['icon']?>" class="content_right-text-icon"></div><div class="content_right-text-title"><?=$third_text_block['title']?></div>
                    <div class="content_right-text-subtitle"><?=$third_text_block['content']?>
                    </div>
                </div>
                
            </div>
            <div class="btn">Learn More</div>
        </div>
</div>
        </section>