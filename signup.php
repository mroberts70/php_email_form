<?php

		//mail variables
		$fullName = $_REQUEST['fullName'];
		$websiteAddress = $_REQUEST['websiteAddress'];
		$contact_email = $_REQUEST['contactEmail'];
		$phone = $_REQUEST['phone'];

		//email send information

		$Subject = "New Email List Submission";

		//email headers
		$headers = "From: ".$fullName." <".$contactEmail.">\r\n";

		//email body
		$mail_body = "

		Name: ".$fullName."
		Website: ".$websiteAddress."
		Phone: ".$phone."
		Email: ".$contactEmail;



		//send the email
		mail("myemailaddress@mydomain.com", $Subject, $mail_body, $headers);


		//show thank you page
		print "<META http-equiv='REFRESH' content='0;URL=thanks.html'>";


?>