<?php

//$mail_to		= 'kadam.virajkadam@gmail.com';
$mail_to		= 'gaurav.gawhane1@gmail.com, kadam.virajkadam@gmail.com';
$subject		= 'ATTCH TEST -- '. mt_rand(1111,9999);
$body   		= '<b>HI IAM VIRAJ WITH ATTACHMENT</b>';
$from_mail      = 'gaurav.gawhane1@gmail.com';
$from_name      = 'gaurav';
$replyto        = 'gaurav.gawhane1@gmail.com';
$file = $filename = 'Tushar Patil - Relieving Letter.pdf';

$file_size = filesize($file);
$handle = fopen($file, "r");
$content = fread($handle, $file_size);
fclose($handle);

$content = chunk_split(base64_encode($content));
$uid = md5(uniqid(time()));
$name = basename($file);

$eol = PHP_EOL;

// Basic headers
$header = "From: ".$from_name." <".$from_mail.">".$eol;
$header .= "Reply-To: ".$replyto.$eol;
$header .= "MIME-Version: 1.0\r\n";
$header .= "Content-Type: multipart/mixed; boundary=\"".$uid."\"";

// Put everything else in $message
$message = "--".$uid.$eol;
$message .= "Content-Type: text/html; charset=ISO-8859-1".$eol;
$message .= "Content-Transfer-Encoding: 8bit".$eol.$eol;
$message .= $body.$eol;
$message .= "--".$uid.$eol;
$message .= "Content-Type: application/pdf; name=\"".$filename."\"".$eol;
$message .= "Content-Transfer-Encoding: base64".$eol;
$message .= "Content-Disposition: attachment; filename=\"".$filename."\"".$eol;
$message .= $content.$eol;
$message .= "--".$uid."--";

if (mail($mail_to, $subject, $message, $header))
{
    echo "mail_success";
}
else
{
    echo "mail_error";
}