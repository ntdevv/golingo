<?php
$config = get_field('wave_config');
$wave_top = $config["wave_top_colour"];
$wave_bottom = $config["wave_bottom_colour"];
$wave_flip = ($config["wave_flip"]) ?'transform:rotate(180deg)': '';
?>
<!-- <div style="position:relative"></div> -->
<section class="wave_section" style="height:250px; overflow:hidden; background-color:<?=$wave_top?>;">
<div class="wave_section-output" style="<?=$wave_flip?>">
        <!--<script>-->
        <!-- function genNum(max){-->
        <!-- let randomnum=(Math.random()*max+1).toFixed(2);-->
        <!-- return randomnum;-->
        <!-- };-->
        <!-- let SVG_string = `<svg viewBox="0 0 499 149" preserveAspectRatio="none" style="width: 100%;"><path d="-->
        <!-- M0.00,`+genNum(100)+` C`+genNum(350)+`,`+genNum(100)+` `+genNum(350)+`,`+genNum(100)+` 500,`+genNum(100)+` L100.00,0.00 L0.00,0.00 Z" style="stroke: none; fill: <?=$wave_bottom?>;"></path></svg>`;-->
        <!-- (function($){-->
        <!--    $('.wave_section-output').html(SVG_string);-->

        <!-- })(jQuery)-->
        <!--</script>-->
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="<?=$wave_bottom?>" fill-opacity="1" d="M0,224L48,208C96,192,192,160,288,138.7C384,117,480,107,576,133.3C672,160,768,224,864,218.7C960,213,1056,139,1152,122.7C1248,107,1344,149,1392,170.7L1440,192L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path></svg>
 </div>
 </section>
 