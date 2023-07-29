<?php 
    session_start();
    require_once('config.php');
    
    if(isset($_POST['btn']))
    {
        $UserName = $_POST['Uname'];
        $Email = $_POST['Email'];
        $Password = $_POST['Password'];
        $CPassword = $_POST['CPassword'];

        if(empty($UserName) || empty($Email) || empty($Password) || empty($CPassword))
        {
            $message = "Please enter your details!"; // Your message here
                    echo "<script>alert('$message'); window.location='index.php';</script>";
        }
        else
        {
            if($Password!=$CPassword)
            {
                $message = "Password Not Matched"; // Your message here
                    echo "<script>alert('$message'); window.location='index.php';</script>";
            }
            else
            {
                $pass=$Password;
                $query = "insert into register (Uname,Email,Password) values ('$UserName','$Email','$pass')";
                $result = mysqli_query($con,$query);

                if($result)
                {
                    $query1 = "select * from register where Uname= '$UserName' AND Email='$Email' ";
                    $result2 = mysqli_query($con,$query1);
                    $row1=mysqli_fetch_array($result2);
                
                    if(is_array($row1))
                    {
                    $_SESSION['Uname'] = $UserName;
                    $_SESSION['Email'] = $Email;
                   // header('location:main.php');                
                    header('location:main.php');
                   //echo ' Your Record Has Been Saved in the Database ';
                    }
                }    
                else
                {
                    $message = "Please enter your details!"; // Your message here
                    echo "<script>alert('$message'); window.location='index.php';</script>";
                }
            }
        }
        if(isset($_SESSION['Uname'])){
            //header('Location:main.php');
        }
    }


?>