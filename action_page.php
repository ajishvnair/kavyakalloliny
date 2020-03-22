<?php
if($_POST["submit"]) {
    $recipient="your@email.address";
    $subject="Form to email message";
	$fname=$_POST["fname"];
	$lname=$_POST["lname"];
	$country=$_POST["country"];
	$message=$_POST["message"];
	$mailBody="Name: $fname."".$lname\nCountry: $country\n\n$message";
	mail($recipient, $subject, $mailBody);

    $thankYou="<p>Thank you! Your message has been sent.</p>";
}

?>