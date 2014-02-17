<?php
global $base_path;
$news_detail_path = $base_path."news/detail/";
$theme_path = $base_path . drupal_get_path('theme', 'changshanews');
$result = db_query("SELECT nid FROM node WHERE type = :type", array(':type' => 'news'))->fetchAll();

$news_list = array();
$paths = array();
foreach ($result as $row) {
    $node = node_load($row->nid);
    $news = new stdClass();
    $news->nid = $row->nid;
    $news->title = $node->title;
    $news->public_date = $node->field_public_date['und'][0]['value'];
    $url = file_create_url($node->field_n_b_image1['und'][0]['uri']);
    $url = parse_url($url);
    $paths[] = $url['path'];
    $news_list[] = $news;
}

?>

<script type="text/javascript">
    var isAuto = false;
//      if(<?php print count($paths);?> > 1)
        isAuto = true;
    jQuery(function(){
        jQuery( ".news_link" ).css('color','black');
        jQuery('.bxslider').bxSlider({
            auto: isAuto,
            mode: 'fade',
            autoControls: true
        });
        jQuery('.bx-controls').show();
        jQuery('.bx-pager').css('text-align','right');
        jQuery('.bx-pager-link').text("");
        jQuery('.bx-pager-link').css("background-color","yellow");
        jQuery('.bx-pager-link').css("margin-right","10px");
        jQuery('.bx-default-pager').css("top","340px");

//        jQuery('.bx-controls').css('top','640px');
        jQuery('.bx-wrapper').find('img').css('min-height','400px');
    });
</script>

<div>
<div id="work_summary_main" class="work_summary_main">
    <div class="work_summary_top" style="min-height: 250px;">
<!--        <img src="<?php print $theme_path ?>/images/dt-top1.jpg"  alt=""/>-->
            <div id="work_summary_left">动态</div>
            <div id="work_summary_right">
<!--                style="padding-right:166px;"
                style="padding-right:200px;"-->
                <span >CAREFULLY OBSERVE LIFE</span>
                <span >SO LIVE INTERACTIVE DESIGN AND</span>
                <span>用心观察生活,让设计与生活互动</span>
            </div>
    </div>
     <div class="work_imgs" style="background-color: #EEEEEE;">
        <div style="float: left;width: 600px;padding-right: 31px;" >
            <div style="height:20px;background-color: yellow;"></div>
            <div style="min-height:400px;background-color: #ffffff;">
                <ul style="list-style-type:none;padding-left: 0px;margin-top: 0px;">
                <?php foreach($news_list as $news):?>
                       <li style="padding:10px;">
                           <a class="news_link" href="<?php print $news_detail_path.$news->nid; ?>">
                                <?php print $news->title; ?></a>
                       <span style="float:right;">[ <?php print $news->public_date; ?> ]</span></li>
                <?php endforeach; ?>
                </ul>
            </div>
        </div>
        <div style="float: left;width: 409px;" >
             <div style="height:20px;background-color: yellow;"></div>
             <div style="min-height:400px;background-color: #ffffff;">
                 <ul class="bxslider" style="margin:0px;">
                        <?php foreach($paths as $path): ?>
                           <li> <img src="<?php print $path; ?>" /></li>
                        <?php endforeach?>
                   </ul>
             </div>
        </div>
        <div style="clear:both;padding-bottom: 100px;"></div>
    </div>
</div>
</div>
      