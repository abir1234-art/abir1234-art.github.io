<?php
$str = "PRT000";


$query = $this->db->get('produits');

if($query->result()){

foreach ($query->result() as $row) {

  $id_four = $row->reference;
  $last_four = explode("000", $id_four);
 /* print_r (explode("r",$id_four));*/
 /* echo  $last_four[1];*/
  $last_four[1]++;

  $id = $str.$last_four[1];

               }

}else{
  
    $id = "PRT0001";
}

?>
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
  align-items: stretch;
}.wrapper {
  display: flex;
  width: 100%;
  height:100%;
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
       <ul class="navbar-nav mr-auto" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
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
        <a href="<?php echo base_url();?>control/view_category"><img src="https://img.icons8.com/ios/50/000000/category.png" style=" height: 25px;width: 25px;margin: auto background-color:white;">&nbsp;Cat??gories</a>
        </li>
       
       
      </ul>
    </nav>


    <div id="content">
    <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item active" aria-current="page"> Produits</li>
  </ol>
</nav>
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
          <div class="col-lg-12"><center><h1> Liste Produits</h1></center></div></div>
          <br /> 
</div>    
<br />
 <hr>
  <br />
  
          <div class="clear-fix">
               <a href="<?php echo base_url().'control/addproduit';?>" class="btn btn-info" style="float:right" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;Nouveau Produit&nbsp;/&nbsp;Service </a>
                </div><br /><br />
                
              
        <div class="col-md-2">
    <form action="" id="FormLaporan">
     <select name="" id="angkatan" class="form-control">
      <option value="0">Afficher tous</option>
      <?php foreach ($angkatan as $row): ?>
       <option value="<?php echo $row->id ?>"><?php echo $row->name ?></option>
      <?php endforeach ?>
     </select>
     <br>
     <button type="submit" class="btn btn-primary"  style="position: absolute; left:93% ; top: 3%;width:50px;"><i class="fa fa-search" aria-hidden="true"></i></button>
    </form>
   </div>
  
   <div class="col-md-12">
    <div id="table">
    <div class="table-responsive">
    <table class="table">
   
    <tr style="background-color:#3386FF">
    <th  scope="col"  style="color:white">R??f??rence</th>
    <th  scope="col"  style="color:white">D??signation</th>
    <th  scope="col"  style="color:white">Prix</th>
                        
                
    <th scope="col"  style="color:white">Quantit??</th>
    <th  scope="col"  style="color:white">&nbsp;&nbsp;&nbsp;&nbsp;Date&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>                       
    <th scope="col"  style="color:white">&nbsp;&nbsp;Op??rations&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
    </tr>
                   <?php $no=1; 
                         foreach ($mahasiswa as $row) { ?>
                   <tr>
                       <td><?php echo $row->reference; ?></td>
                       <td><?php echo $row->nom_produit ?></td>
                       <td><?php echo $row->prix ?></td>
                       <td>&nbsp;&nbsp;&nbsp;<?php echo $row->quantite ?></td>
                       <td>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row->created_date ?>&nbsp;&nbsp;&nbsp;</td>
                        <td>&nbsp;&nbsp;&nbsp;
                             <a href="<?php echo base_url();?>control/edit_produit/<?php echo $row->reference;?>" class="btn btn-primary" style="width:115px"><i class="fa fa-pencil fa-fw"></i>Modifier</a>
                          </td>
   </tr>
  <?php $no++; } ?> 


  </table>
  </div>
  <?php echo $this->pagination->create_links();?>
        
  <?php if($this->session->flashdata('error')):?>
        <div align="center"  style="color:#FFF" class="bg-danger">
        <?php echo $this->session->flashdata('error');?>
        </div>
        <?php endif;?>  

        <?php if($this->session->flashdata('inserted')):?>
        <div align="center"  style="color:#FFF" class="bg-success">
        <?php echo $this->session->flashdata('inserted');?>
        </div>
        <?php endif;?> 
            
        </div>
        <?php if($this->session->flashdata('updated')):?>
        <div align="center"  style="color:#FFF" class="bg-success">
        <?php echo $this->session->flashdata('updated');?>
        </div>
        <?php endif;?> 
        <?php if($this->session->flashdata('deleted')):?>
        <div align="center"  style="color:#FFF" class="bg-success">
        <?php echo $this->session->flashdata('deleted');?>
        </div>
        <?php endif;?> 
 </div>
 </div>

 <br  />

    
            
      
      
        
            
        </div>
        </div>
        </div>
        </div>
        </div>
  </div>
 </div>
 </div>
 </div>
        



  
        </footer>
   <!-- Footer --> 
   <footer class="bg-light text-center text-lg-start">
  <!-- Copyright -->
  <div class="text-center p-3" style="background-color:#6a76f8">
    ?? 2020 Copyright
  
  </div>
  <!-- Copyright -->
</footer>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
        <form action="<?php echo base_url().'control/addproduit';?>" method="post">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ajouter Produit&nbsp;/&nbsp;Service</h5>
        
      </div>
      <div class="modal-body">
        <div class="form-group">
             <label for="reference">R??f??rence :</label><br />
             <input type="text"  disabled name="reference"  placeholder="<?php  echo $id ?>" class="form-control">
        </div>
    
        
        <div class="form-group">
             <label for="nom_produit">D??signation :</label><br />
             <input type="text" name="nom_produit" placeholder="Entrer d??signation Produit / Service" class="form-control">
        </div>
    
        <div class="form-group">
             <label for="prix">Prix Produit :</label><br />
             <input type="text" name="prix" placeholder="Entrer prix Produit / Service" class="form-control">
        </div>
       
        <div class="form-group">
             <label for="quantite">Quantite Produit :</label><br />
             <input type="text" name="quantite" placeholder="Entrer quantite Produit / Service" class="form-control">
        </div>
   
        <div class="form-group">
        
           <label  for="category_id">Cat??gorie Produit :</label>
           <select class="form-control"  name="category_id" type="text">
              <?php foreach($details_category as $category) : ?>
              <option  value="<?php  echo $category->id;?>"><?php echo $category->name;?></option>
              <?php endforeach;?>
           </select>
           </div>
           
        <div class="form-group">
        
        <label for="nom_fournisseur">Nom Fournisseur :</label><br />
        <select class="form-control"  name="nom_fournisseur" type="text">
        <?php foreach($fournisseurs as $fr) : ?>
            <option  value="<?php  echo $fr->ref_fournisseur;?>"><?php echo $fr->nom_fournisseur;?></option>
            <?php endforeach;?>
        </select>
        </div>
       

        </div>
   
     
        
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
        <input type="submit" name="insert" value="Ajouter" class="btn btn-info">
      </div>
        </form>
    </div>
  </div>
</div>  
            

  
 
  
    

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
    var url ="<?php echo base_url('control/filter/');?>" + id; 
    
    $('#table').load(url);
   })
  });
 </script>
 <script>  
      $(document).ready(function(){  
           $('.stockdelete').click(function(){  
                var id_produit = $(this).attr("id_produit");  
                if(confirm("vous voulez supprimer ce produit?"))  
                {  
                     window.location="<?php echo base_url();?>control/delete_produit/<?php echo $row->id_produit;?>" ;
                }  
                else  
                {  
                     return false;  
                }  
           });  
      });  
      </script>

</body>
</html>