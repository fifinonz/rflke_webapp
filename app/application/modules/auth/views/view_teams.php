
<?php
// SET REFERRER

function strleft($s1, $s2) {
    return substr($s1, 0, strpos($s1, $s2));
}

function selfURL() {
    if(!isset($_SERVER['REQUEST_URI'])) {
        $serverrequri = $_SERVER['PHP_SELF'];
    }
    else {
        $serverrequri = $_SERVER['REQUEST_URI'];
    }
    $s = empty($_SERVER["HTTPS"]) ? '' : ($_SERVER["HTTPS"] == "on") ? "s" : "";
    $protocol = strleft(strtolower($_SERVER["SERVER_PROTOCOL"]), "/").$s;
    $port = ($_SERVER["SERVER_PORT"] == "80") ? "" : (":".$_SERVER["SERVER_PORT"]);
    $_SESSION['ref'] = $protocol."://>/".$_SERVER['SERVER_NAME'].$port.$serverrequri;
}

selfURL();

?>
<div id="layerslider-container-fw">

    <div id="layerslider" style="width: 100%; height: 530px; margin: 0px auto; ">        <div class="ls-slide" data-ls="transition3d:53; timeshift:-1000;">
            <img src="<?php echo base_url();?>assets/images/slider5.png" class="ls-bg" alt="Slide background">
            <p class="ls-l slide1"	style="top: 330px; left:248px; font-family:roboto; font-size:13px; color:#fefefe;" data-ls="delayin:1000; scalein:4; durationin : 1000;"><br/></p>
        </div><!-- Slide1 -->

        <div class="ls-slide" data-ls="transition3d:12;timeshift:-1000;">
            <img src="<?php echo base_url();?>assets/images/slider5.png" class="ls-bg" alt="Slide background">
            <h3 class="ls-l slide1" style="top:196px; left:100px; font-family: roboto; color: #FFFFFF; line-height:22px; font-size:32px; background:rgba(0,0,0,0.85); padding:18px 30px; border-radius:3px;" data-ls="offsetxin:0; scalexin:0; scaleyin:0; offsetxout:0; offsetyout:top; durationin:1500; durationout:800; showuntil:2000; fadeout:false;">
                <i>CELEBRATE.</i></h3>

            <h4 class="ls-l slide3" style="top:265px; left:100px; background:rgba(152,212,96,0.85); font-family: roboto; color: #FFFFFF; font-size:28px; line-height:26px; padding:10px 20px; border-radius:3px;" data-ls="offsetxin:0; scalexin:0; scaleyin:0; offsetxout:0; offsetyout:top; durationin:1500; durationout:800; delayin:500; showuntil:2500;fadeout:false;">
                <span>REMEMBER.</span></h4>

            <h5 class="ls-l slide3" style="top:319px; left:100px; background:rgba(255,255,255,0.85); color:#595858; font-family:roboto; font-size:24px; line-height: 20px; padding:10px 20px; border-radius:3px;" data-ls="offsetxin:0; scalexin:0; scaleyin:0; offsetxout:0; offsetyout:top; durationin:1500; durationout:800; delayin:1000; showuntil:3000;fadeout:false;">
                FIGHT <span>BACK.</span></h5>
        </div><!-- Slide2 -->

        <div class="ls-slide" data-ls="transition3d:35;timeshift:-1000;">
            <img src="<?php echo base_url();?>assets/images/slider6.png" class="ls-bg" alt="Slide background">
            <h3 class="ls-l" style="top: 160px; left:160px; font-family:roboto; font-size:72px; font-weight:bold; color:#fff; line-height:60px; text-align:center;" data-ls="offsetxin:0;offsetyin:top;durationin:1500;delayin:1000;easingin:easeInOutQuart;fadein:false;scalexin:0;scaleyin:0;offsetxout:0;offsetyout:top;durationout:1000;fadeout:false;" >WHO WILL YOU <span>RELAY FOR?</span></h3>

            <span class="ls-l slide3-subtitle" style="top: 248px; left:160px; padding:13px; border-radius:3px; color:#fff; font-family:open sans; font-weight:900; font-size:26px; text-transform:uppercase; line-height:20px;" data-ls="offsetxin:0;offsetyin:bottom;durationin:1500;delayin:1200;easingin:easeInOutQuart;fadein:false;scalexin:0;scaleyin:0;offsetxout:0;offsetyout:top;durationout:1000;fadeout:false;">CELEBRATE <i style="font-style:normal; color:#373737;">LIFE.</i></span>

            <span class="ls-l slide3-subtitle2" style="top: 248px; left:750px; background:rgba(0,0,0,0.8); padding:13px; border-radius:3px; color:#fff; font-family:open sans; font-weight:900; font-size:26px; text-transform:uppercase; line-height:20px;" data-ls="offsetxin:0;offsetyin:bottom;durationin:1500;delayin:1300;easingin:easeInOutQuart;fadein:false;scalexin:0;scaleyin:0;offsetxout:0;offsetyout:top;durationout:1000;fadeout:false;"><i style="font-style:normal;">FIINISH</i> THE FIGHT.</span>
        </div><!-- Slide3 -->


        <div class="ls-slide" data-ls="transition3d:75;timeshift:-1000;">
            <img src="<?php echo base_url();?>assets/images/slider1.jpg" class="ls-bg" alt="Slide background">

            <h3 class="ls-l slide4" style="top:140px; left:150px; background:rgba(0,0,0,0.9); font-family:roboto; font-size:36px; font-weight:bold; color:#fefefe; padding:20px 60px 20px; border-radius:4px;" data-ls="offsetxin:bottom;durationin:2000;delayin:1000;easingin:easeInOutQuart;fadein:false;scalexin:100;scaleyin:0;offsetxout:right;durationout:1400;fadeout:false;">
                RELAY FOR <i>LIFE</i></h3>

            <span class="ls-l slide4-subtitle" style="top:280px; left:215px;border-radius: 4px 4px 0 0; color: #FFFFFF;font-family: open sans;font-size: 13px;font-weight: bold; padding: 5px 10px;" data-ls="offsetxin:bottom;durationin:2000;delayin:1500;easingin:easeInOutQuart;fadein:false;scalexin:100;scaleyin:0;offsetxout:right;durationout:1400;fadeout:false;">KEEPING HOPE ALIVE</span>

            <p class="ls-l" style="top:180px; left:20px; font-family:roboto; font-size:14px; color:#030303;" data-ls="offsetxin:bottom;durationin:2000;delayin:2000;easingin:easeInOutQuart;fadein:false;scalexin:100;scaleyin:0;offsetxout:right;durationout:1400;fadeout:false;"></p>

        </div><!-- Slide4 -->

        <div class="ls-slide" data-ls="transition3d:63;timeshift:-1000;">
            <img src="<?php echo base_url();?>assets/images/slider4.png" class="ls-bg" alt="Slide background">
            <h3 class="ls-l slide5" style="top:80px; left:670px; font-family:open sans; font-size:36px; font-weight:700; color:#FFF;"  data-ls="offsetxin:0;offsetyin:top;durationin:750;delayin:1000;easingin:easeOutQuart;fadein:false;offsetxout:right;durationout:1000;easingout:easeInQuart;fadeout:false;">UNITED <span>AGAINST</span> CANCER</h3>
            <i class="ls-l slide5" style="top:130px; left:760px; font-family:open sans; font-size:20px; color:#FFF;"  data-ls="offsetxin:0;offsetyin:top;durationin:750;delayin:500;easingin:easeOutQuart;fadein:false;offsetxout:right;durationout:1000;easingout:easeInQuart;fadeout:false;"></i>
            <h4 class="ls-l slide5-title" style="top:160px; left:560px; font-family:open sans; font-size:60px; font-weight:700; color:#FFF; line-height:55px; padding:50px 80px 80px; background:url(<?php echo base_url();?>assets/images/slider5-bg.png) no-repeat scroll 0 0 / 100% 100% transparent;" data-ls="offsetxin:0;offsetyin:0;durationin:1000;delayin:1400;easingin:easeOutQuart;fadein:false;easingout:easeInQuart;rotatexin:-90deg;">RELAY <span>FOR</span> LIFE</h4>
            <span class="ls-l" style="top:280px; left:710px; font-family:open sans; font-size:18px; font-weight:400; color:#FFF; letter-spacing:3px;" data-ls="offsetxin:0;offsetyin:0;durationin:1000;delayin:1700;easingin:easeOutQuart;fadein:false;easingout:easeInQuart;rotatexin:-90deg;">KENYA CANCER ASSOCIATION</span>
        </div><!-- Slide5 -->

        <div class="ls-slide" data-ls="transition3d:63;timeshift:-1000;">
            <img src="<?php echo base_url();?>assets/images/slider1.jpg" class="ls-bg" alt="Slide background">
            <h3 class="ls-l" style="top:190px; left:50%; color:#FFF; font-family:open sans; font-size:60px; font-weight:300;" data-ls="durationin:1500; delayin:1000; easingin:easeOutQuart; fadein:false; easingout:easeInQuart; rotatexin:-90deg;"><span style="font-weight:700;"> LET'S KICK CANCER OUT OF KENYA.</span></h3>
        </div>


    </div>
