<?php
global $base_path;
$platform_path = $base_path . 'news_service/platform';
$design_path = $base_path . 'news_service/design';
$coo_path = $base_path . 'news_service/cooperation';
$theme_path = $base_path . drupal_get_path('theme', 'changshanews');
?>
<script type="text/javascript">
    jQuery(function(){
        jQuery( ".active" ).find('a').css('color','black');
    });



</script>

<div class="service_design_header service_platform_header_bg" id="platform_header">
    <ul class="ul_left">
        <li  class="active"><a href="<?php print $platform_path; ?>">平台服务</a></li>
        <li class="unactive"><a href="<?php print $design_path; ?>">设计服务</a></li>
        <li class="unactive"><a href="<?php print $coo_path; ?>">合作案例</a></li>
    </ul>

    <div class="div_right">
        <span class="service-opt-first" >THE MOST INFLUENTIAL DESIGN COMMUNICATION PLATFORM</span>
        <span class="service-opt-sec" >IN CENTRAL SOUTH CHINA </span>
        <span class="chinese_right">中南地区最具大众影响力的设计传播平台</span>
    </div>
</div>



<div id="design_main" class="design_main">
    <div  class="service-item-content">
        <div class="platform_item" style="margin-left:0px;">
            <div class="platform_item_content">品牌平台</div>
            <div class="platform_item_detail">
                <p>持续举行对话讲座、工作坊,</p>
                <p>为自身品牌影响力建设</p>
            </div>
        </div>
        <div class="platform_item" style="margin-right:24px;margin-left:24px;">
            <div class="platform_item_content">经营平台</div>
            <div class="platform_item_detail">
                <p>通过社会联动关系产生经营性活动,</p>
                <p>如竞赛、设计之旅、产品展、销售、</p>
                <p>设计周等</p>
            </div>
        </div>
        <div class="platform_item" style="margin-right:0px;">
            <div class="platform_item_content">特别平台</div>
            <div class="platform_item_detail">
                <p>服务于晨报全系全媒体需要、</p>
                <p>中央指示或中南集团制定项目,</p>
                <p>以及给政府提供服务的活动</p>
            </div>
        </div>
    </div>
    <div style="clear:both;padding-bottom: 50px;"></div>
</div>

