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
    .btn .btn-primary .pull-lift{
       text-align:center;
    }
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
    <div class="container" style="margin-top:20px";>
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
                <div class="alert alert-success"><?php echo $faileur;?></div>
                <?php } ?>
            </div>
    </div>
    <form action="<?php echo base_url('users_control/create')?>" method="POST">
    
    <br />
    <div class="row">
     
           <div class="row">
              <div class="text-right">
                <div class="col-lg-12"><center><h1>CLIENTS DATA </h1></center></div></div>
                
       
            </div>
        
    </div>    
    <br />
    
 
      
       <hr>
       <div class="text-right">
       <div class="col-lg-12 text-right">
       <div class="text-right">
          <a href="<?php echo base_url().'users_control/create';?>"class="btn btn-primary pull-right" style="width:200px"><i class="fa fa-user fa-fw"></i>ADD CLIENT</a>
        </div>
        </div>
        </div>
    
        <div class="col-md-3">
          <table class="table">
            <tr>
                <td>
                    <select name="" class="form-control" id="id">
                    <option value="0">Show all</option>
                    <option value="1">2017</option>
                    <option value="2">2018</option>
                    <option value="3">2019</option>
                </td>
            </tr>
          </table>
        </div>
          <div class="row">
            <div class="col-md-12">
               
                <table class="table table-striped">
                    
                      <tr style="background-color:#1C1C1C">
                          <th style="color:white">ID</th>
                          <th style="color:white">Nom</th>
                          <th style="color:white">Prénom</th>
                        
                
                          <th style="color:white">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mail</th>
                          <th style="color:white">Téléphone</th>
                        
                          <th style="color:white">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Adresse</th>
                       
                          <th style="color:white">Ville</th>
                          <th style="color:white" with="60">Edit</th>
                          <th  style="color:white" width="100">Delete</th>

                       
                      
                      </tr>
                    
                  
                <?php if(!empty($users)) { foreach($users as $user) { ?>
                <tr>
                        <td><?php echo $user['id']?></td>
                        <td><?php echo $user['nom']?></td>
                        <td><?php echo $user['prenom']?></td>
                        <td><?php echo $user['mail']?></td>
                        <td><?php echo $user['telephone']?></td>
                        <td><?php echo $user['adresse']?></td>
                        <td><?php echo $user['ville']?></td>
                        <td>
                             <a href="<?php echo base_url().'users_control/edit_test/'.$user['id']?>" class="btn btn-primary" style="width:100px"><i class="fa fa-pencil fa-fw"></i>Edit</a>
                        </td>
                        <td>
                             <a href="<?php echo base_url().'users_control/delete/'.$user['id']?>" class="btn btn-danger"style="width:100px"><i class="fa fa-trash-o fa-fw"></i>Effacer</i></a>
                        </td>
                </tr>
                <?php } } else {?>
                <tr>
                     <td colspan="5">Record not found</td>
                </tr>
                <?php } ?>
               

    </table>         
 </div>
    </div>
    </body>
    </html>
