<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="<?php base_url(); ?>assets/css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="<?php echo base_url();?>assets/js/icons.js"></script>
    <link rel="stylesheet" type="text/css" href="<?php base_url(); ?>assets/css/bootstrap.css">
<link href="<?php echo base_url(); ?>assets/css/bootstrap.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <title>Hello, world!</title>
    <style>
      
    


.blue {
background:#2abdfc;
color: #fff;
}    
.navbar {
padding: 10px 10%;
}
#logo {
display: inline-block;
margin-top: 7px;
color: #fff;
}
#link {
  color: #fff;
  font-weight: bold;
  margin: 0 10px;
}

i { margin: 0 7px; }
#sidebarCollapse {
  color: #fff;
  background: transparent;
  outline: none;
  margin: 0 20px;
}
#sidebarCollapse:hover {
  color: #2abdfc;
  background: #fff;
  outline: none;
}
.wrapper {
  display: flex;
  width: 100%;
  height:100%;
  align-items: stretch;
}.wrapper {
  display: flex;
  width: 100%;
  align-items: stretch;
}#sidebar {
    min-width: 250px;
    max-width: 250px;
    margin-top: 70px;
    background: #6a76f8;
    color: #fff;
    transition: all 0.3s;
}
#sidebar.active{
	margin-left: -250px;
}

#sidebar .sidebar-header{
	padding: 20px;
	background: #6a76f8;
}
#sidebar ul.components{
	padding: 20px 0px;
}

#sidebar ul p{
	padding: 10px;
	font-size: 1.1em;
	display: block;
}

#sidebar ul li a{
	padding: 10px 10px 10px 20px;
	font-size: 1.1em;
	display: block;
    color: #fff;
    font-weight: bold;
}
#sidebar ul li a:hover {
    color: #6240bd;
    background: #fff;
    text-decoration: none;
}

#sidebar ul li.active>a,
a[aria-expanded="true"] {
    color: #fff;
    background: #8a5fff;
}
a[data-toggle="collapse"] {
    position: relative;
}
.dropdown-toggle::after {
    display: block;
    position: absolute;
    top: 50%;
    right: 20px;
    transform: translateY(-50%);
}

#content {
    width: 100%;
    padding: 40px;
    min-height: 100vh;
    transition: all 0.3s;
    margin-top: 70px;
}
@media (max-width:800px) {
  #sidebar {
    margin-left: -250px;}
  #sidebar.active{
	margin-left: 0px;
  }
  #sidebarCollapse span{
	display: none;
  }
  .card {
    width:100%;
  }
}
@media (max-width:400px) {
  #sidebar {
    margin-top: -20px;
  }
  #logo {
    display: none;
  }
}
    </style>
 
  </head>
  <body background="">

  <body>
  
  <nav class="navbar navbar-expand-lg navbar-light blue fixed-top">
   <div class="container-fluid">
    <button id="sidebarCollapse" class="btn navbar-btn" >
        <i class="fas fa-lg fa-bars"></i>
    </button>
    <a class="navbar-brand"  href="">
    <h3 id="logo">Gestion</h3>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbarSupportedContent"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbar">
        <ul class="navbar-nav mr-auto">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <li class="nav-item active">
           <a class="nav-link" id="link" href="<?php echo base_url('auto/login');?>">
              <i class="fas fa-sign-out-alt"></i>
          Déconnecté<span class="sr-only">(current) </span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" id="link" href="<?php echo base_url('sendemail');?>">
          <i class="fas fa-id-card"></i>Contact</a>
        </li>
      </ul>
    </div>
</nav>
<div class="wrapper fixed-left">
    <nav id="sidebar">
      <div class="sidebar-header">
      <h4><i class="fas fa-user"></i><?php echo $_SESSION['username']?></h4>
      </div>

      
      <ul class="list-unstyled components">
        <li>
        <a href="<?php echo base_url();?>auto/admin"><i class="fas fa-home"></i>Accueil</a>
        </li>
        <li>
              <a href="<?php echo base_url();?>auto/index1"><i class="fas fa-users"></i>Clients</a>
        </li>
        <li>
              <a href="<?php echo base_url();?>control/index"><i class="fab fa-product-hunt"></i>Produits</a>
        </li>
        <li>
        <a href="<?php echo base_url();?>control/index2"><i class="fa fa-file-text" style="font-size:18px"></i>Devis client</a>
        </li>
        <li>
        <a href="<?php echo base_url();?>control/listventes"><i class="fa fa-shopping-cart" aria-hidden="true"></i>Ventes</a>
        </li>
        <li>
        <a href="<?php echo base_url();?>auto/view_utilisateurs"><i class="fas fa-user-cog"></i>Utilisateurs</a>
        </li>
         
        <li>
        <a href="<?php echo base_url();?>control/index5">Fournisseurs</a>
        </li>
        <li>
        <a href="<?php echo base_url();?>control/view_category">Catégories</a>
        </li>
        <li>
        <a href="<?php echo base_url();?>control/view_commande">Commandes</a>
        </li>
       

      </ul>
    </nav>

    
  
       
  
    
    <div id="content">

       
          
    <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?php echo base_url();?>auto/view_utilisateurs">Utilisateurs</a></li>
    <li class="breadcrumb-item active" aria-current="page">Modifier utilisateur</li>
  </ol>
