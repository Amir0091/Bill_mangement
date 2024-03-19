<?php

include "loader.inc.php";

if (isset($_POST["adminSumbit"])){
    
    // Grab Data
    $email = $_POST["adminName"];
    $password = $_POST["adminPassword"];


    // Controling Inputs
    $login = new AdminLogin($email, $password);


    // Login user
    $login->loginAdmin();


    // Back to front page
    header("location: ../admin/admin.php?error=none");

}