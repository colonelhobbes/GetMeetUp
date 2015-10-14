<?php
//add the recipient's address here
$myemail = 'arun.kal927@gmail.com';
 
//grab named inputs from html then post to #thanks
if (isset($_POST['first_name'])) {
$fname = strip_tags($_POST['first_name']);
$lname = strip_tags($_POST['last_name']);
$email = strip_tags($_POST['email']);
$message = strip_tags($_POST['comments']);

 
//generate email and send!
$to = $myemail;
$email_subject = "Contact form submission: $name";
$email_body = "You have received a new message. ".
" Here are the details:\n Name: $fname @lname \n ".
"Email: $email\n Message \n $message";
$headers = "From: $myemail\n";
$headers .= "Reply-To: $email";
mail($to,$email_subject,$email_body,$headers);
}
?>