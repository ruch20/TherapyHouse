<?php
// Start the session (if not already started)
session_start();
//var_dump($_POST);

// Include the database configuration file
require_once 'C:\xampp\htdocs\registration101\config.php';

// Check if email key exists in the session
if(isset($_SESSION['Email']))
{
    // Retrieve the score from the form
    $Score = isset($_POST['score']) ? $_POST['score'] : null;

    // Get the email from the session
    $Email = $_SESSION['Email'];

    // Retrieve the user from the database
    $query = "SELECT * FROM register WHERE Email = '$Email'";
    $result = mysqli_query($con, $query);
    $row = mysqli_fetch_array($result);

    if(is_array($row))
    {
        $db_Email = $row['Email'];
    }

    // Insert the score into the database
    $stmt = "INSERT INTO numbergame (Email, score) VALUES ('$db_Email', '$Score')";
    $result1 = mysqli_query($con, $stmt);


    //showing progress
        $progress="SELECT AVG(score) AS avg_score
                FROM numbergame
               WHERE Email = '$db_Email' AND id NOT IN (
                SELECT MAX(id) FROM numbergame WHERE Email = '$db_Email'
    )"; 

     $p_result= mysqli_query($con, $progress);
     $row3 = mysqli_fetch_array($p_result);
     $progress1=$row3['avg_score'];
     if (isset($_POST['progress1'])) {
        $progress1 = $_POST['progress1'];
     }
     //$progress1 = $_GET['progress1'];
     echo $progress1;               
    if($result1)
    {
        echo "Data inserted into numbergame table for user " . $db_Email;
    }
    else
    {
        echo "Error inserting data into numbergame table: " . mysqli_error($con);
    }
}
else
{
    echo "Email key is not set in the session.";
}
?>
