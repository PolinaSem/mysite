<?php
require_once 'db.php';
$name = $POST['name'];
$surname = $POST['surname'];
$login = $POST['login'];
$email = $POST['email'];
$id = $POST['id'];
mysqli_query($db, UPDATE 'users' SET 'name' = '$name', 'surname' = '$surname', 'login' = '$login', 'email' = '$email' WHERE 'users'.'id' = '$id');
header('Location: /');
 ?>
