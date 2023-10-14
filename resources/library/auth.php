<?php

// https://www.php.net/manual/en/features.http-auth.php



// Check if the user is logged in, if not then redirect him to login page
if($_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}