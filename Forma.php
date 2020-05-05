<?php


   if(isset($_POST['submit-send']))
   {
       $name = $_POST['name'];
       $email=$_POST['email'];
       $message=$_POST['message'];

       if(empty($name) || empty($email) || empty($message))
       {
           header('location:Contact.php?error');
       }
       else {
           $recipent="eriseratr@gmail.com";
           $formcontent="From: $name \n Message: $message";
           $mailHeader="From: $email";
           mail($recipent, $formcontent, $mailHeader);
           echo "Mesazhi u dergua";
       }



   }


