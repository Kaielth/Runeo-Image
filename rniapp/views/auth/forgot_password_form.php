<div class="container">
<div class="row">
<div class="col-md-3">
<?php
$login = array(
	'name'	=> 'login',
	'id'	=> 'login',
	'value' => set_value('login'),
	'maxlength'	=> 80,
	'size'	=> 30,
);
if ($this->config->item('use_username', 'tank_auth')) {
	$login_label = 'Correo o cuenta:';
} else {
	$login_label = 'Correo';
}
?>
<?php 
$attr_role = array('role' => 'form'); 
$login['class'] = "form-control";
?>
<?php echo form_open($this->uri->uri_string(), $attr_role); ?>
<?php echo form_label($login_label, $login['id']); ?>
<?php echo form_input($login); ?>
<div style="color: red;"><?php echo form_error($login['name']); ?><?php echo isset($errors[$login['name']])?$errors[$login['name']]:''; ?></div>
<?php echo form_submit('reset', 'Conseguir nueva contraseña', 'class="btn btn-primary btn-block"'); ?>
<?php echo form_close(); ?>
</div>
</div>
</div>