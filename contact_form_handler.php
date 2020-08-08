<?php

if (isset($_POST['submit'])){



$name = $_POST['name'];
$emailFrom = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$formcontent=" From: $name \n Subject: $subject \n Message: $message";
$subjectNew = "CONTACT FORM";
$recipient = "sayantikag@iisc.ac.in";
$mailheader = "From: ".$emailFrom;
mail($recipient, $subjectNew, $formcontent, $mailheader) or die("Error!");
header("Location: index.php?mailsend");
// echo "Thank You!" . " -" . "<a href='form.html' style='text-decoration:none;color:#ff0099;'> Return Home</a>";
}
?>
