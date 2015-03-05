<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $from = 'From: cityofwaterlooiowa.com'; 
    $to = 'chiefsec@waterloo-ia.org'; 
    $subject = 'Online inquiry for WFR';

    $body = "From: $name\n E-Mail: $email\n Message:\n $message";
?>

<?php
if ($_POST['submit']) {
    if (mail ($to, $subject, $body, $from)) { 
        echo '<p>Message has been sent and will be promptly processed.</p>';
    } else { 
        echo '<p>An error has occurred: please attempt re-sending the message.</p>'; 
    }
}
?>