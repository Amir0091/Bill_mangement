<?php
include "loader.inc.php";


if (isset($_POST['paySuccess'])){
    
    // Grab Data
    $price = $_POST["billPrice"];
    $id = $_POST["idBillPay"];


    // Controling Inputs
    $Bill = new EmissionCntrl(null,null,null,null);
    $pay = $Bill->payment($id);

        header("location: ../bills.php?error=none");
        
    } else {
        header("location: ../bills.php?error=Failed");
    }
