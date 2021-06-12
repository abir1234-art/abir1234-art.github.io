<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Récupérer mot de passe </title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.css" rel="stylesheet" type="text/css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        button.btn{
         text:20px;
         font-weight: bold;
         border-radius:13px;
         top:150px;


        }
        
    .container{
         margin-top:50px;
         repeat: no-repeat;
         margin-bottom:32px;
         padding:16px;
         
         margin-right: 450px;
         margin-left: 500px;
         margin:auto;
         width:550px;
         height:500px;
         max-width: 90%;
         
    }
    .container form{
      #text-align:center;
      margin-bottom:24px;
      color:#222;

    }
    .container form .form-control{
      width:100%;
      height:40px;
      background:white;
      border-radius:4px;
      border:1px solid silver;
      margin-top: 15px;
      margin-bottom: 15px;


    }
  
    .btn{
        
     }
    .form-control{
         margin-top: 15px;
         margin-bottom: 15px;
    }



    .container form{
          width:500px;
          height:320px;
          padding:20px;
          background:white;
          border-radius:4px;
          box-shadow: 0 8px 16px rgba(0,0,0,.3);
          background-color:#eee;
          background: rgba(243,156,18 ,0.8);
    }
    .container h1{
        margin-top: 15px;
         margin-bottom: 15px;
    }
    h1{
        color:white;
    }
    footer{
      
      top: 100%;
      position:absolute;
      width:100%;
         
      height:50px;
     
    }
  

 
    
        </style>
  </head>

  <body background="https://images.unsplash.com/photo-1557683304-673a23048d34?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1443&q=80.jpg">


 

    <div class="col-lg-4 col-lg-offset-6" style="position: absolute; left: 30% ; top: 20%;">
    


    <div class="container">
    <div alignment="CENTER">

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php if(isset($_SESSION['success'])){?>

    <div class="alert alert-success"><?php echo $_SESSION['success']?></div>

  <?php } ?>

   
   <?php echo validation_errors('<div class="alert alert-danger">', '</div>'); ?></div>
    
    <form action="" method="POST">
    
    <h1 style="text-align:center" style="color:white">Mot de passe oublier</h1>
    <div class="form-group"><br/>
          <label for="email"style="color:white" >Entrez votre Email:</label>
         <input class="form-control" type="email" name="email" id="email" placeholder="Entrer votre email">
        </div>
        <br />
       

    <div class="text-center">
         
          <button class="btn btn-primary" name="mpo" >Envoyer</button>
    </div>
     </div>
    </form>

 
     </div>
     <footer class="bg-light text-center text-lg-start">
     <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2020 Copyright:
      <a class="text-dark" href="https://mdbootstrap.com/">MDBootstrap.com</a>
     </div>
     <!-- Copyright -->
     </footer>
    


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url();?>assets/js/bootstrap.bundle.js"></script>
    

  </body>
</html>