<!--This php is to log out. By login out, this is to redirects the user to the home page. I have gotten this code from the lab Week 8 session. All that was changed from this is the location of where it will redirect user to. -->

<?php
    session_start();
    unset($_SESSION['username']); // disable the username session

    // end the session
    session_destroy();
    header("Location: index.html"); // redirect back to the form
?>