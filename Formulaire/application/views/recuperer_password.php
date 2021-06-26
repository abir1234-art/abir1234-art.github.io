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


    <div class="col-lg-4 col-lg-offset-2" style="position: absolute; left: 17% ; top: 20%;color: black">

     <?php if(isset($_SESSION['success'])){?>

        <div class="alert alert-success"><?php echo $_SESSION['success']?></div>

      <?php } ?>


       <?php echo validation_errors('<div class="alert alert-danger">', '</div>'); ?>



    <h1 align="center" style="">Entrez votre Email</h1>

    <form action="" method="POST">

    <div class="form-group"><br/>
          <label for="email"style="color:white" >Entrez votre Email:</label>
         <input class="form-control" type="email" name="email" id="email" placeholder="Entrer votre email">
        </div>
        <br />

    <div class="text-center">
         
          <button class="btn btn-primary" name="mpo" >Récuprérer mot de passe</button>
    </div>
    </form>

   </div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url ();?>assets/css/bootstrap.min.js"></script>
  </body>
</html>