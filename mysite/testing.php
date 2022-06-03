<!DOCTYPE>
<html>
<?php require 'dbconfig.php';
session_start(); ?>
<head>
<title>Тестирование для приема на работу</title>
<style>
.button {
  border-radius: 4px;
  background-color: #3775dd;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 28px;
  padding: 20px;
  width: 500px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}
.title{
	background-color: #fafafa;
	font-size: 28px;
  padding: 20px;

}
.button3 {
    border: none;
    color: white;
    padding: 10px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
}
.button3 {
    background-color: white;
    color: black;
    border: 2px solid #ffa500;
}

.button3:hover {
    background-color: #ffa500;
    color: Black;
}
</style>
</head>
<body><center>
<div class="title">Тестирование на вакантное место технического персонала</div>

<?php
	if (isset($_POST['click']) || isset($_GET['start'])) {
		@$_SESSION['clicks'] += 1 ;
		$c = $_SESSION['clicks'];
		if(isset($_POST['userans'])) { $userselected = $_POST['userans'];

			$fetchqry2 = "UPDATE `quiz` SET `userans`='$userselected' WHERE `id`=$c-1";
			$result2 = mysqli_query($con,$fetchqry2);
	  }


  } else {
		$_SESSION['clicks'] = 0;
	}

?>

<div class="bump"><br><form><?php if($_SESSION['clicks']==0){ ?> <button class="button" name="start" float="left"><span>Начать тестирование</span></button> <?php } ?></form></div>

<form action="" method="post">
<table><?php if(isset($c)) {   $fetchqry = "SELECT * FROM `quiz` where id='$c'";
				$result=mysqli_query($con,$fetchqry);
				$num=mysqli_num_rows($result);
				$row = mysqli_fetch_array($result,MYSQLI_ASSOC); }
		  ?>

<tr><td><h3><br><?php echo @$row['que'];?></h3></td></tr>

<?php if($_SESSION['clicks'] > 0 && $_SESSION['clicks'] < 6){ ?>

  <?php if ($row['type'] == 'SHORT'){ ?>

    <tr><td><input required type="text" name="userans">&nbsp;<br></td></tr>

  <?php } else{
  ?>


  <tr><td> 1<input required type="radio" name="userans" value="<?php echo $row['option 1'];?>">&nbsp;<?php echo $row['option 1']; ?><br>
  <tr><td> 2<input required type="radio" name="userans" value="<?php echo $row['option 2'];?>">&nbsp;<?php echo $row['option 2'];?></td></tr>
  <tr><td> 3<input required type="radio" name="userans" value="<?php echo $row['option 3'];?>">&nbsp;<?php echo $row['option 3']; ?></td></tr>
  <tr><td> 4<input required type="radio" name="userans" value="<?php echo $row['option 4'];?>">&nbsp;<?php echo $row['option 4']; ?><br><br><br></td></tr>


  <?php } ?>

  <tr><td><button class="button3" name="click" >Далее</button></td></tr>
  <?php } ?>

<form>

 <?php if($_SESSION['clicks']>5){
	$qry3 = "SELECT `ans`, `userans` FROM `quiz`;";
	$result3 = mysqli_query($con,$qry3);
	$storeArray = Array();
	while ($row3 = mysqli_fetch_array($result3, MYSQLI_ASSOC)) {
     if($row3['ans']==$row3['userans']){
		 @$_SESSION['score'] += 1 ;
	 }
}

 ?>


 <h2>Результат</h2>
 <span> Правильных ответов:&nbsp;<?php echo $no = @$_SESSION['score'];
 session_unset(); ?></span><br>
<?php } ?>

</center>
</body>
</html>
