<?php
	$mail = $_POST['mail'];
	//$mail = "poo@gmail.com";
	$name = $_POST['name'];
	//$name = "Jim";
	$subject = $_POST['subject'];
	//$subject = "hello";
	$text = $_POST['text'];
	//$text = "bleeeeed";
	
 $to = "semperfiofficial@gmail.com";
 $message =" You received a mail from ".$mail;
 $message .=" Text of the message : ".$text;

 if(mail($to, $subject, $message)){
	echo "Your e-mail has been succesfully sent!! :D roflcopter";
} 
else{ 
	echo "there's some errors to send the mail, verify your server options";
			
}
?>