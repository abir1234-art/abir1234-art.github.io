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
    body{
        background-image:url('image2.jpg');no-repeat;
        background-repeat: no-repeat;
        height: 100%;
        background-position: center;
        background-size: cover;
        background-color:orange;
    }
    .container{
         margin-top:50px;

         margin-bottom:32px;
         padding:16px;
         margin-top: 50px;
         margin-bottom: 150px;
         margin-right: 450px;
         margin-left: 450px;
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

    <body>
    <?=$this->session->flashdata('message');?>
    <div class="container">
    <div class="col-lg-3 col-lg-offset-2">
    <?php echo validation_errors('<div class="alert alert-danger">', '</div>'); ?>
    <form action="<?php echo base_url('auto/reset_password')?>" method="POST">
    <div class="form-group">
    <label  for="email" >Email:</label>
    <div class = "form-input" >
     <span class = "icon"><i class = "fa fa-envelope" aria-hidden = "true" > </i> </span >  
    <input class="form-control" name="email" id="email" type="email"  value="<?php echo set_value('email');?>"placeholder="Enter your email">
    </div>
    </div>
    <div class="text-center">
    <button class="btn btn-primary" name="register">Register</button>
</div>
</form>
<?php  echo validation_errors('<p class="error">');
if(isset($error)){
  echo '<p class="error">'.$error.'</p>';
}
?>

</div>

<script src="<?php echo base_url();?>assets/js/bootstrap.bundle.js"></script>

</div>

    </body>
    </html>