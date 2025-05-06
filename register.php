<?php 
//connect to the database
include("connectdb.php");
$info = '';

//declare the variables for registration and assign values to these variables from the data entered by the user in the fields
//I used mysqli_real_escape_string on the user inputs to reduce vulnerability of my website to SQL injections.
//I have added the password_hash as well has PASSWORD_DEFAULT to encrypt the password.
if (isset($_POST['signup'])) {
    $fname = mysqli_real_escape_string($db,$_POST['fname']);
    $lname = mysqli_real_escape_string($db,$_POST['lname']);
    $username = mysqli_real_escape_string($db,$_POST['username']);
    $email = mysqli_real_escape_string($db,$_POST['email']);
    $phone = mysqli_real_escape_string($db,$_POST['phone']);
    $pass = password_hash($_POST['pass'], PASSWORD_DEFAULT);
    $date = date('Y-m-d');

    //query that selects the username field/
    $sql = "SELECT * FROM `userdetails` WHERE `username` = '$username' OR `email` = '$email'";
    //execute the query
    $result = mysqli_query($db, $sql);
    //if the username entered by the user already exists, then an alert will be created and the user will be redirected back to the registeration page
    if (mysqli_num_rows($result)>0) {
        //I took this javascript for the alerts from the Lab tutorial session Week 8. For this I chnaged the message and where it is redirected to.
        $info = "<script language='javascript'> alert('Username already taken. Registeration failed!');
        window.location.href = 'https://smcse.city.ac.uk/student/adbs928/contact.html';
        </script>";
    }else {
        //if username doesn't exist then the values inputted will then be registered on to the database.
        $query = "INSERT INTO userdetails (fname,lname,username,email,phone,password,date) VALUES ('$fname','$lname','$username','$email','$phone','$pass','$date')";

        $insert = mysqli_query($db,$query);
        $info = '';
        if ($insert) {
            //an alert will be created stating that the registeration was a success and will be redirected to login.
            //I took this javascript for the alerts from the Lab tutorial session Week 8. For this I chnaged the message and where it is redirected to.
            $info = "<script language='javascript'> alert('Registration Successful! Please Login!');
        window.location.href = 'https://smcse.city.ac.uk/student/adbs928/contact.html';
        </script>";
        } else {
            //if it was not a success then an alert will pop up with an error. User will be redirected back to the the registeration page.
            //I took this javascript for the alerts from the Lab tutorial session Week 8. For this I chnaged the message and where it is redirected to.
            $info = "<script language='javascript'> alert('An error occurred, Try again!');
        window.location.href = 'https://smcse.city.ac.uk/student/adbs928/contact.html';
        </script>";
            echo $db->error; 
        }
    }
   echo $info;
}
?>
