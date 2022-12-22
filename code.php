<?php
include('security.php');


// Admin login

if(isset($_POST['login-btn']))
{
    $email_login = $_POST['emaill'];
    $password_login = $_POST['passwordd'];

    $query = "SELECT * FROM register WHERE email='$email_login' AND password='$password_login'";
    $query_run = mysqli_query($connection, $query);

    if(mysqli_fetch_array($query_run))
    {
        $_SESSION['username'] = $email_login;
        header('location: index.php');
    }
    else
    {
        $_SESSION['status'] = 'Email id / Password is Invalid';
        header('location: login.php');
    }
}








// Cakes Category

if(isset($_POST['save_faculty']))
{
    $title = $_POST['cake_title'];
    $description = $_POST['cake_description'];
    $price = $_POST['cake_price'];
    $category = $_POST['cake_category'];
    $images = $_FILES['faculty_image']['name'];

    if(file_exists("upload/" . $_FILES["faculty_image"]['name']))
    {
        $store = $_FILES["faculty_image"]['name'];
        $_SESSION['success'] = "Image already exists. '.$store'";
        header('location: cakes.php');
    }
    else 
    {   
            $query = "INSERT INTO addcakes ('title','description','price','category','images') VALUES ('$title','$description','$price','$category','$images')";
            $query_run = mysqli_query($connection, $query);

            if($query_run)
            {
                move_uploaded_file($_FILES["faculty_image"]["tmp_name"], "upload/".$_FILES["faculty_image"]['name']);
                $_SESSION['success'] = "Cakes Added";
                header('location: cakes.php');
            }
            else
            {
                $_SESSION['success'] = "Cakes Not Added";
                header('location: cakes.php');
            }
    }
}








// Add Staff and Admin

$con=new mysqli('localhost','root','','zcupcakes-admin');

if(isset($_POST['addadmin']))
{
    $usernname = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['confirmpassword'];

    $sql = "INSERT INTO 'addadmin' (username,email,password) VALUES ('$username','$email','$password')";
    $result = mysqli_query($con, $sql);
    if($result){
       echo "Data inserted successfully";
    }else{
        die(mysqli_error($con));
    }
}


?>