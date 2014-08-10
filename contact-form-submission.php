<?php

// check for form submission - if it doesn't exist then send back to contact form
if (!isset($_POST["save"]) || $_POST["save"] != "contact") {
    header("Location: contact-form.php"); exit;
}
	
// get the posted data
$name = $_POST["contact_name"];
$email_address = $_POST["contact_email"];
$message = $_POST["contact_message"];
		
// check if an error was found - if there was, send the user back to the form
if (isset($error)) {
    header("Location: contact-form.php?e=".urlencode($error)); exit;
}
		
// write the email content
$email_content = "Name: $name\n";
$email_content .= "Email Address: $email_address\n";
$email_content .= "Message:\n\n$message";
	
// send the email
mail ("citysynth@gmail.com", "New Contact Message", $email_content);
	
// send the user back to the form
header("Location: contact-form.php?s=".urlencode("Thank you for your message.")); exit;

?>
