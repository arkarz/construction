<?php
         $email=$_POST['email'];
         $name=$_POST['name'];
         $message=$_POST['message'];
         
         
         $to = "saurabhankush2022@gmail.com";
         $subject ="Mail from :$email";
         
         
         $header = "From: rahuldhumal208@gmail.com";
         $header .= "Name: $name\r\n";
         
         $retval = mail ($to,$subject,$message,$header);
         
         if( $retval == true ) {
            echo "<script type ='text/javascript'>alert('Message successfully sent !');
            window.history.log(-1);
            </script>";
            header("Location:contact.html");
        
         }else {
            echo "<script type ='text/javascript'>alert('Message is not sent!');
            window.history.log(-1);
            </script>";
            
         }
      
      ?>