</div><!-- Layer Slider -->


<section class="inner-page">
    <div class="container">
        <div class="page-title">
            <h1>TEAMS <span>RELAY 2015</span></h1>
        </div><!--Page Title-->
        <div class="remove-ext">
            <div class="row">
                <div class="accordion_toggle"><a href="#">
                        <span>
                            <i class="icon-info-sign"></i>
                        </span>To join a team you must be logged in.  <strong style="color:#800080;text-decoration: underline">Click here to Log in!</strong></a>
                </div>
                <div class="accordion_content" style="display: block;">
                        <p style="font-size: 16px;">Please log in below.</p>
                                <div class="login_form" style="width: 400px" id="login">
                            <?php echo form_open("auth/login");?>

                            <p>
                                <?php echo lang('login_identity_label', 'identity');?>
                                <?php echo form_input($identity);?>
                            </p>

                            <p>
                                <?php echo lang('login_password_label', 'password');?>
                                <?php echo form_input($password);?>
                            </p>

                            <p>
                                <?php echo lang('login_remember_label', 'remember');?>
                                <?php echo form_checkbox('remember', '1', FALSE, 'id="remember"');?>
                            </p>


                            <p><?php echo form_submit('submit', lang('login_submit_btn'));?></p>

                            <?php echo form_close();?>
                                </div>
                    </div>


                <div class="accordion_toggle"><a href="#">
                        <span><i class="icon-info-sign"></i>
                        </span>Don't have a Relay account? <strong style="color:#800080;text-decoration: underline">Click here to Sign up!</strong></a>
                </div>
                <div class="accordion_content" style="display: block;">
                        <p style="font-size: 16px;">
                            Please Create an account with us...it is absolutely free! Having an account will allow you to join a team or start a new team!</p>
                        <br/>
                    <div class="login_form" id="login">

                        <h2 style="color: #2b0171;text-align:left">
                            <img src="<?php echo base_url();?>assets/images/mini-logo.png"/>                            CREATE A RELAY ACCOUNT</h2>
                        <hr/>
                        <p style="color: #800080"><?php echo lang('create_user_subheading');?></p>

                        <div style="color: #800080" id="infoMessage"><?php echo $message;?></div>

                        <?php echo form_open("auth/create_user");?>

                        <p>
                            <?php echo lang('create_user_fname_label', 'first_name');?> <br />
                            <?php echo form_input($first_name);?>
                        </p>

                        <p>
                            <?php echo lang('create_user_lname_label', 'last_name');?> <br />
                            <?php echo form_input($last_name);?>
                        </p>

                        <p>
                            <?php echo lang('create_user_company_label', 'company');?> <br />
                            <?php echo form_input($company);?>
                        </p>

                        <p>
                            <?php echo lang('create_user_email_label', 'email');?> <br />
                            <?php echo form_input($email);?>
                        </p>

                        <p>
                            <?php echo lang('create_user_phone_label', 'phone');?> <br />
                            <?php echo form_input($phone);?>
                        </p>

                        <p>
                            <?php echo lang('create_user_password_label', 'password');?> <br />
                            <?php echo form_input($password);?>
                        </p>

                        <p>
                            <?php echo lang('create_user_password_confirm_label', 'password_confirm');?> <br />
                            <?php echo form_input($password_confirm);?>
                        </p>


                        <p><?php echo form_submit('submit', lang('create_user_submit_btn'));?></p>

                        <?php echo form_close();?>
                    </div>

                </div>
                </div>

