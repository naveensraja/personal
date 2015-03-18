<?php

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$content = "Messsage: ".$message."    From: ".$name." ".$email;

mail('naveen.s.raja@gmail.com', "Website Email", $content);

?>