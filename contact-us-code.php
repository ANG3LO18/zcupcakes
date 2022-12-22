<?php
//session_start();

$connection = mysqli_connect('localhost','root','','zcupcakes-admin1');


// Delete Message

if(isset($_POST['delete_btn']))
{
    $id = mysqli_real_escape_string($con, $_POST['delete_id']);

    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $subject = mysqli_real_escape_string($con, $_POST['subject']);
    $message = mysqli_real_escape_string($con, $_POST['message']);

    $query = "INSERT INTO contact (name,email,subject,message) VALUES ('$name','$email','$subject','$message')"; 

    $query_run = mysqli_query($con, $query);
    
    if($query_run)
    {
        $_SESSION['message5'] = "Your Message Deleted Successfully";
        header("location: contact-us.php");
        exit(0);
    }
    else
    {
        $_SESSION['message5'] = "Your Message NOT Deleted Successfully";
        header("location: contact-us.php");
        exit(0);
    }
}













?>