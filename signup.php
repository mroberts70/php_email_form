<?php

		//mail variables
		$full_Name = $_REQUEST['full_Name'];
		$websiteAddress = $_REQUEST['websiteAddress'];
		$contactEmail = $_REQUEST['contactEmail'];
		$phone = $_REQUEST['phone'];

		//email send information

		$subject = "New Email List Submission";

		//email headers
		$headers = "From: ".$full_Name." <".$contactEmail.">\r\n";

		//email body
		$mailBody = "

		Name: ".$full_Name."
		Website: ".$websiteAddress."
		Phone: ".$phone."
		Email: ".$contactEmail;

		//send to
		$mailTo = "mroberts@endicott.edu";



		//send the email
		mail($mailTo, $subject, $mailBody, $headers);
        
      
		//show thank you page
		print "<META http-equiv='REFRESH' content='0;URL=thanks.html'>";


?>