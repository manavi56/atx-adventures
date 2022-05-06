<?php

$name = $_POST['name1'];
$contact_email = $_POST['email1'];
$message = ($_POST['message']);
$subject = $_POST['subject'];

$data = $name . $contact_email . $message . $subject;
$file = fopen('messages.txt', 'w');
fwrite($file, $data);
fclose($file);

echo "Thank you " . $name . " for your message! ";
echo "We will contact you at " . $contact_email . " if we have any follow-up questions. ";
echo "Just to review, the subject line of your message is: \"" . $subject . "\" and your message is: \"" . $message . "\"";

?>