<?php
	//get values from the form
	$name = $_POST['name'];
	$email = $_POST['email'];

	$text = $_POST['comments'];

	$to = "vivian@vivianvion.com, risenhell@gmail.com";
	$subject = "Contacts from Vivianvion.com";
	$message = "Name: ".$name."\r\n"."Email: ".$email."\r\n"."Message: ".$text;

	$from = "vivian@vivianvion.com";
	$headers = "From: ".$from."\r\n";
	$headers .= "Content-type: text/plain; charset=UTF-8"."\r\n";
	
	//send the mail
	$result = mail($to, $subject, $message, $headers);

	//if POST was used, display the message straight away
	if ($_POST) {
		if ($result) print "<script>document.location.href='thankyou.html';</script>";
		else echo 'Sorry, unexpected error. Please try again later';
	}
?>