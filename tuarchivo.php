<?php 
echo "Gracias tu mensaje pronto sera respondido";
$nom = $_POST["nombre"];
$ema = $_POST["email"];
$mes = $_POST["message"];

echo "El nombre es:".$nom."<br>";
echo "El correo es:".$ema."<br>";
echo "El mensaje es:".$mes."<br>";
?>