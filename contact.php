<?php

// CHANGE THE THREE VARIABLES BELOW

$EmailFrom = "caleb@weareinterstellar.com";
$EmailTo = "caleb@weareinterstellar.com";
$Subject = "Contact Form Submission from WeAreInterstellar.com";

$Name = Trim(stripslashes($_POST['name']));
$Email = Trim(stripslashes($_POST['email']));
$Telephone = Trim(stripslashes($_POST['telephone']));
$Message = Trim(stripslashes($_POST['msg']));

// prepare email body text
$Body = "";
$Body .= "Name: ";
$Body .= $Name;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $Email;
$Body .= "\n";
$Body .= "Telephone: ";
$Body .= $Telephone;
$Body .= "\n";
$Body .= "Message: ";
$Body .= $Message;
$Body .= "\n";

// send email 
$success = mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>");

// redirect to success page
// CHANGE THE URL BELOW TO YOUR "THANK YOU" PAGE
if ($success){
  print "<meta http-equiv='refresh' content='0;URL=index.html'>";
}
else{
  print "<meta http-equiv='refresh' content='0;URL=index.html'>";
}
?>