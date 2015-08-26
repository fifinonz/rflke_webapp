
<div  class="accordion_toggle"><a style="font-size: 20px;" href="#">
                        <span><i style="color: #2b0171"class="icon-info-sign"></i>
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
<div class="accordion_toggle"><a style="font-size: 20px;" href="#">
                        <span>
                            <i style="color: #2b0171"class="icon-info-sign"></i>
                        </span>Already have an account?  <strong style="color:#800080;text-decoration: underline">Click here to Log in!</strong></a>
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