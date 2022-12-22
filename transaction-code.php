<?php
//session_start();

$connection = mysqli_connect('localhost','root','','zcupcakes-admin1');


// Delete Transaction

if(isset($_POST['delete_btn']))
{
    $id = mysqli_real_escape_string($con, $_POST['delete_id']);

    $trasacdate = mysqli_real_escape_string($con, $_POST['trasacdate']);
    $refnumber = mysqli_real_escape_string($con, $_POST['refnumber']);
    $amount = mysqli_real_escape_string($con, $_POST['amount']);
    $date = mysqli_real_escape_string($con, $_POST['date']);
    $time = mysqli_real_escape_string($con, $_POST['time']);

    $query = "INSERT INTO contact (trasacdate,refnumber,amount,date,time) VALUES ('$trasacdate','$refnumber','$amount','$date','$time')"; 

    $query_run = mysqli_query($con, $query);
    
    if($query_run)
    {
        $_SESSION['message'] = "Your Message Deleted Successfully";
        header("location: transaction.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Your Message NOT Deleted Successfully";
        header("location: transaction.php");
        exit(0);
    }
}













?>