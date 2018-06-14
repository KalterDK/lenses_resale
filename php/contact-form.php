<?php
if(isset($_POST["action"])) {
	$name = $_POST['name'];         // Sender's name
	$email = $_POST['email'];       // Sender's email address
	$phone  = $_POST['phone'];      // Sender's phone number
	$lenses = $_POST['lenses'];     // Number of lenses
	$diopters = $_POST['diopters']; // Diopters
	$message = $_POST['message'];   // Sender's message
	$headers = 'From: Contact Form <contact-form@supermarketlinz.com.ua>' . "\r\n";

	$to = 'chikanchi.alex@gmail.com';        // Recipient's email address
	$subject = 'Message from Contact Form '; // Message title

	$body = " From: $name \n E-Mail : $email \n Phone: $phone \n\n Lenses: $lenses \n Diopters: $diopters \n\n Message : $message"  ;
	
	// init error message
	$errmsg='';
	// Check if name has been entered
	if (isset($_POST['name']) && $_POST['name'] == '') {
		$errmsg .= '<p>Пожалуйста укажите ваше имя.</p>';
	}
	// Check if email has been entered and is valid
	if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
		$errmsg .= '<p>Пожалуйста укажите ваш действительный e-mail.</p>';
	}
	//Check if phone number has been entered
	if ( isset($_POST['phone']) && $_POST['phone'] == '') {
		$errmsg .= '<p>Пожалуйста укажите ваш номер телефона.</p>';
	}
	//Check if lenses number has been entered
	if ( isset($_POST['lenses']) && $_POST['lenses'] == '') {
		$errmsg .= '<p>Пожалуйста укажите количество линз.</p>';
	}
	//Check if diopters has been entered
	if ( isset($_POST['diopters']) && $_POST['diopters'] == '') {
		$errmsg .= '<p>Пожалуйста укажите диоптрии.</p>';
	}

	$result='';
	// If there are no errors, send the email
	if (!$errmsg) {
		if (mail ($to, $subject, $body, $headers)) {
			$result='<div class="alert alert-success">Благодарим за контакт с нами. Ваше сообщение было успешно отправлено. Мы скоро с Вами свяжемся.</div>';
		}
		else {
		  $result='<div class="alert alert-danger">Извините, произошла ошибка во время отправки сообщения. Пожалуйста попробуйте отправить сообщение позже.</div>';
		}
	}
	else{
		$result='<div class="alert alert-danger">'.$errmsg.'</div>';
	}
	echo $result;
 }