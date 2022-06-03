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
	<?php
		require "db.php";
		$user = R::findOne('users', 'id = ?', array($_SESSION['logged_user']->id));
    ?>
	<main class="main">
	<div class="wrapper">
	<div id="col">

	<?php if($user) : ?>
	<h1>Добро пожаловать, <?php echo $user->name;?> <?php echo $user->surname;?>!</h1>
	<br>
  <h2>Ваши персональные данные: </h2><br>
  <form action="user.php" method="post">
    <table>
      <tr>
        <th>Имя: </th>
        <th>Фамилия: </th>
        <th>Логин: </th>
        <th>Email: </th>
        <th>&#9998;</th>
        </tr>
        <tr>
          <td><?php echo $user->name;?></td>
           <td><?php echo $user->surname; ?></td>
          <td><?php echo $user->login; ?></td>
          <td><?php echo $user->email; ?></td>
          <td><a href="UPDATE.php?id=<?= $user;?>">Редактировать данные</a><br></td>
        </tr>
    </table>
    <br>
    <p>Результаты вашего тестирования: </p>
    <br>
    <div id = "text">
  	<p>Нет результата?<br>
      Пройдите тестирование на профессиональную пригодность!</p>
  	<br>
  	<button type="submit" class="btnn"><a href="test.php">Пройти тестирование</button></a>
  </div>
  <a href="forgot.php">Изменить пароль</a><br>
	<a href ="/logout.php">Выход</a>
	<?php else :?>
	<button type="submit" class="btnn"><a href="regist.php">Регистрация</button></a>
	<button type="submit" class="btnn"><a href="login.php">Авторизация</button></a>
	<?php endif;?>
	</div>
</div>
</main>
<?php require_once "blocks/footer.php" ?>

</body>
</html>
