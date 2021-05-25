<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.css" rel="stylesheet">
    
    <title>Register Page</title>
    <style>
  
    .container{
         margin-top:50px;

         margin-bottom:32px;
         padding:16px;
         margin-top: 50px;
         margin-bottom: 150px;
         margin-right: 450px;
         margin-left: 400px;
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
    i.fa fa-envelope{
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
    h1{
      color:blue;
      display:center;
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
  .container form h1{
  text-align:center;
  margin-bottom:24px;
  display:center;
  color:blue;

}


.container form{
  width:500px;
  height:850px;
  padding:20px;
  background:white;
  border-radius:4px;
  box-shadow: 0 8px 16px rgba(0,0,0,.3);
  background: rgba(243,156,18 ,0.8);
}
label{
  color:white;
  font-size:20px;
}
    
form input[type="text"]:focus,
form input[type="text"]:hover,
form input[type="text"]:focus,
form input[type="text"]:hover,
form input[type="password"]:focus,
form input[type="password"]:hover 
form input[type="password"]:focus,
form input[type="password"]:hover,
form input[type="text"]:focus,
form input[type="text"]:hover,
form input[type="text"]:focus,
form input[type="text"]:hover{
    background-color: #ccc;
}

    </style>
  </head>
  <body background="https://images.unsplash.com/photo-1557683304-673a23048d34?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1443&q=80.jpg">
  <div class="container">
    
    <div class="col-lg-5 col-lg-offset-2">
    <?php if(isset($_SESSION['success'])){?>
       <div class="alert alert-success"><?php echo $_SESSION['success'];?></div>
    <?php
    }
    ?>

    <?php echo validation_errors('<div class="alert alert-danger">', '</div>'); ?>
   
   
    <form action="" method="POST">
    <h1>Inscription</h1>
    <div class="form-group">
    <label  for="username">Username:</label>
    <div class = "form-input" > 
     <span class = "icon"><i class = "fa fa-envelope" aria-hidden = "true" > </i> </span >  
    <input class="form-control" name="username" id="username" type="text" placeholder="Enter your username">
    </div>
    </div>

    <div class="form-group">
    <label  for="email" >Email:</label>
    <div class = "form-input" >
     <span class = "icon"><i class = "fa fa-envelope" aria-hidden = "true" > </i> </span >  
    <input class="form-control" name="email" id="email" type="email" placeholder="Enter your email">
    </div>
    </div>

    <div class="form-group">
    <label  for="password" >Password:</label>
    <div class = "form-input" > 
     <span class = "icon"><i class = "fa fa-lock" aria-hidden = "true" > </i> </span>
    <input class="form-control" name="password" id="password" type="password" placeholder="Enter your password">
    </div>
    </div>

    <div class="form-group">
    <label  for="password" >Confirm Password:</label>
    <div class = "form-input" > 
     <span class = "icon"><i class = "fa fa-lock" aria-hidden = "true" > </i> </span>
    <input class="form-control" name="password2" id="password2" type="password" placeholder="Enter your confirmation password">
    </div>
    </div>

    <div class="form-group">
    <label  for="gender" >Gender:</label>
    <select class="form-control" id="gender" name="gender" type="text">
    <option value="Male">Male</option>
    <option value="Female">Female</option>
    </select>
    <div class="form-group">
    <label  for="phone" >Téléphone:</label>
    <input class="form-control" name="phone" id="phone" type="number" placeholder="Enter your phone">
    </div>
    </br>
    <div class="text-center">
    <button class="btn btn-primary" name="register">Register</button>
    <button class="btn btn-primary" name="login">Login</button>
    </div>
    



    </div>
    </form>
  

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