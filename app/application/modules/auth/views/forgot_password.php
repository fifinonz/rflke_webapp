<div id="main">


    <div class="main-container fixer-container login_form" id="login">

        <h2 style="color: #2b0171;text-align: center">USER LOGIN</h2>
        <hr/>

        <p style="color: #800080"><?php echo sprintf(lang('forgot_password_subheading'), $identity_label);?></p>

<div style="color: #800080" id="infoMessage"><?php echo $message;?></div>

<?php echo form_open("auth/forgot_password");?>

      <p>
      	<label for="email"><?php echo sprintf(lang('forgot_password_email_label'), $identity_label);?></label> <br />
      	<?php echo form_input($email);?>
      </p>

      <p><?php echo form_submit('submit', lang('forgot_password_submit_btn'));?></p>

<?php echo form_close();?>

        </div>