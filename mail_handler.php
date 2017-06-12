<?php 
if(isset($_POST['submit'])){
    $to = "contato@kips.com.br"; // this is your Email address
    $from = "contato@kips.com.br"; // this is the sender's Email address
    $subject =  $_POST['email'];
    $subject2 = "Confirmação de Contato";
    $message = $_POST['message'];
    $message2 = "Confirmamos seu contato! Em breve responderemos para este email";

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($_POST['email'],$subject2,$message2,$headers2); // sends a copy of the message to the sender
    header('Location: index.html');
    }
?>