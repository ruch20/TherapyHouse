
<!DOCTYPE html>
<html lang="en">
<?php
// Start the session
session_start();

// Unset all of the session variables
$_SESSION = array();

// Destroy the session
session_destroy();

// Disable back button
//echo '<script>history.pushState(null, null, location.href); window.onpopstate = function () { history.go(-1); };</script>';

// Redirect to home.html
header('Location: home.html');
//exit;
?>


<script>
window.open("home.html", "_blank");
window.close();
</script>

</html>    