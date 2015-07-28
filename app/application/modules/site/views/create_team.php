<html>
<?php
if (isset($this->session->userdata['logged_in'])) {
    header("location: http://localhost/login/index.php/relay/user_login_process");
}
?>
<head>
    <title>Create New Team</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css">
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro|Open+Sans+Condensed:300|Raleway' rel='stylesheet' type='text/css'>
</head>
<body>
<div id="main">
    <div class="main-container fixer-container login_form" id="login">
        <h2 style="color: #2b0171;text-align: center">Create A New Team</h2>
        <hr/>
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
</body>
</html>