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
              D??connect??<span class="sr-only">(current) </span></a>
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
        <a href="<?php echo base_url();?>auto/admin"><i class="fas fa-home" style="color:black" ></i>Accueil</a>
        </li>
        <li>
              <a href="<?php echo base_url();?>auto/index1"><i class="fas fa-users" style="color:black" ></i>Clients</a>
        </li>
        <li>
              <a href="<?php echo base_url();?>control/index"><i class="fab fa-product-hunt" style="color:black" ></i>Produits</a>
        </li>
        <li>
        <a href="<?php echo base_url();?>control/index2"><i class="fa fa-file-text" style="font-size:18px;color:black;" ></i>Devis client</a>
        </li>
   
        <li>
        <a href="<?php echo base_url();?>auto/view_utilisateurs"><i class="fas fa-user-cog" style="color:black"></i>Utilisateurs</a>
        </li>
        <li>
        <a href="<?php echo base_url();?>control/view_commande"><i class="fab fa-cuttlefish" style="color:black"></i>Commandes</a>
        </li>
        <li>
        <a href="<?php echo base_url();?>control/listventes"><i class="fa fa-shopping-cart " aria-hidden="true" style="color:black" ></i>Stock</a>
        </li>
        <li>
        <a href="<?php echo base_url();?>control/index5"><img src="https://img.icons8.com/ios/50/000000/supplier.png" style=" height: 25px;width: 25px;margin: auto background-color:white;">&nbsp;Fournisseurs</a>
        </li>
        <li>
        <a href="<?php echo base_url();?>control/view_category"><img src="https://img.icons8.com/ios/50/000000/category.png" style=" height: 25px;width: 25px;margin: auto background-color:white;">&nbsp;Cat??gories</a>
        </li>
       
       
      </ul>
    </nav>


    <div id="content">
    <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?php echo base_url();?>auto/index1">Clients</a></li>
    <li class="breadcrumb-item active" aria-current="page">Modifier client</li>
  </ol>
</nav>

    <div class="container" style="margin-top:20px";>
    
        <form action="<?php echo base_url().'auto/edit_test/'.$user['ref_client'];?>" method="POST">
           <h1> Modifier Client </h1>
           <div class="row">
            <div class="col-lg-6">

                <div class="form-group">
                    <label for="ref_client">R??f??rence Client :</label>
                    <input type="text" disabled  name="ref_client" value="<?php echo set_value('ref_client',$user['ref_client']);?>" class="form-control" placeholder="Entrer R??f??rence"> 
                    <?php echo form_error('ref_client');?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">

                <div class="form-group">
                    <label for="nom">Nom :</label>
                    <input type="text"  name="nom" value="<?php echo set_value('nom',$user['nom']);?>" class="form-control" placeholder="Entrer Nom client"> 
                    <?php echo form_error('nom');?>
                </div>
            </div>
        </div>
            
        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="prenom">Prenom :</label>
                    <input type="text" name="prenom" value="<?php echo set_value('prenom',$user['prenom']);?>" class="form-control" placeholder="Entrer Prenom client"> 
                    <?php echo form_error('prenom');?>
                </div>

                
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="mail">Email :</label>
                    <input type="email" name="mail" value="<?php echo set_value('mail',$user['mail']);?>" class="form-control" placeholder="Entrer email client"> 
                    <?php echo form_error('mail');?>
                </div>
                </div>
        </div>
                <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="ice">ICE:</label>
                    <input type="text" name="ice" value="<?php echo set_value('ice',$user['ice']);?>" class="form-control" placeholder="Entrer ICE client"> 
                    <?php echo form_error('ice');?>
                </div>                
            </div>
        </div>
               
           
        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="telephone">T??l??phone :</label>
                    <input type="number" name="telephone" value="<?php echo set_value('telephone',$user['telephone']);?>" class="form-control" placeholder="Entrer telephone client"> 
                    <?php echo form_error('telephone');?>
                </div>

                
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="adresse">Adresse :</label>
                    <input type="text" name="adresse" value="<?php echo set_value('adresse',$user['adresse']);?>" class="form-control" placeholder="Entrer Adresse client"> 
                    <?php echo form_error('adresse');?>
                </div>

                
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                <label  for="ville">Ville :</label>
                <select class="form-control"  name="ville" type="text">
                <?php foreach($villes as $ville){ ?>
                    <option value="<?php echo $ville->nom_ville;?>" <?= $ville->nom_ville==$user['nom_ville']  ? "selected" : null?>><?php echo $ville->nom_ville;?></option>
                    <?php };?>
                </select>

               </div> 
            </div>

        
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                <label  for="gender">Genre:</label>
                <select class="form-control"  name="gender" type="text">
                <?php foreach($details_client as $client) : ?>
                  <option  value="<?php  echo $client->gender;?>"<?= $client->gender == $user['gender'] ? "selected" : null?>><?php echo $client->gender;?></option>
                <?php endforeach;?>
                </select>
                   
               </div> 
            </div>

        
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                <label  for="status">Etat :</label>
                <select class="form-control"  name="status" type="text">
                <?php foreach($clients as $cl) : ?>
                  <option  value="<?php  echo $cl->status;?>"<?= $cl->status == $user['status']  ? "selected" : null?>><?php echo $cl->status;?></option>
                <?php endforeach;?>
                </select>
                   
               </div> 
            </div>

        
        </div>
        <div class="form-group">
            <button class="btn btn-primary" style="width:150px">Modifier</button>&ensp;&ensp;&ensp;&ensp;
            <a href="<?php echo base_url().'auto/index1';?>" class="btn-secondary btn" style="width:100px">Annuler &ensp;&ensp;</a>
        </div>
       
           
        </form>
        </div>
        </div>
        </div>
        <!-- Footer --> 
   <footer class="bg-light text-center text-lg-start">
  <!-- Copyright -->
  <div class="text-center p-3" style="background-color:#6a76f8">
    ?? 2020 Copyright
  
  </div>
  <!-- Copyright -->
</footer>
          
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





