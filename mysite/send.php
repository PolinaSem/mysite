<?php
$username = $_POST['username'];
$email = $_POST['email'];
$username = htmlspecialchars($username);
$email = htmlspecialchars($email);
$username = urldecode($username);
$email = urldecode($email);
$username = trim($username);
$email = trim($email);
//echo $username;
//echo "<br>";
//echo $email;
if (mail("polly.semenova@mail.ru", "Заявка с сайта", "Имя:".$username.". E-mail: ".$email ,"From: polly.semenova@mail.ru \r\n"))
 {     echo '<div style="color:green;">Спасибо, что обратились к нам!<br> Мы перезвоним Вам в ближайшее время</div><hr>';
			header ('Refresh: 5; url=/index.php');
} else {
    echo "При отправке сообщения возникли ошибки";
}?>