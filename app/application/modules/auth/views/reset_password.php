
<section class="inner-page">
    <div class="container">
        <div class="row">
            <div class="left-content col-md-6">
                <div id="main">
                    <div class="main-container fixer-container login_form" id="login">
                        <h2 style="color: #2b0171;text-align:left">
                            <img src="<?php echo base_url();?>assets/images/mini-logo.png"/>
                            <?php echo lang('reset_password_heading');?></h2>
                        <hr/>

<div id="infoMessage"><?php echo $message;?></div>

<?php echo form_open('auth/reset_password/' . $code);?>

	<p>
		<label for="new_password"><?php echo sprintf(lang('reset_password_new_password_label'), $min_password_length);?></label> <br />
		<?php echo form_input($new_password);?>
	</p>

	<p>
		<?php echo lang('reset_password_new_password_confirm_label', 'new_password_confirm');?> <br />
		<?php echo form_input($new_password_confirm);?>
	</p>

	<?php echo form_input($user_id);?>
	<?php echo form_hidden($csrf); ?>

	<p><?php echo form_submit('submit', lang('reset_password_submit_btn'));?></p>

<?php echo form_close();?>

</div>
</div>
</div>
</div>
</div>
</section>