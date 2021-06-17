<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Récupérer mot de passe </title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url ();?>assets/css/boot/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body background="">

      <nav class="navbar navbar-inverse">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="#" class="navbar-brand">LJT</a>
        </div>
        <!-- Collection of nav links, forms, and other content for toggling -->
        <div id="navbarCollapse" class="collapse navbar-collapse">
            
            <ul class="nav navbar-nav navbar-right">
                <li><a href="<?php echo site_url('authentification/Login'); ?>">Connexion</a></li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li><a href="<?php echo site_url('authentification/signup'); ?>">Créer un compte</a></li>
            </ul>
        </div>
    </nav>

    <div class="col-lg-4 col-lg-offset-2" style="position: absolute; left: 17% ; top: 20%;color: black;background-color: none">

     <?php if(isset($_SESSION['success'])){?>

        <div class="alert alert-success"><?php echo $_SESSION['success']?></div>

      <?php } ?>


      <?php if(isset($_SESSION['error'])){?>

        <div class="alert alert-danger"><?php echo $_SESSION['error']?></div>
        <?php } ?>

         <?php echo validation_errors('<div class="alert alert-danger">', '</div>'); ?>
       


    <form action="" method="POST" style="">

      <div class="form-group">
          <label for="email" >Email :</label>
          <input class="form-control" type="email" name="email" id="email" placeholder="Entrer votre email"><br/>
          
        </div>
        <div class="form-group">
          <label for="password" >Nouveau mot de passe :</label>
          <input class="form-control" type="password" name="password" id="password" placeholder="Entrer nouveau mot de passe"><br />
         
        </div>

        <div class="form-group">
          <label for="password2" >Confirmez mot de passe :</label>
          <input class="form-control" type="password" name="password2" id="password2" placeholder="confirmez votre mot de passe"><br />
          
        </div>


    <div class="text-center">
         
          <button class="btn btn-primary" name="mpor" >Récuprérer mot de passe</button>
    </div>
    </form>

   </div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url ();?>assets/css/bootstrap.min.js"></script>
  </body>
</html>