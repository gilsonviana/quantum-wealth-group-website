<?php

$to         =   'request@quantwealthgroup.com';
$subject    =   'New Inquire';
$message    =   "You have a new inquire\n" . 
                "From: " . $_POST['name'] . "\n" .
                "Phone: " . $_POST['phone'] .
                "Message: " . str_replace("\n.", "\n..", $_POST['message']);

$headers    =   'From: webmaster@example.com' . "\r\n" .
                'Reply-To: webmaster@example.com' . "\r\n" .
                'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message);