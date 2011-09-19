<?php
  $_POST = $_GET;
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
  function toEmail($nature)
  {
    switch($nature) {
      case "information":
        $emails = "mnelson@cobalttalon.com,npournader@cobalttalon.com,daptor@cobalttalon.com";
          break;
      case "sales":
        $emails = "mnelson@cobalttalon.com,npournader@cobalttalon.com,daptor@cobalttalon.com";
          break;
      case "customer_service":
        $emails = "mnelson@cobalttalon.com,npournader@cobalttalon.com,daptor@cobalttalon.com";
          break;
      case "tech_support":
        $emails = "itsupport@cobalttalon.com,daptor@cobalttalon.com";
          break;
      case "careers":
        $emails = "recruiting@cobalttalon.com";
        break;
      default:
        $emails = "jess@brownwebdesign.com";

    }
    return $emails;
  }
	 
  function replaceVar($string, $vars){
   foreach($vars as $varname=>$value) {
      if($varname=='Your_Message') $value = stripslashes(nl2br($value));
      $string = str_replace('{'. $varname . '}', $value, $string); 
   }
   return $string;
  }
	 
  function sendMail($name, $fromEmail, $toEmail, $vars) {
        $subject = 'Contact from Talon Website';
        ob_start();
        require_once('../emails/_contact.php'); 
        $message = ob_get_clean();
        $message = replaceVar($message, $vars);
        $headers  = "MIME-Version: 1.0\r\n";
        $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
        $headers .= "From: $name <info@cobalttalon.com>\r\n";
        $headers .= "Reply-To: $fromEmail \r\n";
        $error = NULL;

        
          if(!mail(toEmail($vars['nature']), $subject, $message, $headers)) {
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


