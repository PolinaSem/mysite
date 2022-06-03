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
	<h1>Восстановление пароля</h1>
	<br>
	<?php 
	require 'db.php';
	$data = $_POST;
	if ( isset($data['forgot']) )
{
	$user = R::findOne('users', 'email = ?', array($data['email']));
	if ( $user )
		{
			$key = md5($user->login.rand(1000, 9999));
			$user->change_key = $key;
			R::store($user);
			
			$url = $site_url.'newpass.php?key='.$key;
			$message = $user->login.", был выполнен запрос на изменение вашего пароля. \n\n Для изменения перейдите по ссылке: ".$url."\n Если это были не вы, то советуем вам изменить пароль!";
			
			mail($data['email'], 'Подтвердите действие', $message);
			header('Location: /');
		}
		else {
			echo '<div style="color:red;">Данный email не зарегистрирован</div><hr>';
		}
}
	?>
	<form action="forgot.php" method="POST">
	<label class="text_label" for="email">Email: </label>
	<input type="email" name="email" placeholder="Введите email"><br>
	<button class="butn" type="submit"name="forgot">Отправить письмо</button>
	</form>
	</div>
	</div>
	</div>
	</main>
<?php require_once "blocks/footer.php" ?>

</body>
</html>