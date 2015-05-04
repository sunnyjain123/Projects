<?php
 if (isset($_POST['send']))
 {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];
  
  $to = 'gm8270@gmail.com';
  $subject = 'Contact to Jovial Technologies';
  $message = "Hi Admin Mr./Mrs. ".$name." wants to contact you please contact on this email ".$email."<br/> Message : ".$message."<br/><br/> Thank you <br/>" .$name.
  
	mail($to,$subject,$message);
  }
?>