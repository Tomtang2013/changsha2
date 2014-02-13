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
                <span style="padding-right:112px;">Our passion is building brands</span>
                <span style="padding-right:66px;">from thr insde out</span>
                <span>我们的激情是由内而外的品牌建设</span>
            </div>
    </div>
   
    <div class="work_imgs">
        <div style="margin-top: -330px;width: 100%" >
            <?php foreach($works_list as $work) :?>
                <?php if($i%3 == 0) :?>
                    <div class="div_img ">
                <?php else:?>
                    <div class="div_img">
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

