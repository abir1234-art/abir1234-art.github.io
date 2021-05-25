<html>
<head>    
    <title> Envoyer un e-mail Codeigniter </title>
</head>
<body>
<? php
echo $ this-> session- > flashdata ( 'email_sent' ) ;
echo form_open ( 'Auth/sendemailtes/send1' ) ;
?>
<input type = "email" name = "email" requis />
<input type = "submit" value = "SEND MAIL" >
<? php
echo form_close ( ) ;
?>
</body>
</html>