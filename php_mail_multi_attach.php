<?php
    // array with filenames to be sent as attachment
    $files = array('Tushar Patil - Relieving Letter.pdf',
        'Tushar Patil - Salary Slip.pdf');

    // email fields: to, from, subject, and so on
    //$to = 'kadam.virajkadam@gmail.com,';
    $to = 'gaurav.gawhane1@gmail.com';
    $from = 'kadam.virajkadam@gmail.com';
    $subject ="test mail"; 
    $message =
"Dear Tushar,<br><br>

Please find the attached documents. <br><br>

Let us know if you have any queries. <br><br>


Regards,<br>
Sonali Ranaware<br>
Softdroid Systems Pvt. Ltd.<br>
Office No.202, Turning Point II,Opposite Rosary school,<br>
Viman Nagar, Pune-411014<br>
sonali.ranaware@softdroidsystems.com";


$headers = "From: $from";

    // boundary 
    $semi_rand = md5(time()); 
    $mime_boundary = "==Multipart_Boundary_x{$semi_rand}x"; 

    // headers for attachment 
    $headers .= "\nMIME-Version: 1.0\n" . "Content-Type: multipart/mixed;\n" . " boundary=\"{$mime_boundary}\""; 

    // multipart boundary 
    $message = "This is a multi-part message in MIME format.\n\n" . "--{$mime_boundary}\n" . "Content-Type: text/html; charset=\"iso-8859-1\"\n" . "Content-Transfer-Encoding: 7bit\n\n" . $message . "\n\n"; 
    $message .= "--{$mime_boundary}\n";

    // preparing attachments
    for($x=0;$x<count($files);$x++){
        $file = fopen($files[$x],"rb");
        $data = fread($file,filesize($files[$x]));
        fclose($file);
        $data = chunk_split(base64_encode($data));
        $message .= "Content-Type: {\"application/octet-stream\"};\n" . " name=\"$files[$x]\"\n" . 
        "Content-Disposition: attachment;\n" . " filename=\"$files[$x]\"\n" . 
        "Content-Transfer-Encoding: base64\n\n" . $data . "\n\n";
        $message .= "--{$mime_boundary}\n";
    }

    // send

    $ok = @mail($to, $subject, $message, $headers); 
    if ($ok) { 
        echo "<p>mail sent to ' $to '!</p>"; 
    } else { 
        echo "<p>mail could not be sent!</p>"; 
    } 


