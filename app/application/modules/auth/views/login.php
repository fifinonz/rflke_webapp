
<section class="inner-page">
    <div class="container">
        <div class="row">
            <div class="left-content col-md-6">
              <div id="main">
                <div class="main-container fixer-container login_form" id="login">
                 <h2 style="color: #2b0171;text-align:left">
                    <img src="<?php echo base_url();?>assets/images/mini-logo.png"/>
                    USER LOGIN</h2>
                  <hr/>

                 <div style="color: #800080" id="infoMessage"><?php echo $message;?></div>

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

<p><strong><a style="font-size: 16px" href="forgot_password"><?php echo lang('login_forgot_password');?></a></strong></p>
<p><strong><a style="font-size: 16px" href="create_user"><?php echo lang('create_an_account');?></a></strong></p>

                  </div>
                 </div>
                </div>
            </div>
        </div>
</section>