<?php
$first_card = get_sub_field('first_card');
$second_card = get_sub_field('second_card');
$third_card = get_sub_field('third_card');
?>


<section class="cards">
        <div class="cards-container">
            <div class="card">
               <div class="card-icon"><img class="card-icon-image" style="background-color:#fff4f5;" src="<?=$first_card['icon']?>"></div>
               <div class="card-text-container">
                  <div class="card-title"><?=$first_card['card_title']?></div>
                  <div class="card-subtitle"><?=$first_card['card_subtitle']?></div>
               </div>
               <div class="btn"><a href="<?=$first_card['link']['url']?>"><?=$first_card['link']['title']?></a></div>
            </div>
         <div class="card">
             <div class="card-icon"><img class="card-icon-image" style="background-color:#fff4f5;" src="<?=$second_card['icon']?>"></div>
             <div class="card-text-container">
                <div class="card-title"><?=$second_card['card_title']?></div>
                <div class="card-subtitle"><?=$second_card['card_subtitle']?></div>
             </div>
             <div class="btn"><a href="<?=$second_card['link']['url']?>"><?=$second_card['link']['title']?></a></div>
         </div>
            <div class="card">
               <div class="card-icon"><img class="card-icon-image" style="background-color:#fff4f5;" src="<?=$third_card['icon']?>"></div>
               <div class="card-text-container">
                  <div class="card-title"><?=$third_card['card_title']?></div>
                  <div class="card-subtitle"><?=$third_card['card_subtitle']?></div>
               </div>
               <div class="btn"><a href="<?=$third_card['link']['url']?>"><?=$third_card['link']['title']?></a></div>
            </div>
</section>
