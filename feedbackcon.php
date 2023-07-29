<?php

require_once 'config.php';

         if(isset($_POST['btn']))
         {
             $UserName = $_POST['Name'];
             $Email = $_POST['Emailid'];
             $feedback = $_POST['feedback'];

             if(empty($UserName) || empty($Email) || empty($feedback))
        {
            $message = "Please enter your details!"; // Your message here
                    echo "<script>alert('$message'); window.location='feedback.html';</script>";
        }
        else{
            $query = "insert into feedbackdb (Name,Emailid,feedback) values ('$UserName','$Email','$feedback')";
            $result = mysqli_query($con,$query);
            header('location:main.php');
    
        }
         }

    ?>