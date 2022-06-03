<!doctype html>
<html>
<head>
	<?php
	$title = "Информация о вакансиях";
	require_once "blocks/head.php";
	?>
</head>
<body>
<?php require_once "blocks/header.php" ?>
	<main class="main">
	<div class="wrapper">
	<div id="col">

	<h1>Вакансии</h1>
	<br>
	<h2>Нам нужны:</h2><br>
	<h4>- Менеджер по продаже клининговых услуг</h4>
	<p>Конкурсный набор на вакансию Менеджер по продаже клининговых услуг.</p><br>
	<h4>- Технический персонал</h4>
	<p>Требуются уборщицы, дворники, операторы поломоечных машин, сборщики тележек в Торговые центры и офисные помещения во всех районах города в графиках 2/2 или 5/2.</p><br>
	<h4>- Сотрудники мобильной бригады отдела спецработ</h4>
	<p>Сотрудники, которым нравится наводить чистоту, которые хотят получать за результаты своей работы.</p><br>
	<br>
	<div id = "text">
	<p>Прежде чем мы пригласим Вас на собеседование,войдите и <br>
	пройдите тестирование на профессиональную пригодность</p>
	<br>
	<button type="submit" class="btnn"><a href="#popup">Пройти тестирование</button></a>
</div>
</div>
	<div id="popup" class="popup">
	<a href="#header" class="popup_area"></a>
	<div class="popup_body">
	<div class="popup_content">
	<a href="#header" class="popup_close">x</a>
	<div class="popup_title">Авторизация</div>
	<div class="popup_text">
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
	<form action="#popup" method="POST">
	<input type="text" name="login" placeholder="Введите логин" value="<?php echo @$data['login']; ?>"><br/>
	<input type="password" name="password" placeholder="Введите пароль" value="<?php echo @$data['password']; ?>"><br/>
	<a href="/forgot.php" class="forget">Забыли пароль?</a>
	<button type="submit"name="do_login">Войти</button><br>
	<a href="/regist.php" class="forget"> У вас нет аккаунта? Зарегистрируйтесь!</a>
	</form>
	</div>
	</div>
	</div>
	</div>
	</main>
<?php require_once "blocks/footer.php" ?>

</body>
</html>
