<div class="container">
<div class="row">
<div class="col-md-3">
<?php
if ($use_username) {
	$username = array(
		'name'	=> 'username',
		'id'	=> 'username',
		'value' => set_value('username'),
		'maxlength'	=> $this->config->item('username_max_length', 'tank_auth'),
		'size'	=> 30,
	);
}
$email = array(
	'name'	=> 'email',
	'id'	=> 'email',
	'value'	=> set_value('email'),
	'maxlength'	=> 80,
	'size'	=> 30,
);
$password = array(
	'name'	=> 'password',
	'id'	=> 'password',
	'value' => set_value('password'),
	'maxlength'	=> $this->config->item('password_max_length', 'tank_auth'),
	'size'	=> 30,
);
$confirm_password = array(
	'name'	=> 'confirm_password',
	'id'	=> 'confirm_password',
	'value' => set_value('confirm_password'),
	'maxlength'	=> $this->config->item('password_max_length', 'tank_auth'),
	'size'	=> 30,
);
$captcha = array(
	'name'	=> 'captcha',
	'id'	=> 'captcha',
	'maxlength'	=> 8,
);
?>
<?php
$attr_role = array('role' => 'form');
$username['class'] = "form-control";
$attr_username = array('class' => 'col-sm-2 control-label');
$email['class'] = "form-control";
$attr_email = array('class' => 'col-sm-2 control-label');
$login['class'] = "form-control";
$attr_login = array('class' => 'col-sm-2 control-label');
$password['class'] = "form-control";
$attr_password = array('class' => 'col-sm-2 control-label');
$confirm_password['class'] = "form-control";
$attr_confirm_password = array('class' => 'col-sm-2 control-label');
$captcha['class'] = "form-control";
$attr_codigo_confirmacion = array('class' => 'col-sm-2 control-label');
?>
<?php echo form_open($this->uri->uri_string(), $attr_role); ?>

<div class="form-group">
	<?php if ($use_username) : ?>	
		<?php echo form_label('Nombre de usuario', $username['id']); ?>
		<div class="col-sm-10">
			<?php echo form_input($username); ?>
		</div>
		<div style="color: red;"><?php echo form_error($username['name']); ?><?php echo isset($errors[$username['name']])?$errors[$username['name']]:''; ?></div>
	<?php endif ?>
</div>
<div class="form-group">
		<?php echo form_label('Correo', $email['id']); ?>
		<div class="col-sm-10">
			<?php echo form_input($email); ?>
		</div>
		<div style="color: red;"><?php echo form_error($email['name']); ?><?php echo isset($errors[$email['name']])?$errors[$email['name']]:''; ?></div>
</div>
<div class="form-group">
		<?php echo form_label('Password', $password['id']); ?>
		<div class="col-sm-10">
			<?php echo form_password($password); ?>
		</div>
		<div style="color: red;"><?php echo form_error($password['name']); ?></div>
</div>
<div class="form-group">
		<?php echo form_label('Repetir password', $confirm_password['id']); ?>
		<div class="col-sm-10">
			<?php echo form_password($confirm_password); ?>
		</div>
		<div style="color: red;"><?php echo form_error($confirm_password['name']); ?></div>
</div>
<br>
<div class="breadcrumb">
	<?php if ($captcha_registration) {
		if ($use_recaptcha) { ?>
	<tr>
		<td colspan="2">
			<div id="recaptcha_image"></div>
		</td>
		<td>
			<a href="javascript:Recaptcha.reload()">Get another CAPTCHA</a>
			<div class="recaptcha_only_if_image"><a href="javascript:Recaptcha.switch_type('audio')">Get an audio CAPTCHA</a></div>
			<div class="recaptcha_only_if_audio"><a href="javascript:Recaptcha.switch_type('image')">Get an image CAPTCHA</a></div>
		</td>
	</tr>
	<tr>
		<td>
			<div class="recaptcha_only_if_image">Escribe las letras que ves</div>
			<div class="recaptcha_only_if_audio">Escribe las letras que escuchas</div>
		</td>
		<td><input type="text" id="recaptcha_response_field" name="recaptcha_response_field" /></td>
		<td style="color: red;"><?php echo form_error('recaptcha_response_field'); ?></td>
		<?php echo $recaptcha_html; ?>
	</tr>
	<?php } else { ?>
	<tr>
		<td colspan="3">
			<p>Escribe el código como aparece:</p>
			<?php echo $captcha_html; ?>
		</td>
	</tr>
	<br>
</div>
<div class="form-group">
		<?php echo form_label('Código de confirmación', $captcha['id']); ?>
		<div class="col-sm-10">
			<?php echo form_input($captcha); ?>
		</div>
		<br>
		<div style="color: red;"><?php echo form_error($captcha['name']); ?></div>
	<?php }
	} ?>
</div>
<?php echo form_submit('register', 'Registrar', 'class="btn btn-primary btn-block"'); ?>
<?php echo form_close(); ?>
<a href="<?php echo base_url(); ?>entrar/">¿Ya tienes cuenta?</a>
</div>
</div>
</div>