<!DOCTYPE html>
<html>
<head>
    <meta name = "viewport" content = "width = device-width, initial-scale = 1.0">
    <title> Démonstration du formulaire d'inscription utilisateur CodeIgniter </title>
    <link href = "<?php echo base_url(" bootstrap / css / bootstrap.css ");?>" rel = "stylesheet" type = "text / css" />
</head>
<body>
<div class = "container">
<div class = "row">
    <div class = "col-md-6 col-md-offset-3">
        <?php echo $this->session->flashdata('verify_msg'); ?>
    </div>
</div>

<div class = "row">
    <div class = "col-md-6 col-md-offset-3">
        <div class = "panel panel-default">
            <div class = "panneau-tête">
                <h4> Formulaire d'inscription de l'utilisateur </h4>
            </div>
            <div class = "panel-body">
                <?php $attributes=array("name" => "registrationform");
                echo form_open("user1/registre",$attributes);?>
                <div class = "form-group">
                    <label for = "name"> Prénom </label>
                    <input class = "form-control" name = "fname" placeholder = "Votre prénom" type = "text" value = "<?php echo set_value('fname');?>" />
                    <span class = "text-danger"> <?php echo form_error('fname'); ?> </span>
                </div>

                <div class = "form-group">
                    <label for = "name"> Nom de famille </label>
                    <input class = "form-control" name = "lname" placeholder = "Last Name" type = "text" value = "<?php echo set_value('lname');?>" />
                    <span class = "text-danger"> <?php echo form_error('lname'); ?> </span>
                </div>
                
                <div class = "form-group">
                    <label for = "email"> ID e-mail </label>
                    <input class = "form-control" name = "email" placeholder = "Email-ID" type = "text" value = "<?php echo set_value('email');?>" />
                    <span class = "text-danger"> <?php echo form_error('email'); ?> </span>
                </div>

                <div class = "form-group">
                    <label for = "subject"> Mot de passe </label>
                    <input class = "form-control" name = "password" placeholder = "Password" type = "password" />
                    <span class = "text-danger"> <?php echo form_error('password'); ?> </span>
                </div>

                <div class = "form-group">
                    <label for = "subject"> Confirmer le mot de passe </label>
                    <input class = "form-control" name = "cpassword" placeholder = "Confirm Password" type = "password" />
                    <span class = "text-danger"> <?php echo form_error('cpassword'); ?> </span>
                </div>

                <div class = "form-group">
                    <button name = "submit" type = "submit" class = "btn btn-default"> Inscription </button>
                    <button name = "cancel" type = "reset" class = "btn btn-default"> Annuler </button>
                </div>
                <?php echo form_close(); ?>
                <?php echo $this->session->flashdata('msg'); ?>
            </div>
        </div>
    </div>
</div>
</div>
</body>
</html>