<section class="inner-page" xmlns="http://www.w3.org/1999/html">
    <div class="container">
        <div class="row">
            <div class="left-content col-md-6">
<div id="main">
    <div class="main-container fixer-container login_form" id="login">

        <h2 style="color: #2b0171;text-align:left">
            <img src="<?php echo base_url();?>assets/images/mini-logo.png"/>
            USER LOGIN</h2>
        <hr/>
<p style="color: #800080"><?php echo lang('create_group_subheading');?></p>

<div id="infoMessage"><?php echo $message;?></div>

<?php echo form_open("auth/create_group");?>

      <p>
            <?php echo lang('create_group_name_label', 'group_name');?> <br />
            <?php echo form_input($group_name);?>
      </p>

      <p>
            <?php echo lang('create_group_desc_label', 'description');?> <br />
            <?php echo form_input($description);?>
      </p>

      <p><?php echo form_submit('submit', lang('create_group_submit_btn'));?></p>

<?php echo form_close();?>
                     </div>
                    </div>
                 </div>
                </div>
            </div>
        </section>