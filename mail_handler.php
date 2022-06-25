<?php
    if(isset($_POST['submit'])){
      $name=$_POST['Your Name'];
      $email=$_POST['Your Email'];
      $number=$_POST['Your Mobile Number'];
      $message=$_POST['Your Messages'];

      $to='david.chigbo25@gmail.com';  // Receiver Email ID, Replace with your email ID
      $subject='Form Submission';
      $message="Name : ".$name."\n"."Phone : ".$phone."\n". "Wrote the following : "."\n\n".$message;
      $headers="From: ".$email;

      if(mail($to, $subject, $message, $headers)){
        echo "<h1>Sent Successfully! Thank you"." ".$name."," "Engr. David will personally contact you shortly!</h1>";
      }
      else{
        echo "Something went wrong!";
      }
    }
?>
