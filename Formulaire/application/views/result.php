
<body>

 <div id="content">
 <div class="col-md-12">
    <div id="table">
    <table class="table">
   
    <tr style="background-color:#3386FF">
    <th  scope="col"  style="color:white">Référence</th>
    <th  scope="col"  style="color:white">Désignation</th>
    <th  scope="col"  style="color:white">Prix</th>
                        
                
    <th scope="col"  style="color:white">Quantité</th>
    <th  scope="col"  style="color:white">&nbsp;&nbsp;&nbsp;&nbsp;Date&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                       
    <th scope="col"  style="color:white">&nbsp;&nbsp;Action&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
    </tr>
                   <?php $no=1; 
                         foreach ($mahasiswa as $row) { ?>
                   <tr>
                       <td><?php echo $row->reference ?></td>
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
  <?php echo $this->pagination->create_links();?>
  <br />
  
 
 </div>
 </div>
 </div>
 </div>
</body>

    


