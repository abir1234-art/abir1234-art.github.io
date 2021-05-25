<!Doctype html>
<html>

<head>
<link rel="stylesheet" type="text/css" href="<?php base_url(); ?>assets/css/bootstrap.css">
    <title>Formulaire</title>
    <style type="text/css">


.container-fluid{
         margin-top:50px;

         margin-bottom:32px;
         padding:16px;
         margin-top: 150px;
         margin-bottom: 150px;
         margin-right: 50px;
         margin-left: 5px;

}
body{
    background-image:url('image.jpg');no-repeat;
    color:orange;
    background-repeat: no-repeat;
    height: 100%;
    background-position: center;
    background-size: cover;
}
h2{
 
    text-align:center;
    color:red;
}

.well{
       background:rgba(30,20,30,0.4); 
       border:none;
       border-radius:20px 20px;
       box-shadow: 0px 0px 50px 0px red;
       margin:auto;
}
.btn btn-success{
        color:orange;
}

</style>
</head>
<body>
        <div class="py-5">
                <div class="container-fluid">
                <center><h2>CONNEXION</h2></center>
                        <div class="row justify-content-center">
                                <div class="col-md-5">
                                <?php if($this->session->flashdata('status')) : ?>
                                <div class="alert alert-success">
                                <?=$this->session->flashdata('status');?>
                                </div>
                                <?php endif; ?>
                                        <div class="Card shadow">
                                        <div class="Card header">
                                              
</div>
        <div class="Card-body">
                <form action="<?php echo base_url('login')?>" method="POST">
                        <div class="form-group">
                                <label for="">Email Adresse:</label>
                                <input type="text" name=email_id class="form-control" placeholder="Enter email adresse">
                                <small><?php echo form_error('email_id');?></small>
                        </div>
        <div class="form-group">
                <label for="">Password:</label>
                <input type="password" name="password" class="form-control" placeholder="Enter your password">
                <small><?php echo form_error('pass_id');?></small>
        </div>
<hr>
<div class="form-group">
        <button type="submit" class="btn btn-success" >Login Now</button>
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