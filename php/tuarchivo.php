<?php 
copy($_NOMBRE['nombre']['tmp_name'],$_NOMBRE['nombre']['name']); 
copy($_EMAIL['email']['tmp_name'],$_EMAIL['email']['name']); 
copy($_MESSAGE['message']['tmp_name'],$_MESSAGE['message']['name']); 
echo "Tu mensaje a sido enviado."; 
?>
