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
    body{
      background-repeat: no-repeat;
      height: 100%;
      background-position: center;
      margin-right: 450px;
      margin-left: 450px;
      height:520px;
      width:446px;
    }
  
    .container{
         margin-top:50px;
         repeat: no-repeat;
         margin-bottom:32px;
         padding:16px;
         
         margin-right: 450px;
         margin-left: 450px;
         margin:auto;
         width:550px;
         height:550px;
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
  height:500px;
  padding:20px;
  background:white;
  border-radius:4px;
  box-shadow: 0 8px 16px rgba(0,0,0,.3);
  background-color:#eee;
  background: rgba(243,156,18 ,0.8);
}
button.btn{
  width:465px;
  text:20px;
  font-weight: bold;
  border-radius:13px;


}
form input[type="text"]:focus,
form input[type="text"]:hover,
form input[type="password"]:focus,
form input[type="password"]:hover {
    background-color: #ccc;
}
.container form h1{
  text-align:center;
  margin-bottom:24px;
  display:center;
  color:blue;

}
.container form .btn:hover{
  opacity:.7;
}

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


i.fa fa-lock{
  font-size: 15px 
}
label{
  color:white;
  font-size:20px;
}
.password + .unmask {
  position:absolute;
  right: 68px; top: 7px;
  width: 25px;
  height: 25px;
  text-indent: -9999px;
  background: #aaa;
  border-radius: 50%;
}
.password + .unmask:before {
  content: "";
  position:absolute;
  top:4px; left:4px;
  z-index:1;
  width: 17px;
  height: 17px;
  background: #e3e3e3;
  border-radius: 50%;
}
.password[type="text"] + .unmask:after {
  content: "";
  position:absolute;
  top:6px; left:6px
  z-index:2;
  width: 13px;
  height: 13px;
  background: #aaa;
  border-radius: 50%;
}
input.checkbox{
  left :800px;
}

a.previous{
text-decoration: none;
  display: inline-block;
  padding: 8px 16px;
  margin-top: 10px;

}

a.previous:hover {
  background-color: #aaa;
  color:white;
}

.previous {

  margin-bottom: 10px;
  background-color:#3366ff;
  margin-top: 10px;
  width:465px;
  color:white;
  text:20px;
  font-weight: bold;
  border-radius:13px;

}




.round {
  border-radius: 50%;
}

</style>
<script>

    </script>
  </head>
  <body background="https://images.unsplash.com/photo-1557683304-673a23048d34?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1443&q=80.jpg">
  <?php if(isset($_SESSION['error'])){?>
       <div class="alert alert-danger"><?php echo $_SESSION['error'];?></div>
    <?php
    }
    ?>
  <?php echo validation_errors('<div class="alert alert-danger">','</div>'); ?>
  <div class="col-lg-4 col-lg-offset-2" style="position: absolute; left: 28% ; top: 15%;">
  <div class="container">
    <div class="col-lg-3 col-lg-offset-2">
    <form action="<?php echo base_url('auto/login')?>" method="POST">
    <h1>Login Page</h1>
    <div class="form-group">
    <label  for="username">Username:</label>
    <div class="input-box">
    <div class = "form-input" > 
     <span class = "icon"><i class = "fa fa-user fa-lg fa-fw" aria-hidden = "true" > </i> </span >  
    <input class="form-control" name="username" id="username" type="text"  placeholder="Enter your username" >
    
  </div>
    </div>
    <div class="form-group">
    <label  for="password" >Password:</label>
    <div class = "form-input" > 
     <span class = "icon"><i class = "fa fa-lock" aria-hidden = "true"  > </i> </span>
    <input class="form-control" name="password" id="password" type="password" placeholder="Enter your password"></br>
    
    </div>
    <label><input type="checkbox"  onclick="Afficher()"> Afficher password</label>
    <span class="psw"><a href="<?php echo base_url('auto/MPO')?>">Mot de passe oublier ??</a></span>
    <div class="text-center">
    <button class="btn btn-primary  mb1 bg-blue" name="login">Login</button>
    <a href="<?php echo base_url('auto/register')?>"class="previous">Register</a>

    </div>
    
    </form>
    </div>
</div>

<script>
function Afficher()
{ 
   var input = document.getElementById("password"); 
    if (input.type === "password")
    { 
       input.type = "text"; 
    } 
    else
    { 
      input.type = "password"; 
    } 
} 
</script>
<?php

if(isset($_POST['email'],$_POST['password'])){
  $stmt=$db->prepare('select password from connexion where email=?');
  $stmt->execute([$_POST['email']]);
  $hashedpassword=$stmt->fetchColumn();
  if(password_verify($_POST['password'], $hashedpassword)){
    echo "connexion reussite";
  }
  else{
    echo "mot de passe incorrect";
  }
}


?>



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="<?php echo base_url();?>assets/js/bootstrap.bundle.js"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js" integrity="sha384-lpyLfhYuitXl2zRZ5Bn2fqnhNAKOAaM/0Kr9laMspuaMiZfGmfwRNFh8HlMy49eQ" crossorigin="anonymous"></script>
    -->
</div>
  </body>
</html>