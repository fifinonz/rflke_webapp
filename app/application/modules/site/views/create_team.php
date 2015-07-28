<div id="layerslider-container-fw">
    <div id="layerslider" style="width: 100%; height: 450px; margin: 0px auto; ">
        <div class="ls-slide" data-ls="transition3d:53; timeshift:-1000;">
            <img src="http://images.webinane.com/ll/slider1.jpg" class="ls-bg" alt="Slide background">
        </div><!-- Slide1 -->
        <div class="ls-slide" data-ls="transition3d:53; timeshift:-1000;">
            <img src="http://images.webinane.com/ll/slider1.jpg" class="ls-bg" alt="Slide background">
        </div><!-- Slide2 -->
    </div>
</div><!-- Layer Slider -->


<div class="inner-page">
    <div class="container">

        <div class="page-title">
            <h1>TEAMS RELAY <span>2015</span></h1>
        </div>
          <div class="row">
           <div class="left-content col-md-9">
            <div class="accordions">
             <section class="block">
              <div class="billing">
                  <div id="main">
                      <div class="main-container fixer-container login_form" id="login">
               <h2 style="color: #2b0171;text-align: left">
         Create A New Team</h2><br/>
        <?php
        echo "<div class='error_msg'>";
        echo validation_errors();
        echo "</div>";
        echo form_open('site/relay/create_new_team');

        echo form_label('Enter Team Name  *');
        echo"<br/>";
        echo form_input('team_name');
        echo "<div class='error_msg'>";
        if (isset($message_display)) {
            echo "<div class='message'>";
            echo $message_display;
            echo "</div>";
        }
        echo "</div><br/>";
        echo"<br/>";
       echo form_checkbox('team_captain','I am team captain',TRUE);
        echo"<br/>";
        echo"<br/>";
        echo form_submit('submit', 'Create Team');
        echo form_close();
        ?>
                          </div>
                      </div>
                    </div>
                </section>
                 </div>
            </div>
          </div>
        </div>
    </div>
