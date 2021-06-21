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
    <link href="<?php echo base_url ();?>assets/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

    <![endif]-->
    
  
    <title>Hello, world!</title>
    <style>
    
span.icon { 
    position : absolute;
    left : 10px ;
    top : 0 ;
    font-size: 16px ;
    color : #3366ff ;
    height : 100% ;
    display : flex;
    align-items : center;
    justify-content : center;
}



    </style>
  
  </head>
  <body>
 


   <br />

  <div class="col-lg-4 col-lg-offset-2" style="color:black;position: absolute; left: 17%;top: 10%;">
  <?php if(isset($_SESSION['error'])){?>
<div class="alert alert-danger"><?php echo $_SESSION['error']?></div>
<?php } ?>
</div>
    
    <div   class="col-lg-4 col-lg-offset-2" style="color:black;position: absolute; left: 17%;top: 20%;background-color: rgba(220,220,220,0.2);padding: 20px;padding-bottom: 40px;">

      <div class="div-logo">
    
      </div>

    

       </br>

       <?php echo validation_errors('<div class="alert alert-danger">', '</div>'); ?>

       <form action="" method="POST">
       <center><img src="https://www.ljtmaroc.com/images/logo.png" style=" height: 200px;width: 240px;margin: auto;left:10px;"></center>
        <div class="form-group">
        <div class="form-group">
    <label  for="username">Nom d'utilisateur:</label>
    <div class="input-box">
    <div class = "form-input" > 
     <span class = "icon"><i class = "fa fa-user fa-lg fa-fw" aria-hidden = "true" > </i> </span >  
    <input class="form-control" name="username" id="username" type="text"  placeholder="Entrer Nom d'utilisateur" >
    
  </div>
    </div>
    <div class="form-group">
    <label  for="password" >Mot de passe :</label>
    <div class = "form-input" > 
     <span class = "icon"><i class = "fa fa-lock" aria-hidden = "true"  > </i> </span>
    <input class="form-control" name="password" id="password" type="password" placeholder="Entrer votre Mot de passe"></br>

    </div>
        <div class="text-center">
             <button class="btn btn-primary" name="login" style="float: left;width: 100px;">Connexion</button>
            
        </div>
        
        <div class="text-center">
        
        </div>
       
        <div>
        <a href="<?php echo base_url('auto/MPO')?>" class="pull-right need-help" >mot de passe oublier? </a><span class="clearfix"></span>
        </div>
        
        </form>

    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url ();?>assets/css/bootstrap.min.js"></script>
  



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="<?php echo base_url();?>assets/js/bootstrap.bundle.js"></script>
   
   
    
    <script src="<?php echo base_url();?>assets/js/jquery-3.6.0.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/script.js"></script>
    <script type="text/javascript">
      $(document).ready(function() {
          $('#sidebarCollapse').on('click', function() {
            $('#sidebar, #content').toggleClass('active');
            $('.collapse.in').toggleClass('in');
            $('a[aria-expanded=true]').attr('aria-expanded', 'false');
            document.getElementById("bodyContent").style.width="100%";
          });
      });
      </script>



   

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js" integrity="sha384-lpyLfhYuitXl2zRZ5Bn2fqnhNAKOAaM/0Kr9laMspuaMiZfGmfwRNFh8HlMy49eQ" crossorigin="anonymous"></script>
    -->
</div>
  </body>
</html>