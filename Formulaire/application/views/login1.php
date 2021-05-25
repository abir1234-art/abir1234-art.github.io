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
    <div class="col-md-5">
    <?php if($this->session->flashdata('status')):?>
    <div class="alert alert-success">
    <?=$this->session->flashdata('status');?>
    </div>
    <?php endif;?>
    <div class="card shadow">
    <div class="card-header">
    <h5>login page</h5>
    </div>
    <div class="card-body">
    <form action="<?php echo base_url('login1');?>" methode="POST">
    <div class="form-group">
    <label for="">Email</label>
    <input type="email" name="email_id"  class="form-control" placeholder="ENTER YOUR EMAIL">
    <small><?php echo form_error('email_id');?></small>
    </div>
    <div class="form-group">
    <label for="">Password</label>
    <input type="password" name="password" class="form-control" placeholder="ENTER YOUR PASSWORD">
    <small><?php echo form_error('password');?></small>
    </div>
    <div class="form-group">
    <button class="btn btn-primary" name="register">Login</button>
    </div>
    </form>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </body>
   </html>

