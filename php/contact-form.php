<?php
if(isset($_POST["action"])) {
	$name = $_POST['name'];        // Sender's name
	$email = $_POST['email'];      // Sender's email address
	$phone  = $_POST['phone'];     // Sender's phone number
	$message = $_POST['message'];  // Sender's message
	$headers = 'From: Contact Form <contact-form@supermarketlinz.com.ua>' . "\r\n";

	$to = 'contact@webmaerd.com';     // Recipient's email address
	$subject = 'Message from Contact Form '; // Message title

	$body = " From: $name \n E-Mail: $email \n Phone : $phone \n Message : $message"  ;
	
	// init error message
	$errmsg='';
	// Check if name has been entered
	if (isset($_POST['name']) && $_POST['name'] == '') {
		$errmsg .= '<p>Please enter your name.</p>';
	}
	// Check if email has been entered and is valid
	if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
		$errmsg .= '<p>Please enter a valid email address.</p>';
	}
	//Check if phone number has been entered
	if ( isset($_POST['phone']) && $_POST['phone'] == '') {
		$errmsg .= '<p>Please enter your phone number.</p>';
	}
	
	//Check if message has been entered
	if ( isset($_POST['message']) && $_POST['message'] == '') {
		$errmsg .= '<p>Please enter your message.</p>';
	}
	
	$result='';
	// If there are no errors, send the email
	if (!$errmsg) {
		if (mail ($to, $subject, $body, $headers)) {
			$result='<div class="alert alert-success">Thank you for contacting us. Your message has been successfully sent. We will contact you very soon!</div>';
		}
		else {
		  $result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later.</div>';
		}
	}
	else{
		$result='<div class="alert alert-danger">'.$errmsg.'</div>';
	}
	echo $result;
 }