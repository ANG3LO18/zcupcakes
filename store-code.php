<?php
session_start();

// Add Store

$connection = mysqli_connect('localhost','root','','zcupcakes-admin1');

if(isset($_POST['registerbtn']))
{
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['confirmpassword'];

    if($password === $cpassword)
    {
        $query = "INSERT INTO addstore (username,email,password) VALUES ('$username','$email','$password')";
        $query_run = mysqli_query($connection, $query);

        if($query_run)
        {
            //echo "Saved";
            $_SESSION['success'] = "Store Profile Added";
            header('Location: store.php');
        }
        else
        {
            $_SESSION['status'] = "Store Profile NOT Added";
            header('Location: store.php');
        }
    }
    else 
    {
        $_SESSION['status'] = "Password and Confirm Password Does Not Match";
        header('Location: Store.php');
    }
}





// Edit Store

if(isset($_POST['registerbtn']))
{
    $id = $_POST['edit_id'];
    
    $query = "SELECT * FROM addadmin WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);
}







// Update Store

if(isset($_POST['updatebtn']))
{
    $id = $_POST['edit_id'];
    $username = $_POST['edit_username'];
    $email = $_POST['edit_email'];
    $password = $_POST['edit_password'];
    
    $query = "UPDATE addstore SET username='$username', email='$email', password='$password', WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['success'] = "Your Store Data is Updated";
        header('Location: store.php');
    }
    else
    {
        $_SESSION['status'] = "Your Storee Data is Not Updated";
        header('Location: store.php');
    }
}





// Delete Store

if(isset($_POST['delete_btn']))
{
    $id = $_POST['delete_id'];
    
    $query = "DELETE FROM addstore WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['success'] = "Your Store Data is Deleted";
        header('Location: store.php');
    }
    else
    {
        $_SESSION['status'] = "Your Store is Not Deleted";
        header('Location: store.php');
    }
}






?>