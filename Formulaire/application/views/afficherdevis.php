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
    </head>
    <style>
       .img {
        width: 50px;
    }
    </style>
<body>
<page_header>
    <div id="content">
    <table>
    <tr>
         <td style="position: absolute; left:6% ; top:5%;">
         <img src="https://www.ljtmaroc.com/images/logo.png" width="100" height="100">
          </td>
        <br />
        <br />
        
        <td>
        <br />
        <br />
        <p style="text-align:right">
        <?php foreach($posts as $post) { ?>
        <h5 style="position: absolute; left:75% ; top:10%;"><b>DEVIS:</b>N°<?php echo $post->ref_devis;?></h5><br />
        <h5 style="position: absolute; left:75% ; top:15%"><b>Date :</b><?php echo $post->date;?></h5><br />
        <h5 style="position: absolute; left:75% ; top:20%"><b >Code Client :</b><?php echo $post->ref_client;?></h5>
        <?php };?>
        </td>

        </table>
        <table style="float:left">
        <tr>
        <td><img src="assets/img/ljtmaroc.png" alt=""></td>
        <td>
        <p style="position: absolute; left:5% ; top:25%;">
        Entreprise LJT MAROC<br />
        Groupe Attakadoum <br />
        GH 2-17, 2 éme étage, Bernoussi <br />
        Casablanca, Maroc<br />
         Tél:+212(0)661-308-858<br />
         Mail:contact@ljtmaroc.com</p></td>
         </tr>
         </table>
        
    </div>
    </page_header>
    
    <p style="position: absolute; left:75% ; top:25%">
        Devis valable <?php echo $post->duree;?>&nbsp;&nbsp;jours

        <br /> 
        <table>
         <tr style="position: absolute; left:70% ; top:35%">
         <td style="border: 2px solid #333">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $post->gender;?>&nbsp;<?php echo $post->prenom;?>&nbsp;<?php echo $post->nom;?>&nbsp;&nbsp;&nbsp;&nbsp;<br />
        &nbsp;&nbsp;&nbsp;&nbsp;<?php echo $post->mail;?>&nbsp;&nbsp;&nbsp;&nbsp;<br />
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $post->ville;?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br />

        </td>
        </tr>
        </p>
        </table>
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <br/>
        <table style="position: absolute; left:10% ; top:55%"> 
        <thead>
        <tr  style="border: 1px solid #333">
            <th >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Désignation</th>
            <th scope="col">&nbsp;&nbsp;&nbsp;Quantité&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
            <th scope="col">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Prix&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
            <th scope="col">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Total Ht&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>

        </tr>
        </thead>
        <tbody>
        <tr>
        <td style="border: 1px solid #333" ><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $post->nom_produit;?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br/>
            <br/>
          </td>
            <td style="border: 1px solid #333"><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $post->quantite;?> <br />
            <br />
            <br />
            <br /><br /></td>
            <td style="border: 1px solid #333">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo  $post->prix;?><br />
            <br />
            <br />

            <br /></td>
            <td style="border: 1px solid #333"><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0 <br />
            <br />
            <br />

            <br /><br /></td>
        </tr>
    </tbody>
        </table>
        <br />
        <br />
        <br />
        <br />
        <br />
       
        <br/><br />

       
        <footer> 
        <p style="position: absolute; left:10% ;">
        Groupe Attakadoum, GH 2-17, 2 éme étage, Bernoussi, Casablanca, Maroc, contact@ljtmaroc.com,+212(0)661-308-858,+212(0)661-735-950
		</p>
    </footer>
    <br />
    <a href="<?php echo base_url('control/cetakkartu/'. $post);?>">
    <button class="btn-success btn">
        Cetak Kartu Berobat
    </button>
</a>
    
  
  


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
</body>
</html>