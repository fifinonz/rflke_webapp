<section class="inner-page" xmlns="http://www.w3.org/1999/html">
    <div class="container">
        <div class="row">
            <div class="left-content col-md-6">

<div id="main">
    <div class="main-container fixer-container login_form" id="login">

        <h2 style="color: #2b0171;text-align:left">
            <img src="<?php echo base_url();?>assets/images/mini-logo.png"/>
            CREATE A RELAY ACCOUNT</h2>
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
        </div>
    </div>
</section>