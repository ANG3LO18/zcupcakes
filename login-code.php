<?php
session_start();

$connection = mysqli_connect('localhost','root','','zcupcakes-admin1');

// Admin login

if(isset($_POST['login_btn']))
{
    $username_login = $_POST['username'];
    $password_login = $_POST['password'];

    $query = "SELECT * FROM addadmin WHERE username='$username_login' AND password='$password_login' ";
    $query_run = mysqli_query($connection, $query);

    if(mysqli_fetch_array($query_run))
    {
        $_SESSION['username'] = $username_login;
        header('location: index.php');
    }
    else
    {
        $_SESSION['status'] = 'Username / Password is Invalid';
        header('location: login.php');
    }
}


?>