</nav>
</br>

       <?php if(isset($_SESSION['success'])){?>

        <div class="alert alert-success"><?php echo $_SESSION['success']?></div>

      <?php } ?>  
    <div class="container" style="margin-top:20px";>
    
  <form action="<?php echo base_url().'auto/edit_utilisateur/'.$user['user_id'];?>" method="POST">
      <h1>Nouveau utilisateur</h1>
    <div class="row">
    <div class="col-lg-6">
        
       <div class="form-group">
        <label  for="username">Nom d'utilisateur:</label>
         <div class = "form-input" >  
         <input class="form-control" name="username" value="<?php echo set_value('username',$user['username']);?>" id="username" type="text" placeholder="Entrer nom d'utilisateur">
         <?php echo form_error('username');?>
        </div>
        </div>
        </div>
        </div>
    <div class="row">
      <div class="col-lg-6">
    <div class="form-group">
    <label  for="email" >Email:</label>
    <div class = "form-input" > 
    <input class="form-control" name="email"  value="<?php echo set_value('email',$user['email']);?>"id="email" type="email" placeholder="Entrer votre email">
    <?php echo form_error('email');?>
    </div>
    </div>
    </div>
    </div>
    <div class="row">
    <div class="col-lg-6">
    <div class="form-group">
    <label  for="password" >Mot de passe:</label>
    <div class = "form-input" > 
    <input class="form-control" name="password" value="<?php echo set_value('password',$user['password']);?>" id="password" type="password" placeholder="Entrer votre Mot de passe">
    <?php echo form_error('password');?>
    </div>
    </div>
    </div>
    </div>
    
    <div class="row">
    <div class="col-lg-6">
    <div class="form-group">
    <label  for="gender" >Genre:</label>
    <select class="form-control"  id="gender" name="gender" type="text">
    <?php foreach($details_utilisateur as $utilisateur) : ?>
                  <option  value="<?php  echo $utilisateur->gender;?>"<?= $utilisateur->gender == $user['gender'] ? "selected" : null?>><?php echo $utilisateur->gender;?></option>
                <?php endforeach;?>
    </select>
    </div>
    </div>
    </div>
    <div class="row">
     <div class="col-lg-6">
    <div class="form-group">
    <label  for="phone" >Téléphone:</label>
    <input class="form-control" name="phone"  value="<?php echo set_value('phone',$user['phone']);?>" id="phone" type="number" placeholder="Entrer votre numéro téléphone">
    <?php echo form_error('phone');?>
    </div>
    </div>
    </div>
    </br>
    <div class="row">
     <div class="col-lg-6">
    <div class="form-group">
    <label  for="type_user">Type_user :</label>
                <select class="form-control"   name="type_user" type="text">
                <?php foreach($type_utilisateur as $type) : ?>
                  <option  value="<?php  echo $type->type_user;?>"<?= $type->type_user == $user['type_user'] ? "selected" : null?>><?php echo $type->type_user;?></option>
                <?php endforeach;?>
                </select>
                <?php echo form_error('type_user');?>
                </div>
    </div>
    </div>
    </br>
    <div class="row">
     <div class="col-lg-6">
    <div class="form-group">
    <label  for="status">Etat :</label>
                <select class="form-control"   name="status" type="text">
                <?php foreach($status_utilisateur as $status) : ?>
                  <option  value="<?php  echo $status->status;?>"<?= $status->status== $user['status'] ? "selected" : null?>><?php echo $status->status;?></option>
                <?php endforeach;?>
                </select>

                <?php echo form_error('status');?>
                </div>
    </div>
    </div>
    </br>
    
        <div class="form-group">
            <button class="btn btn-primary"  name="register" style="width:100px">Modifier</button>&ensp;&ensp;&ensp;&ensp;
            <a href="<?php echo base_url().'auto/view_utilisateurs';?>" class="btn-secondary btn" style="width:100px">Annuler &ensp;&ensp;</a>
        </div>

           
        </form>
   

    </div>
    </div>
    </div>
    </div>
    </footer>
   <!-- Footer --> 
   <footer class="bg-light text-center text-lg-start">
  <!-- Copyright -->
  <div class="text-center p-3" style="background-color:#6a76f8">
    © 2020 Copyright
  
  </div>
  <!-- Copyright -->
</footer>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url ();?>assets/css/bootstrap.min.js"></script>
    
<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    
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
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm"    crossorigin="anonymous"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

  </body>
</html>
