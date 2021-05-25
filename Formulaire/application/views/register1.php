<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.css" rel="stylesheet">
    
    <title>Register Page</title>
    <style></style>
    </head>
    <body>
    <div class="py-5">
    <div class="container">
    <div class="row justify-content-center">
    <div class="col-md-7">
    <div class="card shadow">
    <div class="card-header">
    <h5>Register page</h5>
    </div>
    <div class="card-body">
    <form action="<?php echo base_url('register');?>" method="POST">
    <div class="row">
    <div class="col-md-6">
    <div class="form-group">
    <label for="">Username</label>
    <input type="text" name="username" value="<?php echo set_value('username');?>" class="form-control">
    <small><?php echo form_error('username');?></small>
    </div>
    </div>
    <div class="col-md-12">
    <div class="form-group">
    <label for="">Email</label>
    <input type="email" name="email" value="<?php echo set_value('email');?>" class="form-control">
    <small><?php echo form_error('email');?></small>
    </div>
    </div>
    <div class="col-md-6">
    <div class="form-group">
    <label for="">Password</label>
    <input type="password" name="password" class="form-control">
    <small><?php echo form_error('password');?></small>
    </div>
    </div>
    <div class="col-md-6">
    <div class="form-group">
    <label for="">Confirm Password</label>
    <input type="password" name="cpassword" class="form-control">
    <small><?php echo form_error('cpassword');?></small>
    </div>
    </div>
    <div class="col-md-12">
    <div class="form-group">
    <label  for="gender" >Gender:</label>
    <select class="form-control" id="gender" name="gender" type="text">
    <option value="Male">Male</option>
    <option value="Female">Female</option>
    </select>
    </div>
    </div>
    <div class="col-md-6">
    <div class="form-group">
    <label  for="phone" >Téléphone:</label>
    <input class="form-control" name="phone"  type="number">
    <small><?php echo form_error('phone');?></small>
    </div>
    </div>
    <div class="col-md-12">
    <button class="btn btn-primary" name="register">Register</button>
    <button class="btn btn-primary" name="login">Login</button>
    </div>

    </div>
    </div>
    </div>
    </div>
    </div>
    </form>
    </div>
    </div>


    </body>
    </html>