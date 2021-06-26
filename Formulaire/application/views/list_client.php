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
          Déconnecté<span class="sr-only">(current) </span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" id="link" href="<?php echo base_url('sendemail');?>">
          <i class="fas fa-id-card"></i>Contact</a>
        </li>
      </ul>
    </div>
</nav>
<div class="wrapper fixed-left" style="height:auto">
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
        <a href="<?php echo base_url();?>control/view_devis"><i class="fa fa-file-text" style="font-size:18px;color:black;" ></i>Devis client</a>
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
        <a href="<?php echo base_url();?>control/view_category"><img src="https://img.icons8.com/ios/50/000000/category.png" style=" height: 25px;width: 25px;margin: auto background-color:white;">&nbsp;Catégories</a>
        </li>
        
       
      </ul>
    </nav>

    <div id="content">
    <div class="row">
            <div class="col-md-12">
              <?php 
                $success=$this->session->userdata('success');
                if($success !=""){?>
                <div class="alert alert-success"><?php echo $success;?></div>
                <?php } ?>
                <?php 
                $faileur=$this->session->userdata('faileur');
                if($faileur !=""){?>
                <div class="alert alert-danger"><?php echo $faileur;?></div>
                <?php } ?>
            </div>
    </div>
    <br />
     
  
     
     <div class="row">
        <div class="text-right">
          <div class="col-lg-12"><center><h1> Liste Clients</h1></center></div></div>
          <br /> 
</div>    
<br />
 <hr>
  <br />
   
 
      
       
       <div class="text-right">
       <div class="col-lg-12 text-right">
       <div class="text-right">
          <a href="<?php echo base_url().'auto/create';?>"class="btn btn-primary pull-right" style="width:200px"><i class="fa fa-user fa-fw"></i>Nouveau Client</a>
        </div>
        </div>
        </div>
       
        <br />
        <div class="row">
          <div class="col-md-8">
            <form class="form-inline" action="<?php echo base_url() . 'auto/filter'; ?>" method="post">
           
            <div class="input-group">
              <select class="form-control" name="field">
                  <option selected="selected" disabled="disabled" value="">Filtrer par </option>
                  <option value="ref_client">Référence</option>
                  <option value="nom">Nom</option>
                  <option value="prenom">Prenom</option>
                  <option value="mail">Email Name</option>
              </select>
               <input class="form-control" type="text" name="search" value="" placeholder="Chercher..." >
               <button class="btn btn-primary" type="submit" name="filter" type="submit">Chercher</button>
               
            </div>
            </form>
          </div>    
        </div>    
        <br />
       
        <?php if($this->input->get('keyword'))
        {
          ?>
          <b>Search Result For"<?php echo $this->input->get('keyword');?>"</b>
          <?php }?>
          <br />
          <div class="table-responsive">
      <table class="table">
    <tr style="background-color:#3386FF">
    <th  scope="col" style="color:white">Référence</th>
    <th  scope="col" style="color:white">Nom</th>
    <th  scope="col" style="color:white">Prénom</th>
                        
                
    <th scope="col" style="color:white">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mail</th>
    <th  scope="col" style="color:white">Téléphone</th>
                        
    <th  scope="col" style="color:white">&nbsp;&nbsp;&nbsp;&nbsp;Adresse</th>
                       
    <th  scope="col" style="color:white">Ville</th>
    <th  scope="col" with="60" style="color:white">Opérations</th>
    </tr>
    <?php $i=1;
                if(isset($clients)) {
                    foreach($clients as $key => $client) { ?>
                   
                   <tr>
                     
                     <td><?php echo $client->ref_client;?></td>
                     <td><?php echo $client->nom;?></td>
                     <td><?php echo $client->prenom;?></td>
                     <td><?php echo $client->mail;?></td>
                     <td><?php echo $client->telephone;?></td>
                     <td><?php echo $client->adresse;?></td>
                     <td><?php echo $client->nom_ville;?></td>
                     
                     <td>
                         <?php
                           $status=$client->status;
                           if($status == 1){
                             ?>
                                  <a href="<?php echo base_url();?>auto/update_status/<?php echo $client->ref_client;?>/<?php echo $client->status; ?>" class="btn btn-success">Active</a>
                             <?php
                              }
                              else{
                                ?>
                                   <a href="<?php echo base_url();?>auto/update_status/<?php echo $client->ref_client;?>/<?php echo $client->status;?>" class="btn btn-danger">InActive</a>
                              <?php
                              }
                              ?>     
                             <a href="<?php echo base_url();?>auto/edit_test/<?php echo $client->ref_client;?>" class="btn btn-primary" style="width:120px"><i class="fa fa-pencil fa-fw"></i>Modifier</a>
                        </td>
                        
                 </tr>
                 <?php $i++ ; } }?>
   
                
                        
 
</table>   
</div>  

<?php echo $this->pagination->create_links();?>
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
 <script>
  $(document).ready(function() {
   $("#FormLaporan").submit(function(e) {
    e.preventDefault();
    var id = $("#angkatan").val();
    // console.log(id);
    var url ="<?php echo base_url('Cetak_Filter/filter/');?>" + id; 
    
    $('#result').load(url);
   })
  });
 </script>

</body>
</html>
