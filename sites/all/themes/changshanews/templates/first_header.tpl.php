<?php
global $base_path;
$about_company_path = $base_path . "about/company";
$work_summary = $base_path . "work/summary";
$news_service = $base_path . "news_service/platform";
?>

<script type="text/javascript">
    jQuery(function(){

    });
</script>

<div class="first_header">
    <ul style="margin-left: 91px;">
        <li> <a href="#">设计长沙</a></li>
        <li>|<a href="#">潇湘晨报设计中心</a> </li>
    </ul>

     <ul class="nav_link">
        <li> <a href="<?php print $about_company_path?>">关于</a></li>
        <li><a href="#">动态</a> </li>
        <li><a href="<?php print $work_summary?>">工作</a> </li>
        <li><a href="<?php print $news_service?>">服务</a> </li>
    </ul>
</div>
