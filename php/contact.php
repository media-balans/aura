<?php

$EmailFrom = "mautd29388@gmail.com";
$EmailTo = stripslashes($_POST['email']);
$Subject = stripslashes($_POST['subject']);
$Name = Trim(stripslashes($_POST['author'])); 
$Email = Trim(stripslashes($_POST['email']));
$Message = Trim(stripslashes($_POST['message'])); 

// validation
$validationOK=true;
if (!$validationOK) {
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
  exit;
}

// prepare email body text
$Body = '';
$Body .= "Thank you for contacting to us!";
$Body .= "\n";
$Body .= "\n";
$Body .= "You can buy themes at http://themeforest.net/user/mtheme_market/portfolio.";
$Body .= "\n";
$Body .= "\n";
$Body .= "----------------------------";
$Body .= "\n";
$Body .= "Name: ";
$Body .= $Name;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $Email;
$Body .= "\n";
$Body .= "\n";
$Body .= "Message: ";
$Body .= $Message;
$Body .= "\n";

ini_set($EmailFrom, $EmailTo);
// send email 
$success = mail($EmailTo, $Subject, $Body, 'From: ' . $EmailFrom);

// redirect to success page 
if ($success){
  echo "Thank you for contacting to us!";
}
else{
  echo "Please Try Again Latter.";
}
?>