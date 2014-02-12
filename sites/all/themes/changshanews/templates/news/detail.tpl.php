<?php
global $base_path;
$about_company_path = $base_path . "about/company";
$about_team_path = $base_path . "about/team";
$theme_path = $base_path . drupal_get_path('theme', 'changshanews');
$about_memberdetail_path = $base_path . "about/memberdetail";
$theme_path = $base_path . drupal_get_path('theme', 'changshanews');

$nid = arg(2);
if($nid){
    $node = node_load($nid);
    $news = new stdClass();
    $news->nid = $row->nid;
    $news->n_origin = $node->field_n_origin['und'][0]['value'];
    $news->n_editor = $node->field_n_editor['und'][0]['value'];
    $news->n_public_date = $node->field_public_date['und'][0]['value'];
    $news->n_b_image = array();
    $news->n_b_image[] = $node->field_n_b_image1['und'][0]['uri'];
    $news->n_b_image[] = $node->field_n_b_image2['und'][0]['uri'];
    $news->n_b_image[] = $node->field_n_b_image3['und'][0]['uri'];
    $news->n_b_image[] = $node->field_n_b_image4['und'][0]['uri'];
    $news->n_b_image[] = $node->field_n_b_image5['und'][0]['uri'];
    $news->n_b_image[] = $node->field_n_b_image6['und'][0]['uri'];
    $news->n_body = $node->body['und'][0]['value'];
    $news->title =  $node->title;

    $paths = array();
    foreach($news->n_b_image as $uri){
        $url = file_create_url($uri);
        $url = parse_url($url);
        $paths[] = $url['path'];
    }
}

?>

<script type="text/javascript">

    jQuery(function(){
        jQuery('.bxslider').bxSlider({
            auto: true,
            mode: 'fade',
            autoControls: true
        });
        //        jQuery( ".active" ).find('a').css('color','black');
        //        jQuery( ".unactive" ).find('a').css('color','#3c3b39');
    });
</script>

<div>
<div id="work_summary_main" class="work_summary_main" >
    <div class="work_summary_top" style="min-height: 250px;">
            <div id="work_summary_left">动态</div>
            <div id="work_summary_right">
                <span>CAREFULLY OBSERVE LIFE</span>
                <span>SO LIVE INTERACTIVE DESIGN AND</span>
                <span>用心观察生活,让设计与生活互动</span>
            </div>
    </div>
     <div class="work_imgs" style="background-color: #EEEEEE;padding-bottom:50px;" >
        <div style="max-width: 1040px;" >
            <div style="height:20px;background-color: yellow;"></div>
            <div style="min-height:400px;">
                <div style="height:35px;">
                    <div style="float:left;font-size: 20px;"><?php print $news->title;?></div>
                    <div style="float:right;">
                        <span style="padding-right:20px;">发布于：<?php print $news->n_public_date;?></span>
                        <span style="padding-right:20px;">来源：<?php print $news->n_origin;?></span>
                        <span >编辑：<?php print $news->n_editor;?></span>
                    </div>
                </div>
                
                <div id="sliderFrame">
                    <ul class="bxslider">
                        <?php foreach($paths as $path): ?>
                           <li> <img src="<?php print $path; ?>" style="min-width:1040px;" /></li>
                        <?php endforeach?>
                   </ul>
            	</div>
            </div>
            <div style="width:700px;">
                <?php  print nl2br ($news->n_body); ?>
            </div>
            </div>
        </div>
        
        <div style="clear:both;"></div>
    </div>
</div>
</div>
      