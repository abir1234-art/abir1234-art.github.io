<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>
    <link rel="stylesheet" type="text/css" href="<?php base_url(); ?>assets/css/bootstrap.css">
    <style type="text/css">
     body{
         background-image:url('image2.jpg');
         background-repeat: no-repeat;
         height: 100%;
         background-position: center;
         background-size: cover;
         background-size: fixed
       
    


   }
     .btn{
         margin-top: 40px;
         margin-bottom: 150px;
     }
     input#file-input{
       display : none;
       margin-top: 100px;
       margin-bottom: 350px;
       width:800px;
       height:1000px;
     }
     input#file-input + label{
       background-color:#0066ff;
       padding:8px;
       color:#fff;
       border:2px solid #9ec3ff;
       border-radius:9px;
       margin-left:20px;
    
     }
     input#file-input + label:hover{
       background-color:#3b73ce;
       border-color:#729fe7;
       cursor:pointer;

     }
    </style>
      <script>
       function resetForm() {
         document.getElementById("form").reset();
       }
    </script>

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
          <a class="nav-link active" href="<?php echo base_url('userpage');?>"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">User Page
            </font></font><span class="visually-hidden"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">(actuel)</font></font></span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">User Admin</font></font></a>
        </li>
        <li class="nav-item">
      <a class="nav-link" href="<?php echo base_url('sendemail');?>"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Contact</font></font></a></a>
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
    <div class="container">
      <h2>Contact Us</h2>
      <?php if($error=$this->session->flashdata('msg')){?>
      <p style="color:green;"><strong>Success?</strong><?php echo $error;?></p>
      <?php }?>


      <?= $this->session->flashdata('success') ?>
      <form action="<?php echo base_url('test_page/contact'); ?>" method="POST" id="form">
      <div class="form-group">
            <input name="name" placeholder="Your name" type="text" value="<?php echo set_value('name'); ?>" class="form-control" />
            <?php echo form_error('name', '<span class="text-danger">','</span>'); ?>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control" id="email" name="email" placeholder="Enter Email">
        </div>  
        <div class="form-group">
            <label for="subject">Subject</label>
            <input type="text" class="form-control" id="subject" name="subject" placeholder="Enter Subject Name">
        </div>  
        <div class="form-group">
            <label for="message">Message</label>
            <textarea class="form-control" name="message" id="message" placeholder="Enter message here"></textarea>
        </div>  
        <div class="form-group">
            <button class="btn btn-primary" type="submit">Send</button>
            <button class="btn btn-primary" type="reset" onclick="resetForm();">Réinitialiser le formulaire</button>
            <form action="<?=base_url()?>Dompdf_controller/index" method="POST" id="form">
            <button class="btn btn-primary" type="submit" >télécharger</button>
  
            <input id="file-input" type="file">
            <label for="file-input"><i class="glyphicon glyphicon-open"></i>&nbsp;choisir un fichier</label>
            <br>
            <span>
        <strong style="color:white">Type de fichier:</strong>
        <span  style="color:white" id="file-name">None</span>
      </span>
          </form>
      </div>
      </form>
      
      <script>
        let input_file=documentgetElementById('file-input');
        let fileNameField=documentgetElementById('file-name');
        inputfile.addeventListener('change',function(event){
          let uploadedFileName = event.target.files[0].name;
          fileNameField.textContent = uploadedFileName;
        })
      </script>
            
            
            
       
        
    </div>
    

   
  </body>
</html>