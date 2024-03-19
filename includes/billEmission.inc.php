<?php
include "loader.inc.php";

if (isset($_POST["billEmission"])){
    
    // Grab Data
    $admin = $_POST["adminBill"];
    $user = $_POST["userBill"];
    $detail = $_POST["billDetail"];
    $price = $_POST["billPrice"];


    // Controling classes
    $emission = new EmissionCntrl($admin, $user, $detail, $price);
    
    
    // Running Error Handlers and user sign up
    $emission->emitBill();
    
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