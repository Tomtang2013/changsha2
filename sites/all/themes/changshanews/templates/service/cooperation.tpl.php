<?php
global $base_path;
$platform_path = $base_path . 'news_service/platform';
$design_path = $base_path . 'news_service/design';
$coo_path = $base_path . 'news_service/cooperation';
?>

<script type="text/javascript">
    jQuery(function(){
        jQuery( ".ul_left" ).find(".active").find('a').css('color','black');
        jQuery(".first_header").find('a').css('color','#D7D7D7');
    });
</script>

<div class="service_design_header service_design_header_bg" id="service_design_header">
    <ul class="ul_left">
        <li class="unactive"><a  href="<?php print $platform_path; ?>">平台服务</a></li>
        <li class="unactive"><a  href="<?php print $design_path; ?>">设计服务</a></li>
        <li class="active"> <a href="<?php print $coo_path; ?>">合作案例</a></li>
    </ul>

    <div class="div_right">
        <span class="service-opt-first" >THE MOST INFLUENTIAL DESIGN COMMUNICATION PLATFORM</span>
        <span class="service-opt-sec" >IN CENTRAL SOUTH CHINA </span>
        <span>中南地区最具大众影响力的设计传播平台</span>
    </div>
</div>

<div id="design_main" class="design_main">

    <div  class="service-item-content">
        <div>
            <div class="left"></div>
            <div class="right"></div>
            <div class="left" style="clear:both;">
                <div class="left_content">
                       媒体
                </div>
            </div>
            <div class="right" >
                <div class="right_content">
                </div>
            </div>
            <div class="left" style="clear:both;">
                <div class="left_content">
                        政企
                </div>
            </div>
            <div class="right" >
                <div class="right_content">
                </div>
            </div>
            <div class="left" style="clear:both;">
                <div class="left_content">
                        区域
                </div>
            </div>
            <div class="right" >
                <div class="right_content">
                </div>
            </div>
            <div class="left" style="clear:both;">
                <div class="left_content">
                        展会
                </div>
            </div>
            <div class="right" >
                <div class="right_content">
                </div>
            </div>
        </div>
    </div>
    <div style="clear:both;padding-bottom: 50px;"></div>
</div>

