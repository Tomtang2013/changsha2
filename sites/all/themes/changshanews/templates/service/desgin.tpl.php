<?php
global $base_path;
$platform_path = $base_path . 'news_service/platform';
$design_path = $base_path . 'news_service/design';
$coo_path = $base_path . 'news_service/cooperation';
?>

<script type="text/javascript">
    jQuery(function(){
        jQuery( ".active" ).find('a').css('color','black');
    });
</script>

<div class="service_design_header service_design_header_bg">
    <ul class="ul_left">
        <li class="unactive"><a href="<?php print $platform_path; ?>">平台服务</a></li>
        <li class="active"><a href="<?php print $design_path; ?>">设计服务</a></li>
        <li class="unactive"><a href="<?php print $coo_path; ?>">合作案例</a></li>
    </ul>

    <div class="div_right">
        <span style="padding-right:186px;">the most influential design communication platform</span>
        <span style="padding-right:91px;">in Central South China </span>
        <span>中南地区最具大众影响力的设计传播平台</span>
    </div>

</div>

<div id="design_main" class="design_main">
    <!--<h2>设计服务</h2>
    <hr>
    <div>
        潇湘晨报品牌创意中心隶属于潇湘晨报经营有限公司，是潇湘晨报全系全媒体自身品牌宣传及广告客户需要而设立的核心创意机构，
        同时为经营性广告公司，对外承接媒体投放，品牌顾问，视觉表达及影视制作等商业服务。
    </div>
    -->
    <div style="width:100%;margin-top: -100px;">
        <div class="platform_item" style="margin-left:0px;">
            <div class="platform_item_content">媒体整合</div>
            <hr >
            <div class="platform_item_detail">
                <p>整合社会全媒体</p>
                <p>资源有效精准投放</p>
            </div>
        </div>
        <div class="platform_item" style="margin-right:24px;margin-left:24px;">
            <div class="platform_item_content">企业顾问</div>
            <hr>
            <div class="platform_item_detail">
                <p>企业识别系统</p>
                <p>建设及维护</p>
            </div>
        </div>
        <div class="platform_item" style="margin-right:0px;">
            <div class="platform_item_content">区域文化</div>
            <hr>
            <div class="platform_item_detail">
                <p>区域文化建设</p>
                <p>区域识别系统</p>
                <p>文化衍生产品</p>
            </div>
        </div>

        <div class="platform_item" style="margin-left:0px;">
            <div class="platform_item_content">公关策划</div>
            <hr >
            <div class="platform_item_detail">
                <p>活动策划</p>
                <p>会展执行</p>
            </div>
        </div>

        <div class="platform_item" style="margin-right:24px;margin-left:24px;">
            <div class="platform_item_content">视觉创意</div>
            <hr>
            <div class="platform_item_detail">
                <p>广告、包装、书籍</p>
                <p>画册等单件设计</p>
            </div>
        </div>
        <div class="platform_item" style="margin-right:0px;">
            <div class="platform_item_content">区域文化</div>
            <hr>
            <div class="platform_item_detail">
                <p>形象宣传片</p>
                <p>微电影</p>
                <p>电子展示设计</p>
            </div>
        </div>
    </div>
    <div style="clear:both;padding-bottom: 50px;"></div>
</div>