<!--            THIS SECTION IS PART OF THE NOT LOGGED IN VIEW.....LINKS ARE NOT CLICKABLE!-->
                <section class="block">
                <div class="col-md-4">
                    <div class="our-cause">
                        <div class="our-cause-img">
                            <img alt="" src="images/causes-new1.jpg">
<!--                            <a title="" href="--><?php //echo base_url();?><!--site/relay/join_team"><i class="icon-link"></i></a>-->
                        </div>
                        <div class="our-cause-detail">
                            <h3>Team 1</h3>
                            <span>Captain: <a title="" href="#"></a></span>
                            <p>This team is ....</p>
                            <i>Funds Raised: <span>KES</span> <strong>20,000</strong></i>
<!--                            <a title="" href="--><?php //echo base_url();?><!--site/relay/join_team">Join this Team</a>-->
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="our-cause">
                        <div class="our-cause-img">
                            <img alt="" src="images/causes-new1.jpg">
<!--                            <a title="" href="--><?php //echo base_url();?><!--site/relay/join_team"><i class="icon-link"></i></a>-->
                        </div>
                        <div class="our-cause-detail">
                            <h3>Team 2</h3>
                            <span>Captain: <a title="" href="#"></a></span>
                            <p>This team is ....</p>
                            <i>Funds Raised: <span>KES</span> <strong>20,000</strong></i>
