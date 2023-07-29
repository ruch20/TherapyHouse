<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Signup Form Using HTML and CSS3</title>
</head>
<body>
<div class="video-container">
      <video src="img/homebg1.mp4" autoplay="autoplay" loop="loop" muted="muted"></video>
    <div class="signup-form">
        <h1> Register</h1>
        <div class="txt">
            <form action="process.php" method="POST">
                <i class="fa fa-user"></i>
                <input type="text" placeholder="UserName" name="Uname">
        </div>
        <div class="txt">
                <i class="fa fa-envelope"></i>
                <input type="email" placeholder="Email" name="Email">
        </div>
        <div class="txt">
                <i class="fa fa-lock"></i>
                <input type="password" placeholder="Password" name="Password">
        </div>
        <div class="txt">
                <i class="fa fa-lock"></i>
                <input type="password" placeholder="Confirm Password" name="CPassword">
        </div>
        <button class="btn" name="btn"> Signup </button>
        <div class="txt">
            <h4>Already registered?</h4>
            <a href="login.html"><h4>Login here</h4></a> 
        </div>
        </form>
    </div>
</div>
</body>
</html>