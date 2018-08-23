<?php

if (isset($_POST['submit'])) {
	$name = $_POST['name'];
	$subject = $_POST['subject'];
	$mailfrom = $_POST['mail'];
	$message = $_POST['message'];

	$mailTo = "sihagmukesh22@gmail.com";
	$header = "From: ".$mailfrom;
	$txt = "You have received an email from ".$name.".\n\n".$message; 

	mail($mailTo, $subject, $txt,$header);
	header("Location: index.php?mailsend");
}