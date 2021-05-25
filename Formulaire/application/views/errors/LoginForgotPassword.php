<?php echo validation_errors(); ?>
<?php echo form_open('Login2/forgotPassword'); ?>

veuillez saisir votre login(email) : </br>

<label for="login"> Login :</label>
<input type="text" name="login" value="<?php echo $this->input->post('login'); ?>" id="login"/></br>
<button type="submit"> valider</button>
<?php echo form_close(); ?>