<?php
         $name=isset($_POST['name']) ? $_POST['name']  : '';
         $email=isset($_POST['email']) ? $_POST['email']  : '';
         $message=isset($_POST['message']) ? $_POST['message']  : '';
         $sub=isset($_POST['sub']) ? $_POST['sub']  : '';

         $to = "saurabhankush2022@gmail.com";
         $subject ="Mail from :$email";
         
         $header = "From: rahuldhumal208@gmail.com";
         $header = "Name: $name\r\n";
         
         $retval = mail($to,$subject,$message,$header);
         
         if( $retval == true ) {
            echo "<script type ='text/javascript'>alert('Message successfully sent !');
            window.history.log(-1);
            </script>";
            header("Location:contacts.html");
        
         }else {
            echo "<script type ='text/javascript'>alert('Message is not sent!');
            window.history.log(-1);
            </script>";  
         }
      ?>