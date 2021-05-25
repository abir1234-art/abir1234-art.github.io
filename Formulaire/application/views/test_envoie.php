<!doctype html>
<html>
    <head>
</head>
<body>
<form id="resetPassword" name="resetPassword" method="POST" action="<?php echo base_url(); ?>auto/update_password" onsubmit ='return validate()'>
               <table class="table table-bordered table-hover table-striped">                                      
                   <tbody>
                       <tr>
                           <td>Enter Email: </td>
                           <td>
                               <input type="email" name="user_email" id="email" required>
                           </td>
                       <tr>
                           <td></td>
                           <td><input type = "submit" value="submit" class="button pull-right"></td>
                       </tr>
                   </tbody>    
               </table>
           </form>
</body>
</html>