<?php
session_start();
require 'dbcon.php';


if(isset($_POST['others_quote']))
{
    $firstname = mysqli_real_escape_string($con, $_POST['firstname']);
    $lastname = mysqli_real_escape_string($con, $_POST['lastname']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $deldate = mysqli_real_escape_string($con, $_POST['deldate']);
    $deltime = mysqli_real_escape_string($con, $_POST['deltime']);
    $number = mysqli_real_escape_string($con, $_POST['number']);
    $address = mysqli_real_escape_string($con, $_POST['address']);
    $orders = mysqli_real_escape_string($con, $_POST['orders']);
    $addons = mysqli_real_escape_string($con, $_POST['addons']);

    $query = "INSERT INTO addothers (firstname,lastname,email,deldate,deltime,number,address,orders,addons) VALUES 
        ('$firstname','$lastname','$email','$deldate','$deltime','$number','$address','$orders','$addons')"; 

    $query_run = mysqli_query($con, $query);
    
    if($query_run)
    {
        $_SESSION['message'] = "Your Order is Created Successfully";
        $_SESSION['message2'] = "Your Invoice Number is -----";
        header("location: others2.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Your Order is NOT Created Successfully";
        $_SESSION['message2'] = "Your Invoice Number is NOT Created Successfully";
        header("location: others2.php");
        exit(0);
    }

}








?>