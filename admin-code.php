<?php
session_start();

// Add Admin

$connection = mysqli_connect('localhost','root','','zcupcakes-admin1');

if(isset($_POST['registerbtn']))
{
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['confirmpassword'];

    if($password === $cpassword)
    {
        $query = "INSERT INTO addadmin (username,email,password) VALUES ('$username','$email','$password')";
        $query_run = mysqli_query($connection, $query);

        if($query_run)
        {
            //echo "Saved";
            $_SESSION['message'] = "Admin Profile Added";
            header('Location: admin.php');
        }
        else
        {
            $_SESSION['message3'] = "Admin Profile NOT Added";
            header('Location: admin.php');
        }
    }
    else 
    {
        $_SESSION['message3'] = "Password and Confirm Password Does Not Match";
        header('Location: admin.php');
    }
}





// Edit Admin

if(isset($_POST['registerbtn']))
{
    $id = $_POST['edit_id'];
    
    $query = "SELECT * FROM addadmin WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);
}







// Update Admin

if(isset($_POST['updatebtn']))
{
    $id = $_POST['edit_id'];
    $username = $_POST['edit_username'];
    $email = $_POST['edit_email'];
    $password = $_POST['edit_password'];
    
    $query = "UPDATE addadmin SET username='$username', email='$email', password='$password', WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['message2'] = "Your Data is Updated";
        header('Location: admin.php');
    }
    else
    {
        $_SESSION['message2'] = "Your Data is Not Updated";
        header('Location: admin.php');
    }
}





// Delete Admin

if(isset($_POST['delete_btn']))
{
    $id = $_POST['delete_id'];
    
    $query = "DELETE FROM addadmin WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Your Data is Deleted";
        header('Location: admin.php');
    }
    else
    {
        $_SESSION['message'] = "Your Data is Not Deleted";
        header('Location: admin.php');
    }
}






?>