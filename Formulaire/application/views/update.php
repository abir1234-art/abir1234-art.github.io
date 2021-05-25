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
        <h1> Admin Form </h1>
        <?php echo form_open("home_crud/update1\{$record->id}");?>
        <div class="row">
            <div class="col-lg-6">

                <div class="form-group">
                    <label for="Nom">Nom</label>
                    <?php echo form_input(['class'=>'form-control', 'placeholder'=>'Enter nom','name'=>'nom','value'=>set_value('nom',$record->nom)]);?>
                </div>
            </div>

            <div class="col-lg-6">
                <?php echo form_error('nom');?>
            </div>  
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="Prenom">Prenom</label>
                    <?php echo form_input(['class'=>'form-control', 'placeholder'=>'Enter Prenom','name'=>'prenom','value'=>set_value('prenom',$record->prenom)]);?>
                </div>

                <div class="col-lg-6">
                    <?php echo form_error('prenom');?>
                </div>  
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="Mail">Mail</label>
                    <?php echo form_input(['class'=>'form-control','type'=>'mail', 
                    'placeholder'=>'Enter mail', 'name'=>'mail','value'=>set_value('mail',$record->mail)
                    ]);?>
                </div>

                <div class="col-lg-6">
                    <?php echo form_error('mail');?>
                </div>  
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="Téléphone">Téléphone</label>
                    <?php echo form_input(['class'=>'form-control','type'=>'telephone', 
                    'placeholder'=>'Enter telephone', 'name'=>'telephone','value'=>set_value('telephone',$record->telephone)
                    ]);?>
                </div>

                <div class="col-lg-6">
                    <?php echo form_error('telephone');?>
                </div>  
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="Adresse">Adresse</label>
                    <?php echo form_input(['class'=>'form-control','type'=>'adresse', 
                    'placeholder'=>'Enter Adresse', 'name'=>'adresse','value'=>set_value('adresse',$record->adresse)
                    ]);?>
                </div>

                <div class="col-lg-6">
                    <?php echo form_error('adresse');?>
                </div>  
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="Ville">Ville</label>
                    <?php echo form_input(['class'=>'form-control','type'=>'ville', 
                    'placeholder'=>'Enter ville', 'name'=>'ville','value'=>set_value('ville',$record->ville)
                    ]);?>
                </div>

                <div class="col-lg-6">
                    <?php echo form_error('ville');?>
                </div>  
            </div>
        </div>


            <?php echo form_submit(['type'=>'submit', 'class'=>'btn btn-primary','value'=>'Submit']); ?>
            <?php echo form_reset(['type'=>'submit', 'class'=>'btn btn-default','value'=>'Reset']); ?>
        </div>

</body>
</html>




