<?php

// Admin login

if(isset($_POST['logout_btn']))
{
    session_destroy();
    unset($_SESSION['username']);
}