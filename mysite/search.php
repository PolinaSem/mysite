<?php 
	$connection = mysqli_connect('127.0.0.1:3306','root','','search');
	
	if(isset($_POST['search-btn'])){
		$search =  $_POST['search'];
		$query_uborka = mysqli_query($connection, "SELECT * FROM uborka WHERE name = '$search' OR text = '$search' ");
	}
	else{
		$query_uborka = mysqli_query($connection, "SELECT * FROM uborka");
	}
?>
<!doctype html>
<html>
<head>
<?php 
	$title = "Контактная информация";
	require_once "blocks/head.php";
	?>
</head>
<body>
<?php require_once "blocks/header.php" ?>
	<main class="main">
	<div class="wrapper">
	<div id="col">
	<h1>Результаты поиска</h1>
	<br>
	<?php
		$query_uborka;
		while ($new = mysqli_fetch_assoc($query_uborka))
			echo "<h3>" .$new['name']."</h3><br><p>" .$new['text']."</p><br>";
	?>
	</div>
</div>
</main>
<?php require_once "blocks/footer.php" ?>

</body>
</html>