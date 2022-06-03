<!doctype html>
<html>
<head>
<?php
	$title = "Редактирование данных";
	require_once "blocks/head.php";
	?>
</head>
<body>
<?php require_once "blocks/header.php" ?>
<?php
  require "db.php";
  $users_id = $_GET['id'];
  $user = mysqli_query($db, "SELECT * FROM `users` WHERE `id` = '$users_id'");
  $user = mysqli_fetch_assoc($user);
?>
	<main class="main">
	<div class="wrapper">
	<div id="col">
	<h1>Редактирование данных</h1>
	<br>
  <form action="updat.php" method="post">
    <input type="hidden" name="id" value="<?= $user['id']?>">
    <p>Имя: </p>
    <input type="text" name="name" value="<?= $user['name']?>">
    <p>Фамилия: </p>
    <input type="text" name="surname" value="<?= $user['surname']?>">
    <p>Логин: </p>
    <input type="text" name="login" value="<?= $user['login']?>">
    <p>Email: </p>
    <input type="email" name="email" value="<?= $user['email']?>">
    <button class="butn" type="submit" name="button">Изменить</button>
  </form>
</div>
</div>
</main>
<?php require_once "blocks/footer.php" ?>

</body>
</html>
