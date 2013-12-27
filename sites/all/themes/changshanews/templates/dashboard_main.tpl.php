<?php
    
?>

<script type="text/javascript">
    jQuery(function(){
//            RepositionNav();
//
//            jQuery(window).resize(function(){
//                RepositionNav();
//            });
            
            jQuery('#cs_nav').localScroll(800);
            jQuery('.small_log').parallax("50%", 20);
            jQuery('#dashboard_img1').parallax("50%",  0.1);
            jQuery('#dashboard_img2').parallax("50%", 0.1);
            jQuery('#dashboard_img3').parallax("50%", 0.1);
            jQuery('#dashboard_img4').parallax("50%", 0.3);




//           var deck = new jQuery.scrolldeck({
//                slides: '.dashboard_img',
//                buttons: '#cs_nav li a',
//                offset: -90,
//                duration : 515,
//                easing: 'easeInOutExpo'
//            });
    });
</script>

<ul id="cs_nav">
    <li  class="case " style="display: list-item;"><a href="#dashboard_img1" class="nav01">aa</a></li>
    <li class="case " style="display: list-item;"><a href="#dashboard_img2" class="nav02">bb</a></li>
    <li class="case " style="display: list-item;"><a href="#dashboard_img3" class="nav03">cc</a></li>
    <li class="case " style="display: list-item;"><a href="#dashboard_img4" class="nav04">dd</a></li>
</ul>

<div class="dashboard_main">
    <a href="" style="z-index: 999;"><img class="dashboard_main_logo" src="<?php print drupal_get_path('theme', 'changshanews'); ?>/images/header/design_changsha_logo.png" alt=""/></a>
    <div class="dashboard_img dashboard_img1" id="dashboard_img1">
        <div class="story">
            <!--        <a href="#" class="small_log"><img class=" small_log1" src="<?php //print drupal_get_path('module', 'dashboard'); ?>/images/main_image/dashboard_logo1.png"  alt=""/></a>-->
        </div>
    </div>
    <div class="dashboard_img dashboard_img2" id="dashboard_img2">
        <div class="story">
            <a href="#" class="small_log"><img class=" small_log2" src="<?php print drupal_get_path('theme', 'changshanews'); ?>/images/main_image/dashboard_logo2.png"  alt=""/></a>
        </div>
    </div>
    <div class="dashboard_img dashboard_img3" id="dashboard_img3">
        <div class="story">
            <a href="#" class="small_log"><img class="  small_log3" src="<?php print drupal_get_path('theme', 'changshanews'); ?>/images/main_image/dashboard_logo3.png"  alt=""/></a>
        </div>
    </div>
    <div class="dashboard_img dashboard_img4" id="dashboard_img4">
        <div class="story">
            <a href="#" class="small_log"><img class=" small_log4" src="<?php print drupal_get_path('theme', 'changshanews'); ?>/images/main_image/dashboard_logo4.png"  alt=""/></a>
        </div>
    </div>
</div>
