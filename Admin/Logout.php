<!DOCTYPE html>
<html>
<head>
    <title>Logout</title>
</head>
<body>
    <p>You are now logged out.</p>
    <a href="Login.php">Return to login page</a>
    <?php
    // Start the session
    session_start();
    // Destroy the session
    session_destroy();
    // Unset all session variables
    $_SESSION = array();
    // Set the cookie to expire in the past
    if (isset($_COOKIE[session_name()])) {
        setcookie(session_name(), '', time()-42000, '/');
    }
    ?>
</body>
</html>