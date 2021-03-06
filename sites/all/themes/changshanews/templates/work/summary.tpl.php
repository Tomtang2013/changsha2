<?php
global $base_path;
$theme_path = $base_path.drupal_get_path('theme', 'changshaworks');
$work_detail_path = $base_path . "work/detail/";

$result = db_query("SELECT nid FROM node WHERE type = :type", array(':type' => 'work'))->fetchAll();
$works_list = array();

foreach ($result as $row) {
    $node = node_load($row->nid);
    $works = new stdClass();
    $works->nid = $row->nid;
    $works->title = $node->title;
    $url = file_create_url($node->field_w_s_image['und'][0]['uri']);
    $url = parse_url($url);
    $works->path = $url['path'];
    $works_list[] = $works;
}


?>

<script type="text/javascript">
    jQuery(function(){
//        jQuery( ".active" ).find('a').css('color','black');
    });
</script>


<div id="work_summary_main" class="work_summary_main">
    <div class="work_summary_top">
        <div id="work_summary_left">工作</div>
            <div id="work_summary_right">
<!--                style="padding-right:210px;"
                style="padding-right:136px;"-->
                <span >OUR PASSION IS BUILDING BRANDS</span>
                <span >FROM THR INSDE OUT</span>
                <span  class="chinese_right">我们的激情是由内而外的品牌建设</span>
            </div>
    </div>
   
    <div class="work_imgs">
        <div style="margin-top: -330px;width: 100%" >
            <?php $i=0; foreach($works_list as $work) : $i++?>
                <?php if($i%3 == 0) :?>
                    <div class="div_imglast ">
                <?php else:?>
                    <div class="div_img ">
                <?php endif?>
                     <a href="<?php print $work_detail_path.$work->nid ?>" >
                         <img src="<?php print $work->path; ?>" />
                     </a>
                 </div>
            <?php endforeach; ?>
        </div>
        <div style="clear:both"></div>
    </div>
     
</div>

