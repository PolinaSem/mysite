<!doctype html>
<html>
<head>
<?php
	$title = "Обратная связь";
	require_once "blocks/head.php";
	?>
</head>
<body>
<?php
session_start();
require_once "blocks/header.php";

$_SESSION['user_name'] ="";
$_SESSION['email'] = "";
$_SESSION['tel'] ="";
$_SESSION['message'] ="";

$_SESSION['error_username'] = "";
$_SESSION['success_mail'] = "";
$_SESSION['error_email']  = "";
$_SESSION['error_tel']= "";
$_SESSION['error_message']= "";
?>
<main class="main">
	<div class="wrapper">
	<div id="col">
	<h1>Обратная связь</h1>
	<br>
	<div class="text-success"><?=$_SESSION['success_mail']?></div>

	<form action="feed_back.php" method="post">
	<label class="text_label" for="username">Имя: </label>
		<input type="text" name="username" value="<?=$_SESSION['user_name']?>" placeholder="Введите имя" >
		<div class="text-danger"><?=$_SESSION['error_username']?></div><br>
		<label class="text_label" for="email">Email: </label>
		<input type="email" name="email" value="<?=$_SESSION['email']?>" placeholder="Введите email">
		<div class="text-danger"><?=$_SESSION['error_email']?></div><br>
		<label class="text_label" for="tel">Номер телефона 8-xxx-xxx-xx-xx: </label>
		<input type="tel" name="tel" <?php $str = strval(79817778833);
$str = ''.substr($str, 0, 1).'-'.substr($str, 1, 3).'-'.substr($str, 4, 3).'-'.substr($str, 7, 2).'-'.substr($str, 9, 2); ?> value="<?=$_SESSION['tel']?>" placeholder="Введите номер телефона">
		<div class="text-danger"><?=$_SESSION['error_tel']?></div><br>
		<label class="text_label" for="message">Сообщение: </label>
		<textarea name="message" placeholder="Введите сюда ваше сообщение"><?=$_SESSION['message']?></textarea>
		<div class="text-danger"><?=$_SESSION['error_message']?></div>
		<button type="submit" class="btn">Отправить</button>
	</form>
</div>
</div>
	</main>
<?php require_once "blocks/footer.php" ?>

</body>
</html>
