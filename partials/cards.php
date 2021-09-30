<?php
$first_card = get_sub_field('first_card');
$second_card = get_sub_field('second_card');
$third_card = get_sub_field('third_card');
$link_one = $first_card['link'];
$link_two = $second_card['link'];
$link_three = $third_card['link'];
?>


<section class="cards">
<div class="container">
      <div class="card">
         <div class="card-icon"><img class="card-icon-image" src="<?=$first_card['icon']?>"></div>
         <div class="card-text-container">
            <div class="card-title"><?=$first_card['card_title']?></div>
            <div class="card-subtitle"><?=$first_card['card_subtitle']?></div>
         </div>
         <div class="btn"><a href="<?=$link_one['url']?>"><?=$link_one['title']?></a></div>
      </div>
      <div class="card">
         <div class="card-icon"><img class="card-icon-image" src="<?=$second_card['icon']?>"></div>
         <div class="card-text-container">
            <div class="card-title"><?=$second_card['card_title']?></div>
            <div class="card-subtitle"><?=$second_card['card_subtitle']?></div>
         </div>
         <div class="btn"><a href="<?=$link_two['url']?>"><?=$link_two['title']?></a></div>
      </div>
      <div class="card">
         <div class="card-icon"><img class="card-icon-image" src="<?=$third_card['icon']?>"></div>
         <div class="card-text-container">
            <div class="card-title"><?=$third_card['card_title']?></div>
            <div class="card-subtitle"><?=$third_card['card_subtitle']?></div>
         </div>
         <div class="btn"><a href="<?=$link_three['url']?>"><?=$link_three['title']?></a></div>
      </div>
</div>
</section>
