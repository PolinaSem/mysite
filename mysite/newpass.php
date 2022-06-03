<!doctype html>
<html>
<head>
	<?php 
	$title = "Восстановление пароля";
	require_once "blocks/head.php";
	?>
</head>
<body>
<?php require_once "blocks/header.php" ?>
<main class="main">
	<div class="wrapper">
	<div id="col">
	<h1>Новый пароль</h1>
	<br>
	<?php 
	require 'db.php';
	$data = $_GET;
	if($_SESSION['user'] != NULL) header('Location: /');
	if($data['key'] == NULL) header('Location: /');

	$user = R::findOne('users', 'change_key = ?', array($data['key']));
	if(!$user) header('Location: /');
	
	if(isset($data['change'])){
		$user->password=password_hash($data['password'], PASSWORD_DEFAULT);
		$user->change_key = NULL;
		R::store($user);
		header('Location: /login.php');
	}
	?>
	<form action="newpass.php" method="get">
	
	<input type="hidden" name="key" value="<?php echo $data['key']; ?>">
	<input type="password" name="password" placeholder="Пароль"><br>
	<input type="password" name="password_2" placeholder="Подтвердите пароль"><br>
	<button class="butn" type="submit" name="change">Изменить пароль</button>
	</form>
	</div>
	</div>
	</div>
	</main>
<?php require_once "blocks/footer.php" ?>

</body>
</html>