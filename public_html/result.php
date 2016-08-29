<?php 
	
	// include the file which has our secret keys
	include('../secret.inc.php');

	// Check to see if the name input field has been set
	if(isset($_POST['name'])){
		// If set put the value into a variable
		$name = $_POST['name'];
	}
	// Check to see if the email input field has been set
	if(isset($_POST['email'])){
		// If set put the value into a variable
		$email = $_POST['email'];
	}
	// Check to see if the reCAPTCHA form as been checked
	if(isset($_POST['g-recaptcha-response'])){
		// If set put the value into a variable
		$captcha = $_POST['g-recaptcha-response'];
	}

	// If captcha variable is empty
	if(!$captcha){
		echo '<h2>Please Check the captcha form.</h2>';
		exit;
	}
	// Send a request to the API
	// The request needs your secret_key, response, and remoteip
	$response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".GOOGLE_SECRET."&response=".$captcha."&remoteip=".$_SERVER['REMOTE_ADDR']);
	// Returns a JSON object which we need to decode into an array
	$data = json_decode($response);

	// If there is a success variable in the data array AND that value is true
	if(isset($data->success) AND $data->success==true){
		echo "<h2>Thanks $name for signing up</h2>";
	} else {
		echo '<h2>You are a spammer, get out</h2>';
	}

