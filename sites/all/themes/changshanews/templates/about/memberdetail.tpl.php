<?php
global $base_path;
$about_company_path = $base_path . "about/company";
$about_team_path = $base_path . "about/team";
$theme_path = $base_path . drupal_get_path('theme', 'changshanews');
?>

<script type="text/javascript">
    jQuery(function(){
        jQuery( ".active" ).find('a').css('color','black');
        jQuery( ".unactive" ).find('a').css('color','#3c3b39');
    });
</script>


<div id="work_about" class="work_about ">
    <ul class="ul_left">
        <li class="unactive"><a href="<?php print $about_company_path; ?>">关于公司</a></li>
        <li class="active"><a href="<?php print $about_team_path; ?>">关于团队</a></li>
    </ul>

    <div class="div_right">
        <span class="">A BRAND / A SOUND</span>
        <span>一个品牌一个声音</span>
    </div>
 <div style="clear:both;height:100px; "></div>
    <div class="work_about_team_memeber_main" >
        <div class="big_img bgimg1">
        </div>
        <div class="member_discrib">
            <div class="member_discrib_left">
                施晓玲
            </div>
            <div class="member_discrib_right">
                <p>潇湘晨报品牌创意中心总经理</p>
                <p>设计长沙组委会秘书长</p>
                <p>潇湘晨报全系全媒体创意总监</p>
            </div>
            <div  class="member_discrib_bottom">
                <p>从事多年媒体传播视觉化行销与品牌策略研究；</p>
                <p>2011 - 2012 连续蝉联中国国际艾菲尔奖，且多次获国内外设计及策划奖项。</p>
            </div>
        </div>
        <div style="clear:both;"></div>
    </div>
    <div style="clear:both;height:100px; "></div>
</div>

