<?php
global $base_path;
$theme_path = $base_path . drupal_get_path('theme', 'changshanews');
$nid = arg(2);
if($nid){
    $node = node_load($nid);
    $work = new stdClass();
    $work->nid = $row->nid;
    $work->title = $node->title;
    $work->body = $node->body['und'][0]['value'];
    $work->w_s_desc = $node->field_w_s_desc['und'][0]['value'];
    $work->w_l_desc = $node->field_w_l_desc['und'][0]['value'];

    $work->w_b_image = array();
    $work->w_b_image[] = $node->field_w_b_image1['und'][0]['uri'];
    $work->w_b_image[] = $node->field_w_b_image2['und'][0]['uri'];
    $work->w_b_image[] = $node->field_w_b_image3['und'][0]['uri'];
    $work->w_b_image[] = $node->field_w_b_image4['und'][0]['uri'];
    $work->w_b_image[] = $node->field_w_b_image5['und'][0]['uri'];
    $work->w_b_image[] = $node->field_w_b_image6['und'][0]['uri'];
    $work->w_b_image[] = $node->field_w_b_image7['und'][0]['uri'];

    $work->w_top_image = $node->field_w_top_image['und'][0]['uri'];
    $url = file_create_url($work->w_top_image);
    $url = parse_url($url);
    $work->w_top_image = $url['path'];

    $paths = array();
    foreach($work->w_b_image as $uri){
        $url = file_create_url($uri);
        $url = parse_url($url);
        $paths[] = $url['path'];
    }
}
?>

<script type="text/javascript">
    jQuery(function(){
        //        jQuery( ".active" ).find('a').css('color','black');
    });
</script>

<div class="work_enviro_header">
    <img src="<?php print $work->w_top_image; ?>" />
</div>
<div id="work_enviro_main" class="work_enviro_main">
    <div class="work_enviro_main_content">
        <div class="work_enviro_main_content_left">
            <div class="work_enviro_main_content_title"><?php print $work->title; ?></div>
            <?php print $work->w_s_desc; ?>
        </div>
        <div class="work_enviro_main_content_right">
            <p> <?php print $work->w_l_desc; ?></p>
        </div>
    </div>
    <div style="clear:both"></div>
</div>
<div class="work_enviro_main_imgs">
    <p><?php print $work->body; ?></p>
    <?php foreach($paths as $path): ?>
      <img src="<?php print $path; ?>" />
    <?php endforeach?>
</div>
