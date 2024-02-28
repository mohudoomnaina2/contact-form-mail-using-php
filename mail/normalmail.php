<?php
$to      = 'mohudoomnaina2@gmail.com';
$subject = 'the subject';
$message = 'hello';
$headers = array(
    'From' => 'webmaster@example.com',
    'Reply-To' => 'webmaster@example.com',
    'X-Mailer' => 'PHP/' . phpversion()
);

if(mail($to, $subject, $message, $headers)){
    echo 'success';
}else{
    echo 'failed';
}
?>