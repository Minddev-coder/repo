<?php
//get data from form  
$name = $_POST['name'];
$surname= $_POST['surname'];
$phone= $_POST['phone'];
$interest= $_POST['interest'];
$question= $_POST['question'];
$place= $_POST['place'];
$to = "ibodullamuhammad@gmail.com";
$subject = "Mail From website";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message .
"\r\n Phone number =" . $phone . "\r\n Interest =" . $interest . "\r\n Question =" . $question . 
"\r\n Place =" . $place;
$headers = "From: noreply@itmaximum.ml" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:index2.html");
?>