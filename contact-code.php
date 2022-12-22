<?php
session_start();
require 'dbcon.php';

// Contact (Website)

if(isset($_POST['mes_contact']))
{
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $subject = mysqli_real_escape_string($con, $_POST['subject']);
    $message = mysqli_real_escape_string($con, $_POST['message']);

    $query = "INSERT INTO contact (name,email,subject,message) VALUES ('$name','$email','$subject','$message')"; 

    $query_run = mysqli_query($con, $query);
    
    if($query_run)
    {
        $_SESSION['message3'] = "Your Message Sent Successfully";
        header("location: contact.php");
        exit(0);
    }
    else
    {
        $_SESSION['message3'] = "Your Message NOT Sent Successfully";
        header("location: contact.php");
        exit(0);
    }
}

?>