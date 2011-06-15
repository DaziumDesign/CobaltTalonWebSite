<?php
	  $varname = $_POST;
	  //unset($varname['toEmail']);
	  $vars = $varname;

	 foreach($_POST as $k=>$v)
	 {
	  $$k=$v;
	 }
	 
	 //always sending to same person
	 //$toEmail = 'jess@jbrownco.net';
	 $toEmail = 'jess@brownwebdesign.com';
	 
  function replaceVar($string, $vars)
 {
	 foreach($vars as $varname=>$value) {
		 	if($varname=='Your_Message') $value = stripslashes(nl2br($value));
			$string = str_replace('{'. $varname . '}', $value, $string); 
	 }
	 //take mobile out if not picked up 
	 $string = str_replace('{mobile}', '', $string);
    return $string;
 }
	 
function sendMail($name, $fromEmail, $toEmail, $vars) {
		  $subject = 'Volunteer From Onstage Website';
			ob_start();
			require_once('../emails/_contact.php'); 
			$message = ob_get_clean();
			$message = replaceVar($message, $vars);
		  $headers  = "MIME-Version: 1.0\r\n";
		  $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
		  $headers .= "From: $name <info@onstagewalton.org>\r\n";
		  $headers .= "Reply-To: $fromEmail \r\n";
		  $error = NULL;

			
				if(!mail($toEmail, $subject, $message, $headers)) {
					//print_r($sendTo);
					$error .= 'Sorry, the email address $sendTo failed to send';
				}
				
		  
		  if(isset($error))	return $error;
		  else return true;
	}
	//echo $from_email;
	//only process if the website field is blank
	if($website == '' && $from_email != "") {
		if($sendResult = sendMail($name, $from_email, $toEmail, $vars)) {
			echo '<div class="email-return">Thank You!  Your email was a success.  We will be in touch shortly.</div>';	
		}
		else {
			echo '<div class="email-return">We\'re sorry, your email failed with the following errors:' . $sendResult . '</div>';	
		}
	}  

?>


