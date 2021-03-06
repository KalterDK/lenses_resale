<?php
if(isset($_POST["action"])) {
	$name = $_POST['name'];                     // Sender's name
	$phone  = $_POST['phone'];                  // Sender's phone number
	$city = $_POST['city'];                     // City
	$post = $_POST['post'];                     // Post
	$radius_left = $_POST['radius_left'];       // Radius Left
	$radius_right = $_POST['radius_right'];     // Radius Right
	$optics_left = $_POST['optics_left'];       // Optics (Diopters) Left
	$optics_right = $_POST['optics_right'];     // Optics (Diopters) Right
	$amount_left = $_POST['amount_left'];       // Amount Left
	$amount_right = $_POST['amount_right'];     // Amount Right
	$price = $_POST['total_price_input-2'];     // Price

	$headers = 'From: Contact Form <supermarketlinz@gmail.com>' . "\r\n" . 'MIME-Version: 1.0' . "\r\n" . 'Content-type: text/html; charset=utf-8';

	$to = 'supermarketlinz@gmail.com';                  // Recipient's email address
	$subject = 'Order from Contact Form ';              // Message title

	$body = nl2br(" Имя: $name \n Телефон: $phone \n Город: $city \n Отделение новой почты: $post \n\n Радиус (левый глаз): $radius_left \n Оптическая сила (левый глаз): $optics_left \n Количество (левый глаз): $amount_left \n\n Радиус (правый глаз): $radius_right \n Оптическая сила (правый глаз): $optics_right \n Количество (правый глаз): $amount_right \n\n Цена: $price грн.") ;

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
	// Check if city has been entered
	if (isset($_POST['city']) && $_POST['city'] == '') {
		$errmsg .= '<p>Пожалуйста укажите ваш город.</p>';
	}
	//Check if post office has been entered
	if ( isset($_POST['post']) && $_POST['post'] == '') {
		$errmsg .= '<p>Пожалуйста укажите ваше отделение новой почты.</p>';
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