<?php session_start();?>
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
    <div id="layerslider" style="width: 100%; height: 450px; margin: 0px auto; ">
        <div class="ls-slide" data-ls="transition3d:53; timeshift:-1000;">
            <img src="http://images.webinane.com/ll/slider1.jpg" class="ls-bg" alt="Slide background">
        </div><!-- Slide1 -->
        <div class="ls-slide" data-ls="transition3d:53; timeshift:-1000;">
            <img src="http://images.webinane.com/ll/slider1.jpg" class="ls-bg" alt="Slide background">
        </div><!-- Slide1 -->
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
                        </span>To join a team you must be logged in. Click here to Log in.</a>
                </div>
                <div class="accordion_content" style="display: block;">
                    <div class="login">
                        <p style="font-size: 16px;">Please log in below.</p>
                        <div class="row">
                            <div class="col-md-6 co-form half-field">
                                <label>Username or email <span>*</span></label>
                                <input type="text" class="form-control input-field">
                            </div>
                            <div class="col-md-6 co-form half-field">
                                <label>Password<span>*</span></label>
                                <input type="password" class="form-control input-field">
                            </div>
                        </div>
                        <input type="submit" class="cart-btn pull-left" value="Login">
                    </div>
                </div>
                <div class="accordion_toggle"><a href="#">
                        <span><i class="icon-info-sign"></i>
                        </span>Don't have a Relay account? Click here to Sign up!</a>
                </div>
                <div class="accordion_content" style="display: block;">
                    <div class="login">
                        <p style="font-size: 16px;">
                            Please Create an account with us...it is absolutely free! Having an account will allow you to join a team or start a new team!</p>
                        <br/>
                        <div class="row">
                            <div class="col-md-6 co-form half-field">
                                <a class="header-btn" href="register.html" title="">SIGN UP NOW</a>
                            </div>
                        </div>
                    </div>
                </div>
                <section class="block">
                <div class="col-md-4">
                    <div class="our-cause">
                        <div class="our-cause-img">
                            <img alt="" src="images/causes-new1.jpg">
                            <a title="" href="<?php echo base_url();?>site/relay/join_team"><i class="icon-link"></i></a>
                        </div>
                        <div class="our-cause-detail">
                            <h3>Team 1</h3>
                            <span>Captain: <a title="" href="#"></a></span>
                            <p>This team is ....</p>
                            <i>Funds Raised: <span>KES</span> <strong>20,000</strong></i>
                            <a title="" href="<?php echo base_url();?>site/relay/join_team">Join this Team</a>
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
                            <h3>Team 2</h3>
                            <span>Captain: <a title="" href="#"></a></span>
                            <p>This team is ....</p>
                            <i>Funds Raised: <span>KES</span> <strong>20,000</strong></i>
                            <a title="" href="<?php echo base_url();?>site/relay/join_team">Join this Team</a>
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
                            <a title="" href="<?php echo base_url();?>site/relay/join_team">Join this Team</a>
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
                            <a title="" href="<?php echo base_url();?>site/relay/join_team">Join this Team</a>
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
                            <a title="" href="<?php echo base_url();?>site/relay/join_team">Join this Team</a>
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
                            <a title="" href="<?php echo base_url();?>site/relay/join_team">Join this Team</a>
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

