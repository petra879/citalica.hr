<?php
$primatelj = "petra879@gmail.com";
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$msg = $_POST['msg'];
mail($primatelj,$name,$email,$subject,$msg);
?>