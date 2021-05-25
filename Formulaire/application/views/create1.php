<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
   
    <!-- Bootstrap CSS -->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel = "stylesheet" href = "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" >

    <title>Register Page</title>
    <style type="text/css">
    </style>
</head>
<body>
<nav class="navbar navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Godenoghter Crud application</font></font></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Basculer la navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    </div>
    </nav>
     

    <div class="container" style="margin-top:20px";>
    
        <form action="<?php echo base_url().'users_control/create';?>" method="POST">
           <h1>Nouveau Client</h1>
        
        <div class="row">
            <div class="col-lg-6">

                <div class="form-group">
                    <label for="nom">Nom :</label>
                    <input type="text" name="nom" value="<?php echo set_value('nom');?>" class="form-control" placeholder="Enter Nom"> 
                    <?php echo form_error('nom');?>
                </div>
            </div>
        </div>
            
        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="prenom">Prenom:</label>
                    <input type="text" name="prenom" value="<?php echo set_value('prenom');?>" class="form-control" placeholder="Enter Prenom"> 
                    <?php echo form_error('prenom');?>
                </div>

                
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="mail">Mail :</label>
                    <input type="email" name="mail" value="<?php echo set_value('mail');?>" class="form-control" placeholder="Enter mail"> 
                    <?php echo form_error('mail');?>
                </div>

               
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="telephone">Téléphone :</label>
                    <input type="number" name="telephone" value="<?php echo set_value('telephone');?>" class="form-control" placeholder="Enter telephone"> 
                    <?php echo form_error('telephone');?>
                </div>

                
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="adresse">Adresse :</label>
                    <input type="text" name="adresse" value="<?php echo set_value('adresse');?>" class="form-control" placeholder="Enter Adresse"> 
                    <?php echo form_error('adresse');?>
                </div>

                
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="ville">Ville :</label>
                    <input type="text" name="ville" value="<?php echo set_value('adresse');?>" class="form-control" placeholder="Enter ville"> 
                    <?php echo form_error('ville');?>
                </div>

                
            </div>
        </div>
        <br />
        <div class="form-group">
            <button class="btn btn-primary" style="width:100px">Create</button>&ensp;&ensp;&ensp;&ensp;
            <a href="<?php echo base_url().'users_control/index';?>" class="btn-secondary btn" style="width:100px">Annuler &ensp;&ensp;</a>
        </div>

           
        </form>
        </div>

</body>
</html>




