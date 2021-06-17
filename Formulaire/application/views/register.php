<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Page d'inscription</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url ();?>assets/css/boot/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
      
    div.form-input { 
    margin : 10px auto;
    position : relative;
    display : flex;
    align-items : center;
    justify-content : center;
    }

    input.form-control{
        padding:5px 10px 5px 30px;
    }


.container form{
  padding:20px;
  background:white;
  border-radius:4px;
  box-shadow: 0 8px 16px rgba(0,0,0,.3);
  background: rgba(220,220,220,0.2);
  height:620px;
  
  
  
  
}

    </style>
  </head>
  <body background="">


    
  
  <div class="container" >
  <div   class="col-lg-4 col-lg-offset-2" style="color:black;position: absolute; left: 17%;top: 3%">
    
    

       <center><h1 style="color:#33A5FF">Inscription</h1></center>

       </br>

       <?php if(isset($_SESSION['success'])){?>

        <div class="alert alert-success"><?php echo $_SESSION['success']?></div>

      <?php } ?>


       <?php echo validation_errors('<div class="alert alert-danger">', '</div>'); ?>

       <form action="" method="POST">
        
       <div class="form-group">
        <label  for="username">Nom d'utilisateur:</label>
         <div class = "form-input" > 
         <span class = "icon"><i class = "fa fa-envelope" aria-hidden = "true" > </i> </span >  
         <input class="form-control" name="username" id="username" type="text" placeholder="Entrer nom d'utilisateur">
        </div>
        </div>
        <div class="form-group">
    <label  for="email" >Email:</label>
    <div class = "form-input" >
     <span class = "icon"><i class = "fa fa-envelope" aria-hidden = "true" > </i> </span >  
    <input class="form-control" name="email" id="email" type="email" placeholder="Entrer votre email">
    </div>
    </div>
    <div class="form-group">
    <label  for="password" >Mot de passe:</label>
    <div class = "form-input" > 
     <span class = "icon"><i class = "fa fa-lock" aria-hidden = "true" > </i> </span>
    <input class="form-control" name="password" id="password" type="password" placeholder="Entrer votre Mot de passe">
    </div>
    </div>

    <div class="form-group">
    <label  for="password" >Confirmé Mot de passe:</label>
    <div class = "form-input" > 
     <span class = "icon"><i class = "fa fa-lock" aria-hidden = "true" > </i> </span>
    <input class="form-control" name="password2" id="password2" type="password" placeholder="Confirmé votre mot de passe">
    </div>
    </div>
    <div class="form-group">
    <label  for="gender" >Genre:</label>
    <select class="form-control" id="gender" name="gender" type="text">
    <option value="Male">Homme</option>
    <option value="Female">Femme</option>
    </select>
    <br/>
    <div class="form-group">
    <label  for="phone" >Téléphone:</label>
    <input class="form-control" name="phone" id="phone" type="number" placeholder="Entrer votre numéro téléphone">
    </div>
    </br>
    <br />
      
        <div >
          <button class="btn btn-primary" name="register" style="position: absolute; left:25%;top:90%;width: 100px;">s'inscrire</button>
          <a href="<?php echo base_url('auto/login')?>" class="btn btn-primary" style="position: absolute; left: 55%;top:90%;width: 100px;">Connexion</a>
        </div>
       </br>
        


        </form>

    </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url ();?>assets/css/bootstrap.min.js"></script>
  </body>
</html>