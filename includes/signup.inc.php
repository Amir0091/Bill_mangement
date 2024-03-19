<?php
include "loader.inc.php";

if (isset($_POST["signupSubmit"])){
    
    // Grab Data
    $email = $_POST["signupEmail"];
    $password = $_POST["signupPassword"];
    $repassword = $_POST["repassword"];


    // Controling classes
    $signup = new SignupCntrl($email, $password, $repassword);
    
    
    // Running Error Handlers and user sign up
    $signup->signupUser();
    
    // Login the User (unless they are admin)
    session_start();
    if(!isset($_SESSION['adminId'])){
        $login = new LoginCntrl($email, $password);
        $login->loginUser();

        // Back to front page
        header("location: ../index.php?error=none");
    } else {
        header("location: ../admin/admin.php?error=none");
    }



}