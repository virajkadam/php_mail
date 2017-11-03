<?php

//$em = "kadam.virajkadam@gmail.com";
//$em = "tushar22211@gmail.com";
//$em = "snehal.b.patil38@gmail.com";
$em = "gaurav.gawhane1@gmail.com";
// $from  = "<hr@vincitmedia.com>";
$from  = "<kadam.virajkadam@gmail.com>";

$ms='

<h4>CONGRATULATIONS Miss. Snehal Patil & Welcome to VINCIT MEDIA family!!!</h4>

We are overjoyed to commute an offer of an employment to you.
<br><br>
Please find the terms of employment that you will receive as the position of <b>Android Developer</b> at <b>Vincit Media.</b>
<br><br>
We look forward to receiving your formal acceptance of this offer and a confirmed date of joining by <b>November 10, 2017</b>. The Break-up of income shall be arrived at in accordance with policy structure of the organization.
<br><br>
The above offer of employment and subsequent joining is conditional; subject to you completing your information and submitting all required documents mentioned below within 3 days from the receipt of this offer. Please note that the data collected through this process will be used to initiate background verification and will also be retained as part of employee records post your joining VINCIT MEDIA.
<br><br>
Documents required-
<br><br>
1. Photo Id Proof
<br><br>
2. Residential Proof
<br><br>
3. Pan card Copy - Mandatory
<br><br>
4. Passport Size Photographs (3 NOS)
<br><br>
5. Highest Degree Mark sheet and Certificate (All semester mark sheet)
<br><br>
6. Relieving letter / Resignation Acceptance Letter from immediate previous employer OR Read Receipt(If Any)
<br><br><br>

Kindly email at <a href="mailto:hr@vincitmedia.com" target="_blank">hr@vincitmedia.com</a> to confirm your acceptance of this offer.
<br><br>
You will receive your appointment letter after your joining.
<br><br><br>
<i>Please note: This offer has been provided on the basis of information provided during interview and your resume. It will be considered void if any of the information provided is proven to be false.</i>
<br><br>
We encourage you to learn more about VINCIT MEDIA at:<br>
<a href="http://www.vincitmedia.com" target="_blank">www.vincitmedia.com</a>
<br><br>
We look forward to having you with us!
<br><br>
Warm Regards,
<br><br><b>
Department of Human Resources
<br><br>
Vincit Media
<br><br>
S 124/1, Kausalya,<br>
Behind Hotel Amrita Executive,<br>
Baner Road, Pune 411045</b>
<br><br>
Web- <a href="http://www.vincitmedia.com" target="_blank">www.vincitmedia.com</a>';


// $hd="From: hr@vincitmedia.com \t ". $from ."\r\n";
// $hd.="Reply-To: ". $from ."\r\n";
// $hd.="Return-Path: ". $from ."\r\n";
// $hd.="Organization: vincitmedia.com\r\n";
// $hd.="MIME-Version: 1.0\r\n";
// $hd.="Content-type: text/html;charset=iso-8859-1\r\n";
// $hd.="X-Priority: 3\r\n";
// $hd.="X-Mailer: PHP".phpversion()."\r\n";
// if(mail($em,"Offer Letter",$ms,$hd)){
// 	echo "SENT";
// }else{
// 	echo "OK";
// }



$hd="From: kadam.virajkadam@gmail.com \t ". $from ."\r\n";
$hd.="Reply-To: ". $from ."\r\n";
$hd.="Return-Path: ". $from ."\r\n";
$hd.="Organization: v.com\r\n";
$hd.="MIME-Version: 1.0\r\n";
$hd.="Content-type: text/html;charset=iso-8859-1\r\n";
$hd.="X-Priority: 3\r\n";
$hd.="X-Mailer: PHP".phpversion()."\r\n";
if(mail($em,"Offer Letter",$ms,$hd)){
	echo "SENT";
}else{
	echo "OK";
}