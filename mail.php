<?php
if(isset( $_GET['name']))
  $name = $_GET['name'];
if(isset( $_GET['email']))
  $email = $_GET['email'];
if(isset( $_GET['message']))
  $message = $_GET['message'];
if(isset( $_GET['subject']))
  $subject = $_GET['subject'];

$content="From: $name \n Email: $email \n Message: $message";
$recipient = "info@irinamityugova.me";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $content, $mailheader) or die("Error!");
echo "Email sent!";
?>