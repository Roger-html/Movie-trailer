<?php 
$nom = $_POST["nombre"];
$ema = $_POST["email"];
$mes = $_POST["message"];
$destino = "From: roger4214001@gmail.com";
$email= @mail($destino,$nom,$ema,$mes);
if($email)
echo "<h4>¡Mail enviado exitosamente!</h4>";
?>

