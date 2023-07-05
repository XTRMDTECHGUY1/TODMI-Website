<?php

$name = $_POST['name'];
$name = $_POST['email'];
$name = $_POST['number'];

$to ="topdmi1@gmail.com";

$subject = "Mail From Website";
$headers = "From: ".$name. "/r/n";

$txt ="Thank you for confessing and receiving Christ as you lord and saviour ".$name."/r/nEmail:
 ".$email."/r/n Number: ".$number;    

 if($email!=NULL){
    mail($to. $subject, $txt, $headers);
 }

 header('Location:thankyou.html');


?>