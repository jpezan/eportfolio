
<?php
$to = 'jacquelinempezan@lewisu.edu';
$subject = 'ePortfolio Email Contact';

$name = $_POST ['Name'];
$email = $_POST ['Email'];
$message = $_POST ['Message'];

$body = <<<EMAIL
From : $name
Email : $email
Topic : $message
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
