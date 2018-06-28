<?php
if(isset($_POST["action"])) {
	$name = $_POST['name'];                 // Sender's name
	$phone  = $_POST['phone'];              // Sender's phone number
	$radius = $_POST['radius'];             // Radius
	$optics = $_POST['optics'];             // Optics (Diopters)
	$package_type = $_POST['package_type']; // Package Type
	$amount = $_POST['amount'];             // Amount
	$price = $_POST['total_price_input-1']; // Price
	$headers = 'From: Contact Form <supermarketlinz@gmail.com>' . "\r\n";

	$to = 'supermarketlinz@gmail.com';        // Recipient's email address
	$subject = 'Order from Contact Form '; // Message title

	$body = " From: $name \n Phone: $phone \n\n Radius: $radius \n Diopters: $optics \n Package Type: $package_type \n Amount: $amount \n\n Price: $price" ;
	
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