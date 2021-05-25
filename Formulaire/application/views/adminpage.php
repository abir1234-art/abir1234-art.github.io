<!Doctype html>
<html>

<head>
<link rel="stylesheet" type="text/css" href="<?php base_url(); ?>assets/css/bootstrap.css">
<style>
   body{
         background-image:url('image2.jpg');
         background-repeat: no-repeat;
         background-position: center;
         background-size: cover;
   }
</style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">GESTION</font></font></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Basculer la navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor01">
      <ul class="navbar-nav me-auto">
     
        <li class="nav-item">
          <a class="nav-link active" href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">User Page</font></font>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="<?php echo base_url('adminpage');?>"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">User Admin
            </font></font><span class="visually-hidden"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">(actuel)</font></font></span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('sendemail');?>"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Contact</font></font></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url();?>auto/logout"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Deconnexion</font></font></a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Menu déroulant</font></font></a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">action</font></font></a>
            <a class="dropdown-item" href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Une autre action</font></font></a>
            <a class="dropdown-item" href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Quelque chose d'autre ici</font></font></a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Lien séparé</font></font></a>
          </div>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-sm-2" type="text" placeholder="Rechercher">
        <button class="btn btn-secondary my-2 my-sm-0" type="submit"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Rechercher</font></font></button>
      </form>
    </div>
  </div>
</nav>
<div class="py-5">
<div class="container">
<div class="justify-content-center">
<div class="col-md-12">
</div>
<div class="Card">
<div class="Card-header">
<h5>admin  Page </h5>
<?php if(isset($_SESSION['success'])){?>
       <div class="alert alert-success"><?php echo $_SESSION['success'];?></div>
    <?php
    }
    ?>
    <br><br>
    <a href="<?php echo base_url();?>auto/logout">Logout</a>
</div>
<div class="Card-body">
<h6 style="color:white">Your are in admin  home page</h6>
<h3 style="color:white">Hello,<?php  echo $_SESSION['username'];?></h3>
</div>
</div>
</div>
</div>
</div>

<script src="<?php echo base_url();?>assets/js/bootstrap.bundle.js"></script>
</div>
</body>
</html>

