<?php
//connect to the database
include('connectdb.php');
session_start();
$info = '';
if (isset($_POST['login'])) {
    //declaring the variables containing values from the input fields of the login form: username and password.
    $username = mysqli_real_escape_string($db,$_POST['username']);
    $pass = $_POST['pass'];
    //select the username and password fields which matches the details form the database.
    $sql1 = "SELECT * FROM `userdetails` WHERE `username` = '$username'" ; 
    //execute the query
    $result1 = mysqli_query($db, $sql1); 
    //store the results in $row1 variable
    $row1 = mysqli_fetch_assoc($result1);

    if (!empty($row1['username'])) {
        $c_pass = $row1['password'];
        if (password_verify($pass,$c_pass)) {
            $_SESSION['id'] = $row1['id'];
            $_SESSION['username'] = $row1['username'];
            // if $row1 returns results that matches that of the database then the user will be redirected to the welcome.php.
            echo "<script>location='welcome.php'</script>";
        }else {
            //if $row1 returns password that doesn't match that of the database then a javascript alert will pop up and will be redirected back to the login page.
            //I took this javascript for the alerts from the Lab tutorial session Week 8. For this I chnaged the message and where it is redirected to.
            $info = "<script language='javascript'> alert('Incorrect Password!');
        window.location.href = 'https://smcse.city.ac.uk/student/adbs928/contact.html';
        </script>";
        }
   }else {
        //if $row1 returns no details matching that of the database then a javascript alert will pop up and will be redirected back to the login page.
        //I took this javascript for the alerts from the Lab tutorial session Week 8. For this I chnaged the message and where it is redirected to.
        $info = "<script language='javascript'> alert('No Account Present!');
        window.location.href = 'https://smcse.city.ac.uk/student/adbs928/contact.html';
        </script>";
    }
    
   echo $info;
}
?>
