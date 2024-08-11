<?php

$name = $_POST['Fname'];
$Sname = $_POST['Sname'];
$case = $_POST['case'];
$email = $_POST['email'];
$message = $_POST['message'];

$userDestiny = "rey.salazaar@gmail.com";

$header = "From: $name $Sname" . "\r\n";
$header .= "Email: $email" . "\r\n";
$header .= "X-Mailer: PHP/" . phpversion();

mail($userDestiny,$case,$message,$header);
?>