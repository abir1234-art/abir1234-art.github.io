
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
   
    <!-- Bootstrap CSS -->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel = "stylesheet" href = "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" >

    <title>Register Page</title>
    <style type="text/css">
    </style>
</head>
<body>
<nav class="navbar navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Godenoghter Crud application</font></font></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Basculer la navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    </div>
    </nav>
    <div class="container">
      <?php if($error = $this->session->set_flashdata('reponse')):?>
        <div class = "alert alert-ignorable alert-success">
          <?php echo $error;?>
        </div>
      <?php endif;?>

        <div class="row">
            <div class="col-lg-12"><br />

                <td><?php echo anchor("home_crud/create",'Create',['class'=>'btn btn-primary']);?></td>

            </div>
        </div>
        <br />
        <br />       
        <table class = "table table-striped table-hover">
            <thead>
                   <tr>
                        <th> <font style = "vertical-align: inherit;"> <font style = "vertical-align: inherit;"> # </font> </font> </th>
                        <th> <font style = "vertical-align: inherit;"> <font style = "vertical-align: inherit;">Nom </font> </font> </th>
                        <th> <font style = "vertical-align: inherit;"> <font style = "vertical-align: inherit;"> Prénom </font> </font> </th>
                        
                
                        <th> <font style = "vertical-align: inherit;"> <font style = "vertical-align: inherit;">Mail </font> </font> </th>
                        <th> <font style = "vertical-align: inherit;"> <font style = "vertical-align: inherit;"> Téléphone </font> </font> </th>
                        
                        <th> <font style = "vertical-align: inherit;"> <font style = "vertical-align: inherit;">Adresse </font> </font> </th>
                       
                        <th> <font style = "vertical-align: inherit;"> <font style = "vertical-align: inherit;"> Ville</font> </font> </th>
                        <th> <font style = "vertical-align: inherit;"> <font style = "vertical-align: inherit;">Opérations</font> </font> </th>
                       
                      
                  </tr>
            </thead>
            <tbody>
                
                
               
                <?php  if (count ((array) $records)):?>
                    <?php foreach($records as $record){ ?>
                        <tr>
                           <td><?php echo $record->id;?></td>
                           <td><?php echo $record->nom;?></td>
                           <td><?php echo $record->prenom;?></td>
                           <td><?php echo $record->mail;?></td>
                           <td><?php echo $record->telephone;?></td>
                           <td><?php echo $record->adresse;?></td>
                           <td><?php echo $record->ville;?></td>
<td><?php echo anchor("home_crud/update/{$record->id}",'Update',['class'=>'btn btn-success']);?></td>
<td><?php echo anchor("home_crud/delete/{$record->id}",'Delete',['class'=>'btn btn-danger']);?></td>
                        </tr>
                    <?php }?>
                    <?php else: ?>
                    <tr>No records found!!!!</tr>
                  <?php endif; ?>
                
       
                 
             
          
    
            </tbody>
        </table>
    </div>

 <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="<?php echo base_url();?>assets/js/bootstrap.bundle.js"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js" integrity="sha384-lpyLfhYuitXl2zRZ5Bn2fqnhNAKOAaM/0Kr9laMspuaMiZfGmfwRNFh8HlMy49eQ" crossorigin="anonymous"></script>
    -->
</div>
  </body>
</html>



