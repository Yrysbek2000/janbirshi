<?php
$EmailFrom = "client@altynqalam.kz";
$EmailTo = "Yrysbek@altynqalam.kz";
$Subject = "Ozgeredi eken";
$Name = Trim(stripslashes($_POST['InputName'])); 
$Phone = Trim(stripslashes($_POST['InputPhone'])); 
$Email = Trim(stripslashes($_POST['InputEmail']));
$Subject = Trim(stripslashes($_POST['InputSubject'])); 
$Message = Trim(stripslashes($_POST['InputMessage'])); 

// validation
$validationOK=true;
if (!$validationOK) {
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
  exit;
}

// prepare email body text
$Body = "";
$Body .= "Name: ";
$Body .= $Name;
$Body .= "\n";
$Body .= "Phone: ";
$Body .= $Phone;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $Email;
$Body .= "\n";
$Body .= "Message: ";
$Body .= $Message;
$Body .= "\n";



// send email 
$success = mail($EmailTo, $Subject, $Body,  "From: client@altynqalam.kz\nReply-To: Yrysbek@altynqalam.kz\nContent-type:text/plain; Charset=utf-8\r\n");

// $success = mail($EmailTo, $Subject, $Body,  "From: <$EmailFrom>");


// redirect to success page 
if ($success){
  print "<meta http-equiv=\"refresh\" content=\"0;URL=altynthanks.php\">";
}
else{
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
}
?>