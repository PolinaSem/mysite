<?php
	session_start();

	unset($_SESSION['user_name']);
	unset($_SESSION['email']);
	unset($_SESSION['tel']);
	unset($_SESSION['message']);

	unset($_SESSION['success_mail']);
	unset($_SESSION['error_username']);
	unset($_SESSION['error_email']);
	unset($_SESSION['error_tel']);
	unset($_SESSION['error_message']);

	function redirect() {
		header('Location: feedbac.php');
		exit;
	}

	//session_abort();

	$user_name = trim($_POST['username']);
	$from = trim($_POST['email']);
	$tel = trim($_POST['tel']);
	$message = trim($_POST['message']);

	if(strlen($user_name) <= 1) {
		$_SESSION['error_username'] = "Введите корректное имя";
		$_SESSION['email']=$from;
		$_SESSION['tel']=$tel;
		$_SESSION['message']=$message;
		redirect();
	}
	else if(strlen($from) < 5 || strpos($from,"@") == false) {
		$_SESSION['error_email'] = "Вы ввели некорректный email";
		$_SESSION['user_name']=$user_name;
		$_SESSION['tel']=$tel;
		$_SESSION['message']=$message;
		redirect();
	}
	else if(strlen($tel) <= 11) {
		$_SESSION['error_tel'] = "Используйте только цифры!";
		$_SESSION['user_name']=$user_name;
		$_SESSION['email']=$from;
		$_SESSION['message']=$message;
		redirect();
	}
	else if(strlen($message) <= 15) {
		$_SESSION['error_message'] = "Сообщение не менее 15 символов";
		$_SESSION['user_name']=$user_name;
		$_SESSION['email']=$from;
		$_SESSION['tel']=$tel;
		$_SESSION['message']=$message;
		redirect();
	}
	else {
    $tel = "=?utf-8?B?".base64_encode($tel)."?=";
    $headers = "From: $from\r\nReply-to: $from\r\nContent-type:text/plain, charset=utf-8\r\n";
    mail("polly.semenova@mail.ru", $tel, $message, $headers);
    $_SESSION['success_mail'] = "Вы успешно отправили письмо!";
    redirect();

  }
?>
