<?php
session_start();
require 'dbcon.php';

// add orders

if(isset($_POST['cake_quote']))
{
    $firstname = mysqli_real_escape_string($con, $_POST['firstname']);
    $lastname = mysqli_real_escape_string($con, $_POST['lastname']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $deldate = mysqli_real_escape_string($con, $_POST['deldate']);
    $deltime = mysqli_real_escape_string($con, $_POST['deltime']);
    $number = mysqli_real_escape_string($con, $_POST['number']);
    $tevent = mysqli_real_escape_string($con, $_POST['tevent']);
    $numguest = mysqli_real_escape_string($con, $_POST['numguest']);
    $incript = mysqli_real_escape_string($con, $_POST['incript']);
    $address = mysqli_real_escape_string($con, $_POST['address']);
    $descrip = mysqli_real_escape_string($con, $_POST['descrip']);
    $tiers = mysqli_real_escape_string($con, $_POST['tiers']);
    $pic = mysqli_real_escape_string($con, $_FILES["pic"]['name']);

    $query = "INSERT INTO addorders (firstname,lastname,email,deldate,deltime,number,tevent,numguest,incript,address,descrip,tiers,pic) VALUES 
        ('$firstname','$lastname','$email','$deldate','$deltime','$number','$tevent','$numguest','$incript','$address','$descrip','$tiers','$pic')"; 

    $query_run = mysqli_query($con, $query);
    
    if($query_run)
    {
        move_uploaded_file($_FILES["pic"]['name'], "upload/".$_FILES["pic"]['name']);
        $_SESSION['message'] = "Your Order is Created Successfully";
        $_SESSION['message2'] = "Your Order Number is -----";
        header("location: contact-quote.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Your Order is NOT Created Successfully";
        $_SESSION['message2'] = "Your Order Number is NOT Created Successfully";
        header("location: contact-quote.php");
        exit(0);
    }

}














?>