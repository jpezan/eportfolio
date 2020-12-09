<?php
$to = 'jacquelinempezan@lewisu.edu';
$subject = 'ePortfolio Email Contact';

$name = $_POST ['name'];
$email = $_POST ['email'];
$message = $_POST ['message'];

$body = <<<EMAIL
From $name
$message.
From : $name
Email : $email
Topic : $topic
EMAIL;
$header = "From: $email";

if (isset($_POST)) {
    if ($name == '' || $email == '' || $message = '') {
        $feedback = 'Please fill out any missing fields.';

    } else {

    mail( $to, $subject, $body, $header);
    $feedback = 'Thanks for contacting me, I will get back to you within 24 hours.';
    }
}
?>
<p class="feedback"> <?php echo $feedback ?> </p>