<!--                            <a title="" href="--><?php //echo base_url();?><!--site/relay/join_team">Join this Team</a>-->
                        </div>
                    </div>
                </div>


                <div class="col-md-4">
                    <div class="our-cause">
                        <div class="our-cause-img">
                            <img alt="" src="images/causes-new1.jpg">
                            <a title="" href="<?php echo base_url();?>site/relay/join_team"><i class="icon-link"></i></a>
                        </div>
                        <div class="our-cause-detail">
                            <h3>Team 3</h3>
                            <span>Captain: <a title="" href="#"></a></span>
                            <p>This team is ....</p>
                            <i>Funds Raised: <span>KES</span> <strong>20,000</strong></i>
<!--                            <a title="" href="--><?php //echo base_url();?><!--site/relay/join_team">Join this Team</a>-->
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="our-cause">
                        <div class="our-cause-img">
                            <img alt="" src="images/causes-new1.jpg">
                            <a title="" href="<?php echo base_url();?>site/relay/join_team"><i class="icon-link"></i></a>
                        </div>
                        <div class="our-cause-detail">
                            <h3>Team 4</h3>
                            <span>Captain: <a title="" href="#"></a></span>
                            <p>This team is ....</p>
                            <i>Funds Raised: <span>KES</span> <strong>20,000</strong></i>
<!--                            <a title="" href="--><?php //echo base_url();?><!--site/relay/join_team">Join this Team</a>-->
                        </div>
                    </div>
                </div>


                <div class="col-md-4">
                    <div class="our-cause">
                        <div class="our-cause-img">
                            <img alt="" src="images/causes-new1.jpg">
                            <a title="" href="<?php echo base_url();?>site/relay/join_team"><i class="icon-link"></i></a>
                        </div>
                        <div class="our-cause-detail">
                            <h3>Team 5</h3>
                            <span>Captain: <a title="" href="#"></a></span>
                            <p>This team is ....</p>
                            <i>Funds Raised: <span>KES</span> <strong>20,000</strong></i>
<!--                            <a title="" href="--><?php //echo base_url();?><!--site/relay/join_team">Join this Team</a>-->
                        </div>
                    </div>
                </div>


                <div class="col-md-4">
                    <div class="our-cause">
                        <div class="our-cause-img">
                            <img alt="" src="images/causes-new1.jpg">
                            <a title="" href="<?php echo base_url();?>site/relay/join_team"><i class="icon-link"></i></a>
                        </div>
                        <div class="our-cause-detail">
                            <h3>Team 6</h3>
                            <span>Captain: <a title="" href="#"></a></span>
                            <p>This team is ....</p>
                            <i>Funds Raised: <span>KES</span> <strong>20,000</strong></i>
<!--                            <a title="" href="--><?php //echo base_url();?><!--site/relay/join_team">Join this Team</a>-->
                        </div>
                    </div>
                </div>
                </section>
            </div>
        </div>

        <div class="pagination-area">
            <ul class="pagination">
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
            </ul>

            <div class="pagination-buttons">
                <a title="" href="#"><i class="icon-angle-left"></i></a>
                <a title="" href="#"><i class="icon-angle-right"></i></a>
            </div>


        </div><!--Pagination-->

    </div>

</section>
