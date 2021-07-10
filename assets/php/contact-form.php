<?php
 $name = $_POST['name'];
 $visitor_email = $_POST['email'];
 $subject = $_POST['subject'];
 $message = $_POST['message'];

 $email_from = 'bhaveshjain1612@gmail.com';
 $email_sub = 'New Form Submission';
 $email_body = "Username: $name.\n";
                "User Email: $visitor_email.\n";
                 "Subject: $subject.\n";
                "Message: $message.\n";
 $to = "bhavesh.161201@gmail.com";
 $headers = "From: $email_from \r\n";
 $headers = "Reply to: $visitor_email \r\n";
 mail($to,$email_sub,$email_body,$headers);
 header("Location: index.html");
?>