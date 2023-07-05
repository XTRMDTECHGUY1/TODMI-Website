<?php

$name = $_POST['name'];
$name = $_POST['email'];
$name = $_POST['number'];
$name = $_POST['address'];
$name = $_POST['date'];
$name = $_POST['gender'];
$name = $_POST['status'];
$name = $_POST['occupation'];
$name = $_POST['city'];
$name = $_POST['state'];
$name = $_POST['country'];
$name = $_POST['nationality'];
$name = $_POST['language'];
$name = $_POST['note'];
$name = $_POST['message'];

$to = "topdmi1@gmail.com";

$subject = "Mail From Website";
$headers = "From: ".$name. "/r/n";

$txt ="You have recieve an email from ".$name."/r/nEmail:
 ".$email."/r/n Message: ".$message;    

 if($email!=NULL){
    mail($to. $subject, $txt, $headers);
 }

 header('Location:thankyou.html');

?>