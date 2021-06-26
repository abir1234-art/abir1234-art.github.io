<?php
$str = "PRT000";


$query = $this->db->get('details_devis');

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
<?php
$str = "DEV000";


$query = $this->db->get('details_devis');

if($query->result()){

foreach ($query->result() as $row1) {

  $id_four1 = $row1->ref_devis;
  $last_four1 = explode("000", $id_four1);
 /* print_r (explode("r",$id_four));*/
 /* echo  $last_four[1];*/
  $last_four1[1]++;

  $id1 = $str.$last_four1[1];

               }

}else{
  
    $id1 = "DEV0001";
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
        <a href="<?php echo base_url();?>control/listventes"><i class="fa fa-shopping-cart " aria-hidden="true" style="color:black" ></i>Stcok</a>
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
  
      <div class="card card-default">
         <h4 class="card-header">Modifier Devis</h4>
         <div class="card-body">
            <form action="<?php echo base_url();?>control/edit_devis_test/<?php echo $devis_record->ref_devis;?>" method="POST">
            <div class="row">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <div class="col-md-3">    
            <div class="form-group">
                   <label for="ref_devis">N° Devis</label>
                    <input type="text" class="form-control"  disabled name="ref_devis"   value="<?php echo $devis_record->ref_devis;?>" >
                    <?php echo form_error('ref_devis');?>
                </div>
               </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
               <div class="col-md-3">  
               <div class="form-group">
                <label  for="ref_client">Nom client</label>
                   <select class="form-control"  name="ref_client" type="text">
                    
                   
                     <?php foreach($details_clients as $client) : ?> 
                       <?php if($client->status==1) : ?> 
                        <option  value="<?php  echo $client->ref_client;?>"<?= $client->ref_client == $devis_record->ref_client ? "selected" : null?>><?php echo $client->prenom;?>&nbsp;<?php echo $client->nom;?></option>
                       <?php endif;?>
                     <?php endforeach;?>
                     
                   </select>
                   <?php echo form_error('ref_client');?>
                   </div>
                       </div>
                       </div>
                       <br />
                       <div class="row">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
               <div class="col-md-3">
                <div class="form-group">
                   <label for="date_creation">Date création</label>
                    <input type="date" class="form-control" name="date_creation"   value="<?php echo $devis_record->date;?>">
                    <?php echo form_error('date_creation');?>
                </div>
               </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
               <div class="col-md-3">
                <div class="form-group">
                   <label for="validite">Durée validité</label>
                    <input type="numeric" class="form-control" name="validite" value="<?php echo $devis_record->duree;?>" >
                    <?php echo form_error('validite');?>
                </div>
                </div>
                       </div>
   
                 <br />
                 <div class="row">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                   <div class="col-md-3">
                   <div class="form-group">
                <label  for="status1">Etat Devis :</label>
                <select class="form-control"  name="status1" type="text">
                <?php foreach($dev as $d) : ?>
                  <option  value="<?php  echo $d->status1;?>"<?= $d->status1 == $devis_record->status1? "selected" : null?>><?php echo $d->status1;?></option>
                <?php endforeach;?>
                </select>
                   
            
                   
              
               </div> 
                       

                       </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
               <div class="col-md-3">
               <div class="form-group">
            <label for="message">Message</label>
            <textarea class="form-control" name="message" id="message" row="16" placeholder="Entrer message...."><?php echo $devis_record->message;?></textarea>
                    <?php echo form_error('message');?>
                </div>
                      
                    
                <div class="form-group">
                   <label for="total_ht1">Total HT</label>
                    <input type="text" class="form-control" name="total_ht1" id="total_ht1" placeholder="" value="<?php echo $sum->total_ht;?>" >
                    <?php echo form_error('total_ht1');?><br />
                    <label for="total_tva">Total TVA</label>
                    <input type="text" class="form-control" name="total_tva"  id="total_tva" placeholder="" value="<?php echo $tva->t;?>">
                    <?php echo form_error('total_tva');?><br />
                    <label for="total_ttc1" >Total TTC</label>
                    <input type="text" class="form-control"  id="total_ttc1" name="total_ttc1"  placeholder="" value="<?php echo $ttc->tt;?>">
                    <?php echo form_error('total_ttc1');?>
                </div>
               
                </div>
        
              
                 <br />
                
                <br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
                       
                
                
      
                <div class="clear-fix">
               <a href="<?php echo base_url()?>control/create_ligne_produit';?>" class="btn btn-info" style="float:right" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus" aria-hidden="true"></i>&nbsp;&nbsp;Nouvelle ligne</a>
               </div>
               <br />
               <br />
      <div class="table-responsive">
    <table class="table">
    <tr style="background-color:#3386FF">
      <th scope="col" style="color:white">Désignation</th>
      <th scope="col" style="color:white">Quantite</th>
      <th scope="col" style="color:white">prix UT</th>
      <th scope="col" style="color:white">Total HT</th>
    

    </tr>
    <?php $no=1; 
                foreach ($details_devis as $d) { ?>
                   <tr>
                       <td><?php echo  $d->nom_produit; ?></td>
                       <td><?php echo $d->quantite_produit?></td>
                       <td><?php echo $d->prix_propose ?></td>
                       <td><?php echo $d->total_ht ?></td>
                    
                        
                   </tr>
                <?php $no++;}?>
                
                        
 
</table>
</div>
<br />
<div class="form-group">
                    <button class="btn btn-primary" style="width:150px" href="#" >Valider</button>&ensp;&ensp;&ensp;&ensp;
                 
                 </div>
                   </form >


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
    <div class="modal-content">
        <form action="<?php echo base_url();?>control/create_ligne_produit/<?php echo $devis_record->ref_devis;?>" method="post">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ajouter Produit</h5>
        
      </div>
      <div class="modal-body">
        
        <div class="form-group">
        <label for="ref_devis">N° Devis</label><br />
             <input type="text"  name="ref_devis" id="ref_devis"  value="<?php echo $devis_record->ref_devis;?>"   class="form-control">
        </div>
        <div class="form-group">
             <label for="reference_produit">N° Produit</label><br />
             <select class="form-control"   name="reference_produit" type="text">
                     <option selected="selected" disabled="disabled" value="">Choisir produit </option>
                     <?php foreach($ligne_produits as $produit) : ?>
                        <option  value="<?php  echo $produit->reference;?>"><?php echo $produit->nom_produit;?></option>
                     <?php endforeach;?>
                   </select>
        </div>
    
        
        <div class="form-group">
             <label for="quantite_produit">Quantite Produit</label><br />
             <input type="text" name="quantite_produit"  id="quantite_produit" placeholder="Entrer quantite produit" class="form-control">
        </div>

    
        <div class="form-group">
             <label for="prix_propose">Prix propose</label><br />
             <input type="text" name="prix_propose" id="prix_propose" placeholder="Entrer prix produit" class="form-control">
        </div>
        <div class="form-group">
             <label for="total_ht">Total Ht</label><br />
             <input type="text" name="total_ht"  id="total_ht" placeholder="Entrer total_ht" class="form-control">
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
                 </div>
                 </div>
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
    <script>
     //  document.getElementById("total_ht").value=getValue();
     //function getValue() {
    // Sélectionner l'élément input et récupérer sa valeur
     //var input = document.getElementById("prix_propose").value *  document.getElementById("quantite_produit").value; 
      
      //return var;
    // Afficher la valeur
    //alert(input);
   // var prix_propose = document.getElementById("Poids").value;
    //var quantite_produit = document.getElementById("Taille").value;
    //var result = prix_propose*quantite_produit;
    //var IMC = result.toFixed(2);
     // </script>
     
      <script type="text/javascript">
          $('form').change(function(){
            var prixVal = $('#prix_propose').val();
            var quantVal = $('#quantite_produit').val();
            if(prixVal.length > 0 && quantVal.length > 0){
            $('#total_ht').val(prixVal * quantVal);
         }
        })
        </script>        
        </script>
     
     <script type="text/javascript">
         $('form').change(function(){
           var total_ht = $('#total_ht1').val();
           if(total_ht.length > 0){
           $('#total_tva').val(total_ht * 0.2);
        }
       })
       </script>        
                
                
                
</body>
</html>
