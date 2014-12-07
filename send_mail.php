<?php
require_once 'swiftmailer/lib/swift_required.php';

$transport = Swift_SmtpTransport::newInstance('smtp.gmail.com', 465, "ssl")
->setUsername('GMAIL_ID')
->setPassword('GMAIL_PASSWORD');

$mailer = Swift_Mailer::newInstance($transport);

$message = Swift_Message::newInstance('Test Subject')
->setFrom(array('GMAIL_ID'))
->setTo(array('rakhi.r25@gmail.com'))
->setBody('This is a test mail.');

$result = $mailer->send($message);
?>
