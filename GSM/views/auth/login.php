
  
<div style="width: 320px; margin: 0 auto;">

<h3><?php echo lang('login_heading');?></h3>
<p><?php echo lang('login_subheading');?></p>
<?php if ($message!=''): ?>
<div class="alert alert-danger"><?php echo $message;?></div>
<?php endif; ?>

<?php $attributes = array('class' => 'well');?>
<?php echo form_open("auth/login",$attributes);?>



    <label><?php echo lang('login_identity_label', 'identity');?></label>
    <?php echo form_input($identity);?>


    <label><?php echo lang('login_password_label', 'password');?></label>
    <?php echo form_input($password);?>


  <p>
    <?php echo lang('login_remember_label', 'remember');?>
    <?php echo form_checkbox('remember', '1', FALSE, 'id="remember"');?>
  </p>


  <p><button type="submit" class="btn btn-primary">Connexion</button></p>

<?php echo form_close();?>

<p><a href="forgot_password"><?php echo lang('login_forgot_password');?></a></p>
</div>