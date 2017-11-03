<?php
$to_email = 'TO EMAIL';
$from_email  = 'FROM EMAIL';
$from_name  = 'FROM NAME';
$organization_name  = 'FROM NAME';
$subject  = 'SUBJECT';

// This code supports html mail. Your can embed html code too
$message = '
<h2>HTML MAIL</h2>

----------------------------------------------------------------------------------------
////////////////////////////	MAIL CONTENT HERE 	////////////////////////////////
----------------------------------------------------------------------------------------

<br><br>
<a href="http://www.theviraj.com" target="_blank">Who is Viraj?</a>
<br><br>';

$header = "From: ". $from_name ." \t <". $from_email ."> \r\n";
$header.= "Reply-To: <". $from_email ."> \r\n";
$header.= "Return-Path: <". $from_email ."> \r\n";
$header.= "Organization: ". $organization_name ." \r\n";
$header.= "MIME-Version: 1.0\r\n";
$header.= "Content-type: text/html;charset=iso-8859-1\r\n";
$header.= "X-Priority: 3\r\n";
$header.= "X-Mailer: PHP".phpversion()."\r\n";

if(mail($to_email, $subject, $message, $header)){
	echo "Email Sent Sucessfully";
}else{
	echo "Error : ". error_get_last()['message'];
}
