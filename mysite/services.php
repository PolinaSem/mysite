<!doctype html>
<html>
<head>
	<?php 
	$title = "Информация об услугах";
	require_once "blocks/head.php";
	?>
</head>
<body>
	<?php require_once "blocks/header.php" ?>
	<main class="main">
	<div class="contents">
	<div class="services">
			<h1>Прайс на услуги</h1>
			<br>
			<div class="serv">
			<img src="img/j.jpg" alt="Img">
				<h5>Уборка квартир</h5>
				<p>
				Генеральная уборка - от 60 руб за кв/м
				<br>
				Уборка после ремонта - от 90 руб за кв/м
				<br>
				Уборка после строительства - от 90 руб за кв/м
				<br>
				</p>
			</div>
				<div class="serv">
						<img src="img/d.jpg" alt="Img">
						<h5>Уборка офисов</h5>
						<p>
						Генеральная уборка офисов - от 50 руб за кв/м
						<br>
						Уборка после ремонта офисов - от 70 руб за кв/м
						<br>
						Ежедневная уборка офисов - от 40 руб за кв/м
						</p>
				</div>
					<div class="serv">
							<img src="img/r.jpg" alt="Img">
							<h5>Химчистка мебели</h5>
							<p>
							Химчистка ковровых покрытий - от 150 руб за кв/м
							<br>Химчистка мягкой мебели - от 900 руб за кв/м
							</p>
					</div>
						<div class="serv">
					<img src="img/k.jpg" alt="Img">
					<h5>Мытье</h5>
						<p>
						Мойка окон - от 90 руб за кв/м
						<br>Мойка фасадов - от 60 руб кв/м
						<br>Мойка окон и фасадов с применением автовышки - от 110 руб кв/м
						<br>Мойка окон и фасадов с привлечением альпинистов - от 100 руб за кв/м
						</p>
					</div>
			</div>
		</div>
<style>

.button {
  border-radius: 4px;
  background-color: #3775dd;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 14px;
  padding: 0 20px;
  cursor: pointer;
  margin: 5px;
  position: relative;
	left: 50%;
	transform: translate(-50%, 0);
	padding: 0 20px;  
	border-radius: 4px;
	height: 32px;
	line-height: 32px;
	font-weight: 500;
	text-decoration: none;
	box-shadow: 0 2px #21487f;
}
.button:hover {
	background-color: #002fed;
}
.label {
  display: block;
  margin-bottom: 0.5rem;
}
.wrap #c {
	width:30%;
	margin-left:30%;
	padding:1%;
	float: left;

}

.wrap #c input {
display: block;
  width: 100%;
  height: calc(2.25rem + 2px);
  padding: 0.375rem 0.75rem;
  font-family: inherit;
  font-size: 1rem;
  font-weight: 400;
  line-height: 1.5;
  color: #212529;
  background-color: #fff;
  background-clip: padding-box;
  border: 1px solid #bdbdbd;
  border-radius: 0.25rem;
  transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}
.wrap #c input:focus {
border:2px solid #42aaff;
}
</style>
<div class="wrap">
	<div id="c">
<form action="send.php" method="post">
<label class="label" for="username">Имя: </label>
<input type="text" name="username" placeholder="Введите Имя" required><br>
<label class="label" for="email">Email: </label>
<input type="text" name="email" placeholder="Введите email" required>
<div class="bump"><button class="button" name="start" float="left">Заказать уборку</button></form></div>
</div>
</div>

	</main>
<?php require_once "blocks/footer.php" ?>

</body>
</html>