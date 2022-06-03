<!doctype html>
<html>
<head>
	<?php
	$title = "Авторизация";
	require_once "blocks/head.php";
	?>
</head>
<body>
<?php require_once "blocks/header.php" ?>
<main class="main">
	<div class="wrapper">
	<div id="col">
	<h1>Авторизация</h1>
	<br>
<?php
	require 'db.php';
	$data = $_POST;
	if ( isset($data['do_login']) )
{
		$user = R::findOne('users', 'login = ?', array($data['login']));
		if ( $user )
		{
			if ( password_verify($data['password'], $user->password) )
			{
				$_SESSION['logged_user'] = $user;
				echo '<div style="color:green;">Вы авторизованы!<br/> </div><hr>';
				header ('Refresh: 1; url=/user.php');
			}
				else
			{
				$errors[] = 'Неверно введен пароль!';
			}

		}else
		{
			$errors[] = 'Пользователь с таким логином не найден!';
		}
		if ( ! empty($errors) )
		{
			//выводим ошибки авторизации
			echo '<div id="text-danger" style="color:red;">' .array_shift($errors). '</div><hr>';
		}
}
?>
		<form action="login.php" method="POST">
		<h2>Вход</h2><br>
		<input type="text" name="login" placeholder="Введите логин" value="<?php echo @$data['login']; ?>"><br/>
		<input type="password" name="password" placeholder="Введите пароль" value="<?php echo @$data['password']; ?>"><br/>
		<button class="butn" type="submit"name="do_login">Вход</button>
		<a href="/forgot.php" class="forget">Забыли пароль?</a>

		</form>
	</div>
	</div>
	</div>
	</main>
<?php require_once "blocks/footer.php" ?>

</body>
</html>
