<?php 

//$to      = $email;
$to      = 'andrewo@thinkbigshot.com';
$subject = 'Here are the results of your quiz!';
// $message = $str_post;
$headers = 'From: andrewo@thinkbigshot.com' . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
$msg = 'from murray bark bark';


mail($to, $subject, $msg, $headers);

 ?>
