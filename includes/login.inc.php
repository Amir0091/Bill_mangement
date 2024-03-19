<?php

include "loader.inc.php";

if (isset($_POST["loginSubmit"])){
    
    // Grab Data
    $email = $_POST["loginEmail"];
    $password = $_POST["loginPassword"];


    // Controling Inputs
    $login = new LoginCntrl($email, $password);


    // Login user
    $login->loginUser();


    // Back to front page
    header("location: ../index.php?error=none");

}