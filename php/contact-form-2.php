<?php
if(isset($_POST["action"])) {
	$name = $_POST['name'];                             // Sender's name
	$phone  = $_POST['phone'];                          // Sender's phone number
	$radius-left = $_POST['radius-left'];               // Radius Left
	$radius-right = $_POST['radius-right'];             // Radius Right
	$optics-left = $_POST['optics-left'];               // Optics (Diopters) Left
	$optics-right = $_POST['optics-right'];             // Optics (Diopters) Right
	$package_type-left = $_POST['package_type-left'];   // Package Type Left
	$package_type-right = $_POST['package_type-right']; // Package Type Right
	$amount-left = $_POST['amount-left'];               // Amount Left
	$amount-right = $_POST['amount-right'];             // Amount Right
	$price = $_POST['total_price_input-2'];             // Price
	$headers = 'From: Contact Form <supermarketlinz@gmail.com>' . "\r\n";

	$to = 'supermarketlinz@gmail.com';        // Recipient's email address
	$subject = 'Order from Contact Form '; // Message title

	$body = " From: $name \n Phone: $phone \n\n Radius (left eye): $radius-left \n Diopters (left eye): $optics-left \n Package Type (left eye): $package_type-left" \n Amount (left eye): $amount-left \n\n Radius (right eye): $radius-right \n Diopters (right eye): $optics-right \n Package Type (right eye): $package_type-right" \n Amount (right eye): $amount-right \n\n Price: $price ";

	// init error message
	$errmsg='';
	// Check if name has been entered
	if (isset($_POST['name']) && $_POST['name'] == '') {
		$errmsg .= '<p>Пожалуйста укажите ваше имя.</p>';
	}
	//Check if phone number has been entered
	if ( isset($_POST['phone']) && $_POST['phone'] == '') {
		$errmsg .= '<p>Пожалуйста укажите ваш номер телефона.</p>';
	}

	$result='';
	// If there are no errors, send the email
	if (!$errmsg) {
		if (mail ($to, $subject, $body, $headers)) {
			$result='<div class="alert alert-success">Благодарим за контакт с нами. Ваш заказ был успешно отправлен. Мы скоро с Вами свяжемся.</div>';
		}
		else {
		  $result='<div class="alert alert-danger">Извините, произошла ошибка во время отправки сообщения. Пожалуйста попробуйте отправить заказ позже или свяжитесь с нами по телефону + 38 (066) 641-6300</div>';
		}
	}
	else{
		$result='<div class="alert alert-danger">'.$errmsg.'</div>';
	}
	echo $result;
 }