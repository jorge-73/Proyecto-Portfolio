<?php 
include('conexion.php');

$name = $_POST['sender-name'];
$email = $_POST['sender-email'];
$message = $_POST['message'];

$insertar = mysqli_query($connect, "INSERT INTO Contact VALUES (DEFAULT, '$name', '$email', '$message')");

header('Location: index.html?ok_BD#contact');
?>