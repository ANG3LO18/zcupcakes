<?php
session_start();
require 'dbcon.php';







// Delete Orders (Others)

if(isset($_POST['delete_others']))
{
    $row = mysqli_real_escape_string($con, $_POST['deleteothers']);

    $query = "DELETE FROM addothers WHERE id='$row' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Your Other (Order) is Deleted";
        header('Location: others.php');
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Your Other (Order) is Not Deleted";
        header('Location: others.php');
        exit(0);
    }
}
















// Update Orders (Others)

if(isset($_POST['updateothers']))
{
    $row = mysqli_real_escape_string($con, $_POST['id']);

    $firstname = mysqli_real_escape_string($con, $_POST['firstname']);
    $lastname = mysqli_real_escape_string($con, $_POST['lastname']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $deldate = mysqli_real_escape_string($con, $_POST['deldate']);
    $deltime = mysqli_real_escape_string($con, $_POST['deltime']);
    $number = mysqli_real_escape_string($con, $_POST['number']);
    $address = mysqli_real_escape_string($con, $_POST['address']);
    $orders = mysqli_real_escape_string($con, $_POST['orders']);
    $addons = mysqli_real_escape_string($con, $_POST['addons']);

    $query = "UPDATE addothers SET firstname='$firstname' lastname='$lastname' email='$email' deldate='$deldate' deltime='$deltime' 
    number='$number' address='$address' orders='$orders' addons='$addons' WHERE id='$row' ";    
    
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message2'] = "Your Other (Order) is Updated";
        header('Location: others.php');
        exit(0);
    }
    else
    {
        $_SESSION['message2'] = "Your Other (Order) is Not Updated";
        header('Location: others.php');
        exit(0);
    }
}















// Add Orders (Others)

if(isset($_POST['othersbtn']))
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
    
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['success'] = "Another Other (Order) is Added";
        header('Location: others.php');
        exit(0);
    }
    else
    {
        $_SESSION['status'] = "Another Other (Order) is Not Added";
        header('Location: others.php');
        exit(0);
    }
}



















// Save Orders (Others)

if(isset($_POST['viewbtn']))
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
    
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Your Other (Order) is Saved";
        header('Location: others.php');
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Your Other (Order) is Not Save";
        header('Location: others.php');
        exit(0);
    }
}




?>