<!doctype html>
<html>
<head>
	<?php
	$title = "Регистрация";
	require_once "blocks/head.php";
	?>
</head>
<body>
<?php require_once "blocks/header.php" ?>
<main class="main">
	<div class="wrapper">
	<div id="col">
	<h1>Регистрация</h1>
	<br>
	<?php
require "db.php";
$data = $_POST;

if(isset($data['do_regi']))
{
	$errors = array();

	if ( trim($data['name']) == '' )
		{
			$errors[] = 'Введите имя';
		}
		if ( trim($data['surname']) == '' )
			{
				$errors[] = 'Введите фамилию';
			}
	if ( trim($data['login']) == '' )
		{
			$errors[] = 'Введите логин';
		}
		if ( trim($data['email']) == '' )
		{
			$errors[] = 'Введите Email';
		}

		if ( $data['password'] == '' )
		{
			$errors[] = 'Введите пароль';
		}

		if ( $data['password_2'] != $data['password'] )
		{
			$errors[] = 'Повторный пароль введен не верно!';
		}

		if ( R::count('users', "login = ?", array($data['login'])) > 0)
		{
			$errors[] = 'Пользователь с таким логином уже зарегистрирован!';
		}

		if ( R::count('users', "email = ?", array($data['email'])) > 0)
		{
			$errors[] = 'Пользователь с таким Email уже зарегистрирован!';
		}

		if ( empty($errors) )
		{
			$user = R::dispense('users');
			$user->name = $data['name'];
			$user->surname = $data['surname'];
			$user->login = $data['login'];
			$user->email = $data['email'];
			$user->password = password_hash($data['password'], PASSWORD_DEFAULT);
			R::store($user);
			echo '<div style="color:green;">Вы успешно зарегистрированы!</div><hr>';
			header ('Refresh: 1; url=/login.php');

		}
		else
		{
			echo '<div id="text-danger">' .array_shift($errors). '</div><hr>';
		}
}
?>
	<form action="regist.php" method="POST">
		<label class="text_label" for="name">Имя: </label>
		<input type="text" name="name" placeholder="Введите имя" value="<?php echo @$data['name']; ?>"><br/>
		<label class="text_label" for="surname">Фамилия: </label>
		<input type="text" name="surname" placeholder="Введите фамилию" value="<?php echo @$data['surname']; ?>"><br/>
		<label class="text_label" for="username">Логин: </label>
		<input type="text" name="login" placeholder="Введите логин" value="<?php echo @$data['login']; ?>"><br/>
		<label class="text_label" for="email">Email: </label>
		<input type="email" name="email" placeholder="Введите email" value="<?php echo @$data['email']; ?>"><br/>
		<label class="text_label" for="email">Пароль: </label>
		<input type="password" name="password" placeholder="Введите пароль" value="<?php echo @$data['password']; ?>"><br/>
		<label class="text_label" for="email">Подтвердите пароль: </label>
		<input type="password" name="password_2" placeholder="Подтвердите пароль" value="<?php echo @$data['password_2']; ?>"><br/>
		<button class="butn" type="submit"name="do_regi">Зарегистрироваться</button>

		</form>
	</div>
	</div>
	</div>
	</main>
<?php require_once "blocks/footer.php" ?>

</body>
</html>
