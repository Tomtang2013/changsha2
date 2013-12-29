<?php
global $base_path;
$about_company_path = $base_path . "about/company";
$about_team_path = $base_path . "about/team";
$theme_path = $base_path . drupal_get_path('theme', 'changshanews');
$about_memberdetail_path = $base_path . "about/memberdetail";
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

    <div class="work_about_team_main" >
        <div class="team_member_list">
            <div><p>顾问专家</p></div>
            <div class="team_member_imgs">
                <div class="team_member_img">
                    <div class="member_img "></div>
                    <div class="member_name">龙博</div>
                </div>

                <div class="team_member_img">
                    <div class="member_img "></div>
                    <div class="member_name">龙博</div>
                </div>

                <div class="team_member_img">
                    <div class="member_img "></div>
                    <div class="member_name">龙博</div>
                </div>

                <div class="team_member_imglast">
                    <div class="member_img "></div>
                    <div class="member_name">龙博</div>
                </div>

                <div class="team_member_img">
                    <div class="member_img "></div>
                    <div class="member_name">龙博</div>
                </div>

                <div class="team_member_img">
                    <div class="member_img "></div>
                    <div class="member_name">龙博</div>
                </div>

                <div class="team_member_img">
                    <div class="member_img "></div>
                    <div class="member_name">龙博</div>
                </div>

                <div class="team_member_imglast">
                    <div class="member_img "></div>
                    <div class="member_name">龙博</div>
                </div>

            </div>
        </div>
        <div style="clear:both;">
            <div class="team_member_list">
                <div><p>专家顾问</p></div>
                <div class="team_member_imgs">
                    <div class="team_member_img">
                        <div class="member_img ">
                            <a href="<?php print $about_memberdetail_path ?>" >
                                <img src="<?php print $theme_path; ?>/images/about/member/1.jpg" />
                            </a>
                        </div>
                        <div class="member_name">施晓玲</div>
                    </div>

                    <div class="team_member_img">
                        <div class="member_img ">
                            <a href="<?php print $about_memberdetail_path ?>" >
                                <img src="<?php print $theme_path; ?>/images/about/member/2.jpg" />
                            </a>
                        </div>
                        <div class="member_name">黄昌勇</div>
                    </div>

                    <div class="team_member_img">
                        <div class="member_img "></div>
                        <div class="member_name">刘哲</div>
                    </div>

                    <div class="team_member_imglast">
                        <div class="member_img ">
                            <a href="<?php print $about_memberdetail_path ?>" >
                                <img src="<?php print $theme_path; ?>/images/about/member/3.jpg" />
                            </a>

                        </div>
                        <div class="member_name">吴威</div>
                    </div>

                    <div class="team_member_img">
                        <div class="member_img ">
                            <a href="<?php print $about_memberdetail_path ?>" >
                                <img src="<?php print $theme_path; ?>/images/about/member/4.jpg" />
                            </a>
                        </div>
                        <div class="member_name">方敏</div>
                    </div>

                    <div class="team_member_img">
                        <div class="member_img ">
                            <a href="<?php print $about_memberdetail_path ?>" >
                                <img src="<?php print $theme_path; ?>/images/about/member/5.jpg" />
                            </a>
                        </div>
                        <div class="member_name">张萌</div>
                    </div>

                    <div class="team_member_img">
                        <div class="member_img ">
                            <a href="<?php print $about_memberdetail_path ?>" >
                                <img src="<?php print $theme_path; ?>/images/about/member/6.jpg" />
                            </a>
                        </div>
                        <div class="member_name">杨靖舟</div>
                    </div>

                    <div class="team_member_imglast">
                        <div class="member_img ">
                            <a href="<?php print $about_memberdetail_path ?>" >
                                <img src="<?php print $theme_path; ?>/images/about/member/7.jpg" />
                            </a>
                        </div>
                        <div class="member_name">舒靖期</div>
                    </div>

                    <div class="team_member_img">
                        <div class="member_img ">
                            <a href="<?php print $about_memberdetail_path ?>" >
                                <img src="<?php print $theme_path; ?>/images/about/member/8.jpg" />
                            </a>
                        </div>
                        <div class="member_name">马藤兹</div>
                    </div>

                    <div class="team_member_img">
                        <div class="member_img ">
                            <a href="<?php print $about_memberdetail_path ?>" >
                                <img src="<?php print $theme_path; ?>/images/about/member/9.jpg" />
                            </a>
                        </div>
                        <div class="member_name">曾扬</div>
                    </div>

                    <div class="team_member_img">
                        <div class="member_img img0"></div>
                        <div class="member_name">胡彦</div>
                    </div>

                    <div class="team_member_imglast">
                        <div class="member_img img0"></div>
                        <div class="member_name">童亦</div>
                    </div>

                    <div class="team_member_img">
                        <div class="member_img img0"></div>
                        <div class="member_name">王子诺</div>
                    </div>
                </div>
            </div>
            <div style="clear:both;"></div>
        </div>
    </div>

