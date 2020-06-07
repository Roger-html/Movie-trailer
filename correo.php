<?
 if(isset($_POST['enviar'])){
  if(!empty(_POST['nombre']) && !empty($_POST['email']) && !empty($_POST['message'])){
  
   $nombre = _POST['nombre'];
   $email = _POST['email'];
   $msg = _POST['message'];
   $header = "From: anonymous@example.com". "\r\n";
   $header = "Reply-To: anonymous@example.com". "\r\n";
   $header = "X-Mailer: PHP/". phpversion();
   $mail = @mail($nombre,$email,$msg,$header);
   if($mail){
     echo "<h4>¡Mail enviado exitosamente!</h4>";
   }
  }
 }


