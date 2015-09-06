<?php

	if($_POST["txtName"] && $_POST["txtEmail"] && $_POST["txtWebsite"] && $_POST["txtMessage"]){
		
 $txtName = $_POST["txtName"]; 
 $txtEmail = $_POST["txtEmail"]; 
 $txtWebsite = $_POST["txtWebsite"]; 
 $txtMessage = $_POST["txtMessage"]; 
 
 $toEmail = "contact@trauma.com";
 $subject = "Contact Us - Email";
 $msgBody = "By: \r\n <b>Name:</b> $txtName \r\n <b>Email:</b> $txtEmail \r\n <b>Website:</b> $txtWebsite  \r\n <b>Message:</b> <p>$txtMessage</p>";
 
 mail($toEmail,$subject,$msgBody);
 
 $newURL = "thanks.html";
 header('Location: '.$newURL);

	}
	else{
 $newURL = "contact.html";
 header('Location: '.$newURL);
	} 
?>