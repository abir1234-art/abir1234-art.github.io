<!Doctype html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="<?php base_url(); ?>assets/css/bootstrap.css">
    <title>Formulaire</title>
    <style type="text/css">


     .container{
         margin-top:50px;
         margin-bottom:32px;
         padding:16px;
         margin-top: 150px;
         margin-bottom: 150px;
         margin-right: 50px;
         margin-left: 40px;
 
}
 
    
     }
     div{
         margin:auto;
     }
     body{
         background-image:url('image.jpg');no-repeat;
         background-repeat: no-repeat;
         color:white
     }
     h2{
         text-align:center;
         color:#fff;
     }
    
     .well{
            background:rgba(30,20,30,0.4); 
            border:none;
            border-radius:20px 20px;
            box-shadow: 0px 0px 50px 0px red;
            margin-left: auto;
            margin-right: auto;


     }
    
  
   
     .center_div{
    margin: 0 auto;
    width:80% ;
 
     }
</style>

</head>
<body>

    <div  class="col-lg-6 offset-lg-3">
    
    <div class="container ">
    <center><h2>CONNEXION</h2></center>
        <form class="well">
            <div class="form-group">
                <label for="login">Login :</label>
                <input type="text" id="login" name="login" placeholder="votre login" class="form-control" required>

    </div>
    <div class="form-group">
    <label for="pass">Password :</label>
    <input type="password"  id="pass" name="password"  placeholder="votre password" class="form-control" maxlength=8 required>
    <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
    <button class="btn btn-danger col-md-6 offset-md-3">se connecter</button>
    </div>
</form>
   
</body>
</html>