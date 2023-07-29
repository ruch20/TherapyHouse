<?php
    session_start();
    
    require_once('config.php');
   

    if(isset($_POST['btn1'])){

        $UName = $_POST['Email'];
        $Pass = $_POST['Password'];

        if(empty($UName) || empty($Pass))
        {
            $message = "Please enter your details!"; // Your message here
            echo "<script>alert('$message'); window.location='login.html';</script>";
        }
        else{
            $query = "select * from register where Email= '$UName' ";
            $result = mysqli_query($con,$query);
            $row=mysqli_fetch_array($result);
            //echo $row;
            if(is_array($row))
            {
                $db_password = $row['Password'];
                if($Pass == $db_password){
                    $_SESSION['Email'] = $row['Email'];
                    $_SESSION['Uname'] = $row['Uname'];
                    header('location:main.php');
                }

                else{
                    $message = "Incorrect password"; // Your message here
                    echo "<script>alert('$message'); window.location='login.html';</script>";
                    //header('location:login.html');
                }
            }
            else{
                echo'Please Check your query';
            }
        }

        if(isset($_SESSION["Email"])){
            //header('Location:main.php');
        }
    }
?>