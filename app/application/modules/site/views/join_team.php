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
        <h2 style="color: #2b0171;text-align: center">Team Registration</h2>
        <hr/>
        <?php
        echo "<div class='error_msg'>";
        echo validation_errors();
        echo "</div>";
        echo form_open('relay/new_team_registration');

        echo form_label('Team Name  *');
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
        echo form_label('Tshirt size:  *');
        echo"<br/>";
        $options = array(
            'small'         => 'Small Shirt',
            'med'           => 'Medium Shirt',
            'large'         => 'Large Shirt',
            'xlarge'        => 'Extra Large Shirt',
        );
        echo form_dropdown('tshirts', $options, 'large');
        echo"<br/>";
        echo"<br/>";
        echo form_label('Participate As:  *');
        echo"<br/>";
        $options = array(
            'surv'         => 'I am Survivor',
            'cargv'           => 'I am a Caregiver',
            'reg'         => 'I dare to care',
        );
        echo form_dropdown('participant type', $options, 'surv');
        echo"<br/>";
        echo"<br/>";
        echo "<h4><strong>Team Registration is Ksh.1200</strong><span> To make your payment:</span></h4>

                            <br/>
                            <p>1. Go to MPESA Menu</p>
                            <p>2. Select <span>Lipa na MPESA</span> then choose PayBill</p>
                            <p>3. Enter Business number <span>288773</span></p>
                            <p>4. Enter your team name as account number.</p>
                            <p>5. Enter Amount to send, MPESA pin and confirm transaction</p>
                            <p>5. Please enter the <span>MPESA Transaction Confirmation code you receive below</span></p>



                ";
        echo"<br/>";
        echo"<br/>";
        echo form_label('MPESA Confirmation Code:  *');
        echo form_input('mpesa');
        echo"<br/>";
        echo"<br/>";
        echo form_submit('submit', 'Join Team');
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
