<?php 
if(isset($_POST['submit']))
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $mailheader = "From: " .$name. "<".$email.">\r\n";

    $recipient = 'josh@simpligeek.com';

    mail($recipient, "Resume Website", $message, $mailheader)
    or die("Error!");

    echo("Message Sent");
?>