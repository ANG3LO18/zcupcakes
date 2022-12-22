<?php
session_start();
require 'dbcon.php';






// Delete Orders

if(isset($_POST['deleteorders']))
{
    $row = mysqli_real_escape_string($con, $_POST['deleteorders']);

    $query = "DELETE FROM addorders WHERE id='$row' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Your Order is Deleted";
        header('Location: orders.php');
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Your Order is Not Deleted";
        header('Location: orders.php');
        exit(0);
    }
}















// Update Orders

if(isset($_POST['updatebtn1']))
{
    $row = mysqli_real_escape_string($con, $_POST['id']);

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
    $pic = mysqli_real_escape_string($con, $_FILES['pic']["name"]);
    
    $query = "UPDATE addothers SET firstname='$firstname' lastname='$lastname' email='$email' deldate='$deldate' deltime='$deltime' 
    number='$number' tevent='$tevent' numguest='$numguest' incript='$incript' address='$address' descrip='$descrip' tiers='$tiers' pic='$pic' WHERE id='$row' "; 

    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message2'] = "Your Order is Not Deleted";
        header('Location: orders.php');
        exit(0);
    }
    else
    {
        $_SESSION['message2'] = "Your Order is Not Deleted";
        header('Location: orders.php');
        exit(0);
    }
}














// Add Orders

if(isset($_POST['ordersbtn']))
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
        $_SESSION['message3'] = "Your Order is Added";
        header('Location: orders.php');
        exit(0);
    }
    else
    {
        $_SESSION['message3'] = "Your Order is Not Added";
        header('Location: orders.php');
        exit(0);
    }
}













// Add Orders

$connection = mysqli_connect('localhost','root','','zcupcakes-admin1');

if(isset($_POST['ordersbtn']))
{
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $deldate = $_POST['deldate'];
    $deltime = $_POST['deltime'];
    $number = $_POST['number'];
    $tevent = $_POST['tevent'];
    $numguest = $_POST['numguest'];
    $incript = $_POST['incript'];
    $address = $_POST['address'];
    $descrip = $_POST['descrip'];
    $tiers = $_POST['tiers'];
    $pic = $_FILES["pic"]['name'];
    
    $query = "INSERT INTO addorders (firstname,lastname,email,deldate,deltime,number,tevent,numguest,incript,address,descrip,tiers,pic) VALUES 
    ('$firstname','$lastname','$email','$deldate','$deltime','$number','$tevent','$numguest','$incript','$address','$descrip','$tiers','$pic')";

    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['message3'] = "Your Order is Added";
        header('Location: orders.php');
    }
    else
    {
        $_SESSION['message3'] = "Your Order is Not Added";
        header('Location: orders.php');
    }
    
}






















// Save Orders

if(isset($_POST['viewbtn']))
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

    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['message4'] = "Your Order is Save";
        header('Location: orders.php');
        exit(0);
    }
    else
    {
        $_SESSION['message4'] = "Your Order is Not Save";
        header('Location: orders.php');
        exit(0);
    }
}




?>